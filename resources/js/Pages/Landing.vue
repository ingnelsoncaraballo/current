<template>
    <div>
        <navbar />
        <main>
            <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-50">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1584044283481-9b18070011e1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
          ">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12">
                                <h1 class="text-white font-semibold text-5xl">
                                    PULPOLINE CONVERTER
                                </h1>
                                <p class="mt-4 text-lg text-blueGray-200">
                                    By PulpoLine
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                    style="transform: translateZ(0);">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </div>

            <section class="pb-20 bg-blueGray-200 -mt-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center">
                        <div class="lg:pt-15 pt-15 w-full md:w-8/12 px-4 text-center">
                            <div class="relative min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg px-12 py-5">
                                <div class="flex flex-row mb-5">
                                    <div class="w-full">
                                        <h2 class="font-bold text-3xl">Convertir</h2>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-center w-full">
                                    <input v-model="amount" @change="change" type="number"
                                        placeholder="Cantidad a convertir"
                                        class="md:w-6/12 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full" />
                                </div>
                                <div class="flex flex-row">
                                    <div class="relative md:w-5/12 mb-3 mt-8 pl-12">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="full-name">
                                            De:
                                        </label>
                                        <select class="w-full" name='currencies' v-model="from" @change="change">
                                            <option value='AED' title='United Arab Emirates Dirham'>AED</option>
                                            <option value='AFN' title='Afghan Afghani'>AFN</option>
                                            <option value='ALL' title='Albanian Lek'>ALL</option>
                                            <option value='AMD' title='Armenian Dram'>AMD</option>
                                            <option value='ANG' title='Netherlands Antillean Guilder'>ANG</option>
                                            <option value='AOA' title='Angolan Kwanza'>AOA</option>
                                            <option value='ARS' title='Argentine Peso'>ARS</option>
                                            <option value='AUD' title='Australian Dollar'>AUD</option>
                                            <option value='AWG' title='Aruban Florin'>AWG</option>
                                            <option value='AZN' title='Azerbaijani Manat'>AZN</option>
                                            <option value='BAM' title='Bosnia-Herzegovina Convertible Mark'>BAM</option>
                                            <option value='BBD' title='Barbadian Dollar'>BBD</option>
                                            <option value='BDT' title='Bangladeshi Taka'>BDT</option>
                                            <option value='BGN' title='Bulgarian Lev'>BGN</option>
                                            <option value='BHD' title='Bahraini Dinar'>BHD</option>
                                            <option value='BIF' title='Burundian Franc'>BIF</option>
                                            <option value='BMD' title='Bermudan Dollar'>BMD</option>
                                            <option value='BND' title='Brunei Dollar'>BND</option>
                                            <option value='BOB' title='Bolivian Boliviano'>BOB</option>
                                            <option value='BRL' title='Brazilian Real'>BRL</option>
                                            <option value='BSD' title='Bahamian Dollar'>BSD</option>
                                            <option value='BTC' title='Bitcoin'>BTC</option>
                                            <option value='BTN' title='Bhutanese Ngultrum'>BTN</option>
                                            <option value='BWP' title='Botswanan Pula'>BWP</option>
                                            <option value='BYN' title='Belarusian Ruble'>BYN</option>
                                            <option value='BYR' title='Belarusian Ruble'>BYR</option>
                                            <option value='BZD' title='Belize Dollar'>BZD</option>
                                            <option value='CAD' title='Canadian Dollar'>CAD</option>
                                            <option value='CDF' title='Congolese Franc'>CDF</option>
                                            <option value='CHF' title='Swiss Franc'>CHF</option>
                                            <option value='CLF' title='Chilean Unit of Account (UF)'>CLF</option>
                                            <option value='CLP' title='Chilean Peso'>CLP</option>
                                            <option value='CNY' title='Chinese Yuan'>CNY</option>
                                            <option value='COP' title='Colombian Peso'>COP</option>
                                            <option value='CRC' title='Costa Rican Colón'>CRC</option>
                                            <option value='CUC' title='Cuba Convertible Peso'>CRC</option>
                                            <option value='CUP' title='Cuban Peso'>CUP</option>
                                            <option value='CVE' title='Cape Verdean Escudo'>CVE</option>
                                            <option value='CZK' title='Czech Republic Koruna'>CZK</option>
                                            <option value='DJF' title='Djiboutian Franc'>DJF</option>
                                            <option value='DKK' title='Danish Krone'>DKK</option>
                                            <option value='DOP' title='Dominican Peso'>DOP</option>
                                            <option value='DZD' title='Algerian Dinar'>DZD</option>
                                            <option value='EEK' title='Estonian Kroon'>EEK</option>
                                            <option value='EGP' title='Egyptian Pound'>EGP</option>
                                            <option value='ERN' title='Eritrean Nakfa'>ERN</option>
                                            <option value='ETB' title='Ethiopian Birr'>ETB</option>
                                            <option value='EUR' title='Euro'>EUR</option>
                                            <option value='FJD' title='Fijian Dollar'>FJD</option>
                                            <option value='FKP' title='Falkland Islands Pound'>FKP</option>
                                            <option value='GBP' title='British Pound Sterling'>GBP</option>
                                            <option value='GEL' title='Georgian Lari'>GEL</option>
                                            <option value='GGP' title='Guernsey Pound'>GGP</option>
                                            <option value='GHS' title='Ghanaian Cedi'>GHS</option>
                                            <option value='GIP' title='Gibraltar Pound'>GIP</option>
                                            <option value='GMD' title='Gambian Dalasi'>GMD</option>
                                            <option value='GNF' title='Guinean Franc'>GNF</option>
                                            <option value='GTQ' title='Guatemalan Quetzal'>GTQ</option>
                                            <option value='GYD' title='Guyanaese Dollar'>GYD</option>
                                            <option value='HKD' title='Hong Kong Dollar'>HKD</option>
                                            <option value='HNL' title='Honduran Lempira'>HNL</option>
                                            <option value='HRK' title='Croatian Kuna'>HRK</option>
                                            <option value='HTG' title='Haitian Gourde'>HTG</option>
                                            <option value='HUF' title='Hungarian Forint'>HUF</option>
                                            <option value='IDR' title='Indonesian Rupiah'>IDR</option>
                                            <option value='ILS' title='Israeli New Sheqel'>ILS</option>
                                            <option value='IMP' title='Manx pound'>IMP</option>
                                            <option value='INR' title='Indian Rupee'>INR</option>
                                            <option value='IQD' title='Iraqi Dinar'>IQD</option>
                                            <option value='IRR' title='Iranian Rial'>IRR</option>
                                            <option value='ISK' title='Icelandic Króna'>ISK</option>
                                            <option value='JEP' title='Jersey Pound'>JEP</option>
                                            <option value='JMD' title='Jamaican Dollar'>JMD</option>
                                            <option value='JOD' title='Jordanian Dinar'>JOD</option>
                                            <option value='JPY' title='Japanese Yen'>JPY</option>
                                            <option value='KES' title='Kenyan Shilling'>KES</option>
                                            <option value='KGS' title='Kyrgystani Som'>KGS</option>
                                            <option value='KHR' title='Cambodian Riel'>KHR</option>
                                            <option value='KMF' title='Comorian Franc'>KMF</option>
                                            <option value='KPW' title='North Korean Won'>KPW</option>
                                            <option value='KRW' title='South Korean Won'>KRW</option>
                                            <option value='KWD' title='Kuwaiti Dinar'>KWD</option>
                                            <option value='KYD' title='Cayman Islands Dollar'>KYD</option>
                                            <option value='KZT' title='Kazakhstani Tenge'>KZT</option>
                                            <option value='LAK' title='Laotian Kip'>LAK</option>
                                            <option value='LBP' title='Lebanese Pound'>LBP</option>
                                            <option value='LKR' title='Sri Lankan Rupee'>LKR</option>
                                            <option value='LRD' title='Liberian Dollar'>LRD</option>
                                            <option value='LSL' title='Lesotho Loti'>LSL</option>
                                            <option value='LTL' title='Lithuanian Litas'>LTL</option>
                                            <option value='LVL' title='Latvian Lats'>LVL</option>
                                            <option value='LYD' title='Libyan Dinar'>LYD</option>
                                            <option value='MAD' title='Moroccan Dirham'>MAD</option>
                                            <option value='MDL' title='Moldovan Leu'>MDL</option>
                                            <option value='MGA' title='Malagasy Ariary'>MGA</option>
                                            <option value='MKD' title='Macedonian Denar'>MKD</option>
                                            <option value='MMK' title='Myanma Kyat'>MMK</option>
                                            <option value='MNT' title='Mongolian Tugrik'>MNT</option>
                                            <option value='MOP' title='Macanese Pataca'>MOP</option>
                                            <option value='MRO' title='Mauritanian Ouguiya'>MRO</option>
                                            <option value='MUR' title='Mauritian Rupee'>MUR</option>
                                            <option value='MVR' title='Maldivian Rufiyaa'>MVR</option>
                                            <option value='MWK' title='Malawian Kwacha'>MWK</option>
                                            <option value='MXN' title='Mexican Peso'>MXN</option>
                                            <option value='MYR' title='Malaysian Ringgit'>MYR</option>
                                            <option value='MZN' title='Mozambican Metical'>MZN</option>
                                            <option value='NAD' title='Namibian Dollar'>NAD</option>
                                            <option value='NGN' title='Nigerian Naira'>NGN</option>
                                            <option value='NIO' title='Nicaraguan Córdoba'>NIO</option>
                                            <option value='NOK' title='Norwegian Krone'>NOK</option>
                                            <option value='NPR' title='Nepalese Rupee'>NPR</option>
                                            <option value='NZD' title='New Zealand Dollar'>NZD</option>
                                            <option value='OMR' title='Omani Rial'>OMR</option>
                                            <option value='PAB' title='Panamanian Balboa'>PAB</option>
                                            <option value='PEN' title='Peruvian Nuevo Sol'>PEN</option>
                                            <option value='PGK' title='Papua New Guinean Kina'>PGK</option>
                                            <option value='PHP' title='Philippine Peso'>PHP</option>
                                            <option value='PKR' title='Pakistani Rupee'>PKR</option>
                                            <option value='PLN' title='Polish Zloty'>PLN</option>
                                            <option value='PYG' title='Paraguayan Guarani'>PYG</option>
                                            <option value='QAR' title='Qatari Rial'>QAR</option>
                                            <option value='RON' title='Romanian Leu'>RON</option>
                                            <option value='RSD' title='Serbian Dinar'>RSD</option>
                                            <option value='RUB' title='Russian Ruble'>RUB</option>
                                            <option value='RWF' title='Rwandan Franc'>RWF</option>
                                            <option value='SAR' title='Saudi Riyal'>SAR</option>
                                            <option value='SBD' title='Solomon Islands Dollar'>SBD</option>
                                            <option value='SCR' title='Seychellois Rupee'>SCR</option>
                                            <option value='SDG' title='Sudanese Pound'>SDG</option>
                                            <option value='SEK' title='Swedish Krona'>SEK</option>
                                            <option value='SGD' title='Singapore Dollar'>SGD</option>
                                            <option value='SHP' title='Saint Helena Pound'>SHP</option>
                                            <option value='SLL' title='Sierra Leonean Leone'>SLL</option>
                                            <option value='SOS' title='Somali Shilling'>SOS</option>
                                            <option value='SRD' title='Surinamese Dollar'>SRD</option>
                                            <option value='STD' title='São Tomé and Príncipe Dobra'>STD</option>
                                            <option value='SVC' title='Salvadoran Colón'>SVC</option>
                                            <option value='SYP' title='Syrian Pound'>SYP</option>
                                            <option value='SZL' title='Swazi Lilangeni'>SZL</option>
                                            <option value='THB' title='Thai Baht'>THB</option>
                                            <option value='TJS' title='Tajikistani Somoni'>TJS</option>
                                            <option value='TMT' title='Turkmenistani Manat'>TMT</option>
                                            <option value='TND' title='Tunisian Dinar'>TND</option>
                                            <option value='TOP' title='Tongan Pa?anga'>TOP</option>
                                            <option value='TRY' title='Turkish Lira'>TRY</option>
                                            <option value='TTD' title='Trinidad and Tobago Dollar'>TTD</option>
                                            <option value='TWD' title='New Taiwan Dollar'>TWD</option>
                                            <option value='TZS' title='Tanzanian Shilling'>TZS</option>
                                            <option value='UAH' title='Ukrainian Hryvnia'>UAH</option>
                                            <option value='UGX' title='Ugandan Shilling'>UGX</option>
                                            <option value='USD' title='United States Dollar'>USD</option>
                                            <option value='UYU' title='Uruguayan Peso'>UYU</option>
                                            <option value='UZS' title='Uzbekistan Som'>UZS</option>
                                            <option value='VEF' title='Venezuelan Bolívar'>VEF</option>
                                            <option value='VND' title='Vietnamese Dong'>VND</option>
                                            <option value='VUV' title='Vanuatu Vatu'>VUV</option>
                                            <option value='WST' title='Samoan Tala'>WST</option>
                                            <option value='XAF' title='CFA Franc BEAC'>XAF</option>
                                            <option value='XAG' title='Silver (troy ounce)'>XAG</option>
                                            <option value='XAU' title='Gold (troy ounce)'>XAU</option>
                                            <option value='XCD' title='East Caribbean Dollar'>XCD</option>
                                            <option value='XDR' title='Special Drawing Rights'>XDR</option>
                                            <option value='XOF' title='CFA Franc BCEAO'>XOF</option>
                                            <option value='XPF' title='CFP Franc'>XPF</option>
                                            <option value='YER' title='Yemeni Rial'>YER</option>
                                            <option value='ZAR' title='South African Rand'>ZAR</option>
                                            <option value='ZMK' title='Zambian Kwacha (pre-2013)'>ZMK</option>
                                            <option value='ZMW' title='Zambian Kwacha'>ZWL</option>
                                            <option value='ZWL' title='Zimbabwean Dollar'>ZWL</option>
                                        </select>
                                    </div>

                                    <div class="relative md:w-4/12 mb-3 mt-8">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="full-name">
                                            =
                                        </label>
                                    </div>

                                    <div class="relative md:w-5/12 mb-3 mt-8 pr-12">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="full-name">
                                            A:
                                        </label>
                                        <select class="w-full" name='currencies' v-model="to" @change="change">
                                            <option value='AED' title='United Arab Emirates Dirham'>AED</option>
                                            <option value='AFN' title='Afghan Afghani'>AFN</option>
                                            <option value='ALL' title='Albanian Lek'>ALL</option>
                                            <option value='AMD' title='Armenian Dram'>AMD</option>
                                            <option value='ANG' title='Netherlands Antillean Guilder'>ANG</option>
                                            <option value='AOA' title='Angolan Kwanza'>AOA</option>
                                            <option value='ARS' title='Argentine Peso'>ARS</option>
                                            <option value='AUD' title='Australian Dollar'>AUD</option>
                                            <option value='AWG' title='Aruban Florin'>AWG</option>
                                            <option value='AZN' title='Azerbaijani Manat'>AZN</option>
                                            <option value='BAM' title='Bosnia-Herzegovina Convertible Mark'>BAM</option>
                                            <option value='BBD' title='Barbadian Dollar'>BBD</option>
                                            <option value='BDT' title='Bangladeshi Taka'>BDT</option>
                                            <option value='BGN' title='Bulgarian Lev'>BGN</option>
                                            <option value='BHD' title='Bahraini Dinar'>BHD</option>
                                            <option value='BIF' title='Burundian Franc'>BIF</option>
                                            <option value='BMD' title='Bermudan Dollar'>BMD</option>
                                            <option value='BND' title='Brunei Dollar'>BND</option>
                                            <option value='BOB' title='Bolivian Boliviano'>BOB</option>
                                            <option value='BRL' title='Brazilian Real'>BRL</option>
                                            <option value='BSD' title='Bahamian Dollar'>BSD</option>
                                            <option value='BTC' title='Bitcoin'>BTC</option>
                                            <option value='BTN' title='Bhutanese Ngultrum'>BTN</option>
                                            <option value='BWP' title='Botswanan Pula'>BWP</option>
                                            <option value='BYN' title='Belarusian Ruble'>BYN</option>
                                            <option value='BYR' title='Belarusian Ruble'>BYR</option>
                                            <option value='BZD' title='Belize Dollar'>BZD</option>
                                            <option value='CAD' title='Canadian Dollar'>CAD</option>
                                            <option value='CDF' title='Congolese Franc'>CDF</option>
                                            <option value='CHF' title='Swiss Franc'>CHF</option>
                                            <option value='CLF' title='Chilean Unit of Account (UF)'>CLF</option>
                                            <option value='CLP' title='Chilean Peso'>CLP</option>
                                            <option value='CNY' title='Chinese Yuan'>CNY</option>
                                            <option value='COP' title='Colombian Peso'>COP</option>
                                            <option value='CRC' title='Costa Rican Colón'>CRC</option>
                                            <option value='CUC' title='Cuba Convertible Peso'>CRC</option>
                                            <option value='CUP' title='Cuban Peso'>CUP</option>
                                            <option value='CVE' title='Cape Verdean Escudo'>CVE</option>
                                            <option value='CZK' title='Czech Republic Koruna'>CZK</option>
                                            <option value='DJF' title='Djiboutian Franc'>DJF</option>
                                            <option value='DKK' title='Danish Krone'>DKK</option>
                                            <option value='DOP' title='Dominican Peso'>DOP</option>
                                            <option value='DZD' title='Algerian Dinar'>DZD</option>
                                            <option value='EEK' title='Estonian Kroon'>EEK</option>
                                            <option value='EGP' title='Egyptian Pound'>EGP</option>
                                            <option value='ERN' title='Eritrean Nakfa'>ERN</option>
                                            <option value='ETB' title='Ethiopian Birr'>ETB</option>
                                            <option value='EUR' title='Euro'>EUR</option>
                                            <option value='FJD' title='Fijian Dollar'>FJD</option>
                                            <option value='FKP' title='Falkland Islands Pound'>FKP</option>
                                            <option value='GBP' title='British Pound Sterling'>GBP</option>
                                            <option value='GEL' title='Georgian Lari'>GEL</option>
                                            <option value='GGP' title='Guernsey Pound'>GGP</option>
                                            <option value='GHS' title='Ghanaian Cedi'>GHS</option>
                                            <option value='GIP' title='Gibraltar Pound'>GIP</option>
                                            <option value='GMD' title='Gambian Dalasi'>GMD</option>
                                            <option value='GNF' title='Guinean Franc'>GNF</option>
                                            <option value='GTQ' title='Guatemalan Quetzal'>GTQ</option>
                                            <option value='GYD' title='Guyanaese Dollar'>GYD</option>
                                            <option value='HKD' title='Hong Kong Dollar'>HKD</option>
                                            <option value='HNL' title='Honduran Lempira'>HNL</option>
                                            <option value='HRK' title='Croatian Kuna'>HRK</option>
                                            <option value='HTG' title='Haitian Gourde'>HTG</option>
                                            <option value='HUF' title='Hungarian Forint'>HUF</option>
                                            <option value='IDR' title='Indonesian Rupiah'>IDR</option>
                                            <option value='ILS' title='Israeli New Sheqel'>ILS</option>
                                            <option value='IMP' title='Manx pound'>IMP</option>
                                            <option value='INR' title='Indian Rupee'>INR</option>
                                            <option value='IQD' title='Iraqi Dinar'>IQD</option>
                                            <option value='IRR' title='Iranian Rial'>IRR</option>
                                            <option value='ISK' title='Icelandic Króna'>ISK</option>
                                            <option value='JEP' title='Jersey Pound'>JEP</option>
                                            <option value='JMD' title='Jamaican Dollar'>JMD</option>
                                            <option value='JOD' title='Jordanian Dinar'>JOD</option>
                                            <option value='JPY' title='Japanese Yen'>JPY</option>
                                            <option value='KES' title='Kenyan Shilling'>KES</option>
                                            <option value='KGS' title='Kyrgystani Som'>KGS</option>
                                            <option value='KHR' title='Cambodian Riel'>KHR</option>
                                            <option value='KMF' title='Comorian Franc'>KMF</option>
                                            <option value='KPW' title='North Korean Won'>KPW</option>
                                            <option value='KRW' title='South Korean Won'>KRW</option>
                                            <option value='KWD' title='Kuwaiti Dinar'>KWD</option>
                                            <option value='KYD' title='Cayman Islands Dollar'>KYD</option>
                                            <option value='KZT' title='Kazakhstani Tenge'>KZT</option>
                                            <option value='LAK' title='Laotian Kip'>LAK</option>
                                            <option value='LBP' title='Lebanese Pound'>LBP</option>
                                            <option value='LKR' title='Sri Lankan Rupee'>LKR</option>
                                            <option value='LRD' title='Liberian Dollar'>LRD</option>
                                            <option value='LSL' title='Lesotho Loti'>LSL</option>
                                            <option value='LTL' title='Lithuanian Litas'>LTL</option>
                                            <option value='LVL' title='Latvian Lats'>LVL</option>
                                            <option value='LYD' title='Libyan Dinar'>LYD</option>
                                            <option value='MAD' title='Moroccan Dirham'>MAD</option>
                                            <option value='MDL' title='Moldovan Leu'>MDL</option>
                                            <option value='MGA' title='Malagasy Ariary'>MGA</option>
                                            <option value='MKD' title='Macedonian Denar'>MKD</option>
                                            <option value='MMK' title='Myanma Kyat'>MMK</option>
                                            <option value='MNT' title='Mongolian Tugrik'>MNT</option>
                                            <option value='MOP' title='Macanese Pataca'>MOP</option>
                                            <option value='MRO' title='Mauritanian Ouguiya'>MRO</option>
                                            <option value='MUR' title='Mauritian Rupee'>MUR</option>
                                            <option value='MVR' title='Maldivian Rufiyaa'>MVR</option>
                                            <option value='MWK' title='Malawian Kwacha'>MWK</option>
                                            <option value='MXN' title='Mexican Peso'>MXN</option>
                                            <option value='MYR' title='Malaysian Ringgit'>MYR</option>
                                            <option value='MZN' title='Mozambican Metical'>MZN</option>
                                            <option value='NAD' title='Namibian Dollar'>NAD</option>
                                            <option value='NGN' title='Nigerian Naira'>NGN</option>
                                            <option value='NIO' title='Nicaraguan Córdoba'>NIO</option>
                                            <option value='NOK' title='Norwegian Krone'>NOK</option>
                                            <option value='NPR' title='Nepalese Rupee'>NPR</option>
                                            <option value='NZD' title='New Zealand Dollar'>NZD</option>
                                            <option value='OMR' title='Omani Rial'>OMR</option>
                                            <option value='PAB' title='Panamanian Balboa'>PAB</option>
                                            <option value='PEN' title='Peruvian Nuevo Sol'>PEN</option>
                                            <option value='PGK' title='Papua New Guinean Kina'>PGK</option>
                                            <option value='PHP' title='Philippine Peso'>PHP</option>
                                            <option value='PKR' title='Pakistani Rupee'>PKR</option>
                                            <option value='PLN' title='Polish Zloty'>PLN</option>
                                            <option value='PYG' title='Paraguayan Guarani'>PYG</option>
                                            <option value='QAR' title='Qatari Rial'>QAR</option>
                                            <option value='RON' title='Romanian Leu'>RON</option>
                                            <option value='RSD' title='Serbian Dinar'>RSD</option>
                                            <option value='RUB' title='Russian Ruble'>RUB</option>
                                            <option value='RWF' title='Rwandan Franc'>RWF</option>
                                            <option value='SAR' title='Saudi Riyal'>SAR</option>
                                            <option value='SBD' title='Solomon Islands Dollar'>SBD</option>
                                            <option value='SCR' title='Seychellois Rupee'>SCR</option>
                                            <option value='SDG' title='Sudanese Pound'>SDG</option>
                                            <option value='SEK' title='Swedish Krona'>SEK</option>
                                            <option value='SGD' title='Singapore Dollar'>SGD</option>
                                            <option value='SHP' title='Saint Helena Pound'>SHP</option>
                                            <option value='SLL' title='Sierra Leonean Leone'>SLL</option>
                                            <option value='SOS' title='Somali Shilling'>SOS</option>
                                            <option value='SRD' title='Surinamese Dollar'>SRD</option>
                                            <option value='STD' title='São Tomé and Príncipe Dobra'>STD</option>
                                            <option value='SVC' title='Salvadoran Colón'>SVC</option>
                                            <option value='SYP' title='Syrian Pound'>SYP</option>
                                            <option value='SZL' title='Swazi Lilangeni'>SZL</option>
                                            <option value='THB' title='Thai Baht'>THB</option>
                                            <option value='TJS' title='Tajikistani Somoni'>TJS</option>
                                            <option value='TMT' title='Turkmenistani Manat'>TMT</option>
                                            <option value='TND' title='Tunisian Dinar'>TND</option>
                                            <option value='TOP' title='Tongan Pa?anga'>TOP</option>
                                            <option value='TRY' title='Turkish Lira'>TRY</option>
                                            <option value='TTD' title='Trinidad and Tobago Dollar'>TTD</option>
                                            <option value='TWD' title='New Taiwan Dollar'>TWD</option>
                                            <option value='TZS' title='Tanzanian Shilling'>TZS</option>
                                            <option value='UAH' title='Ukrainian Hryvnia'>UAH</option>
                                            <option value='UGX' title='Ugandan Shilling'>UGX</option>
                                            <option value='USD' title='United States Dollar'>USD</option>
                                            <option value='UYU' title='Uruguayan Peso'>UYU</option>
                                            <option value='UZS' title='Uzbekistan Som'>UZS</option>
                                            <option value='VEF' title='Venezuelan Bolívar'>VEF</option>
                                            <option value='VND' title='Vietnamese Dong'>VND</option>
                                            <option value='VUV' title='Vanuatu Vatu'>VUV</option>
                                            <option value='WST' title='Samoan Tala'>WST</option>
                                            <option value='XAF' title='CFA Franc BEAC'>XAF</option>
                                            <option value='XAG' title='Silver (troy ounce)'>XAG</option>
                                            <option value='XAU' title='Gold (troy ounce)'>XAU</option>
                                            <option value='XCD' title='East Caribbean Dollar'>XCD</option>
                                            <option value='XDR' title='Special Drawing Rights'>XDR</option>
                                            <option value='XOF' title='CFA Franc BCEAO'>XOF</option>
                                            <option value='XPF' title='CFP Franc'>XPF</option>
                                            <option value='YER' title='Yemeni Rial'>YER</option>
                                            <option value='ZAR' title='South African Rand'>ZAR</option>
                                            <option value='ZMK' title='Zambian Kwacha (pre-2013)'>ZMK</option>
                                            <option value='ZMW' title='Zambian Kwacha'>ZWL</option>
                                            <option value='ZWL' title='Zimbabwean Dollar'>ZWL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="relative mb-3 mt-8 pl-12 w-full justify-center">
                                        <h6 class="text-xl font-semibold pb-4">{{ textResult }}</h6>
                                        <button @click="consulta"
                                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 mb-8 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                            type="button">
                                            Convertir
                                        </button>


                                        <div v-if="alertOpen"
                                            class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
                                            <span class="text-xl inline-block mr-4 align-middle">
                                                <i class="fas fa-bell"></i>{{ " " }}
                                            </span>
                                            <span class="inline-block align-middle mr-8">
                                                <b class="capitalize">Atención! </b> {{ messageError }}
                                            </span>
                                            <button
                                                class="absolute bg-transparent text-2xl font-semibold leading-none right-1 top-0 mt-4 mr-6 outline-none focus:outline-none"
                                                v-on:click="closeAlert()">
                                                <span>×</span>
                                            </button>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center mt-32">
                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                                <div class="flex-auto p-5 lg:p-10">
                                    <h4 class="text-2xl font-semibold">
                                        Histórico de consultas
                                    </h4>
                                    <div class="relative w-full mb-3 mt-8">
                                        <card-table :header="headerHistory" :dataJson="lastedExchanges" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-800">
                                <div class="flex-auto p-5 lg:p-10">
                                    <h4 class="text-2xl font-semibold text-white">
                                        Valor monedas más importantes
                                    </h4>
                                    <div class="relative w-full mb-3 mt-8">
                                        <card-table :header="headerLive" :dataJson="liveExchanges" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer-component />
    </div>
