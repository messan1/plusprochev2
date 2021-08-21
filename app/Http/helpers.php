<?php

use Illuminate\Support\Str;
use AmrShawky\LaravelCurrency\Facade\Currency;

function refCode($prefix, $id) {
    //prefix in {'OFR', 'RES'}
    return privateGenerator($prefix, $id, 2, 3);
}

function changeStr($from, $to, $amount, $date) {
    $value = round( change($from, $to, $amount, $date), 2 );
    $currencyArray = array(
        'EUR' => '€',
        'USD' => '$',
        'XOF' => 'FCFA'
    );
    $toStr = $currencyArray[ Str::upper($to) ];
    return "$value $toStr";
}

//change($model->currency, $cookie->currency, $amount)

function change($from, $to, $amount, $date) {
    return privateChangeCurrency($from, $to, $amount, $date->format("Y-m-d"));
}

/*function sendMail($to, $from, $subject, $message, $cc, $cci) {
    return ;
}*/

function privateChangeCurrency($from = "XOF", $to = "EUR", $amount = 1, $date) {
    $value = Currency::convert()
        ->from($from)
        ->to($to)
        ->amount($amount)
        ->date($date)
        ->withoutVerifying()
        ->get();
    return $value;
}

function privateGenerator($prefix, $id, $n, $length) {
    $strId = sprintf("%'.04d", $id);
    $ucode = Str::upper("$prefix-$strId");

    for ($i=1; $i<=$n; $i++) {
        $ucode = "$ucode-" . Str::upper( Str::random($length) );
    }

    return $ucode;
}
