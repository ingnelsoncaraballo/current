<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * save and rturn the convertion.
     */
    public function convert(Request $r)
    {
        //URL: https://api.currencylayer.com/convert?from=EUR&to=GBP&amount=100
        $endpoint = 'convert';
        $access_key = env('ACCESS_KEY_CURRENCY');
        $base_url = env('BASE_URL_CURRENCY');
        $url = $base_url . $endpoint . '?access_key=' . $access_key . '&from=' . $r->from . '&to=' . $r->to . '&amount=' . $r->amount;

        $hoy = Exchange::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->where('ip', $this->getIp())->count();

        if ($hoy < 5) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response:
            $exchangeRates = json_decode($json, true);

            if ($exchangeRates["success"]) {
                Exchange::create([
                    'ip' => $this->getIp(),
                    'from' => $r->from,
                    'to' => $r->to,
                    'amount' => $r->amount
                ]);

                return response()->json(["message" => $exchangeRates["success"], "result" => $exchangeRates["result"]]);
            } else {
                return response()->json(["message" => false]);
            }
        } else {
            return response()->json(["message" => "exceed"]);
        }
    }


    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return the server IP if the client IP is not found using this method.
    }
}