</template>
<script>
import Navbar from "@/Components/Navbars/AuthNavbar.vue";
import FooterComponent from "@/Components/Footers/Footer.vue";
import CardTable from "@/Components/Cards/CardTable.vue";

export default {
    emits: ['update:from', 'update:to', 'update:amount'],
    data() {
        return {
            alertOpen: false,
            messageError: "",
            from: "COP",
            to: "USD",
            textResult: "",
            amount: "",
            headerLive: ["Principal", "Secundaria", "Valor"],
            headerHistory: ["De", "A", "Valor"],
        };
    },
    components: {
        Navbar,
        FooterComponent,
        CardTable,
    },
    props: {
        phpVersion: String,
        liveExchanges: Array,
        lastedExchanges: Array

    },
    mounted() {
        //this.GetListData();
    },
    methods: {
        closeAlert() {
            this.alertOpen = false;
            this.messageError = "";
        },
        getData() {
            //let valor = 10;
            //
            fetch('http://127.0.0.1:8000/api/convert/' + this.from + '/' + this.to + '/' + this.amount)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.message == true) {
                        this.textResult = this.amount + " " + this.from + " = " + data.result + " " + this.to;
                    } else {
                        this.alertOpen = true;
                        this.messageError = "Ha excedido los limites diarios de consulta.";
                    }
                })
                .catch(error => console.log(error));
        },
        change(event) {
            if (this.amount !== "") {
                this.closeAlert();
            }
            this.$emit("update:from", this.from);
            this.$emit("update:to", this.to);
            this.$emit("update:amount", this.amount);
        },
        consulta() {
            if (this.amount !== "") {
                this.closeAlert()
                this.getData();
            } else {
                this.messageError = "Por favor ingrese una cantidad correcta a convertir";
                this.alertOpen = true;
            }
        }
    },
};
</script>
