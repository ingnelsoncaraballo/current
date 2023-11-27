<?php

namespace App\Http\Controllers;

use App\Models\Conversion;
use App\Models\Exchange;
use Carbon\Carbon;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class WebController extends Controller
{

    public function landing()
    {
        $lastedExchanges = Exchange::orderBy('id', 'desc')->take(5)->get();
        return Inertia::render('Landing', [
            'title' => "Inicio",
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'liveExchanges' => $this->convert(),
            'lastedExchanges' => $lastedExchanges->toJson()
        ]);
    }

    public function convert()
    {
        //URL: https://api.currencylayer.com/convert?from=EUR&to=GBP&amount=100
        $endpoint = 'live';
        $access_key = env('ACCESS_KEY_CURRENCY');
        $base_url = env('BASE_URL_CURRENCY');
        $url = $base_url . $endpoint . '?access_key=' . $access_key . '&currencies=EUR,COP,BOB,ARS,MXN';


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);

        if ($exchangeRates["success"]) {
            $result = [];
            foreach ($exchangeRates["quotes"] as $key => $elem) {
                array_push($result, [
                    "from" => "USD",
                    "to" => substr($key, 2, 3),
                    "amount" => $elem
                ]);
            }
            return json_encode($result);
        } else {
            return false;
        }
    }
}
