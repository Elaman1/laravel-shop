<?php

namespace App\Services;

use App\Models\Currency;

class CurrencyConversion
{
    public static function convert($sum, $originCurrencyCode = 'KZT', $targetCurrencyCode = null) {
       
        $originCurrency = Currency::byCode($originCurrencyCode)->first();

        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', 'KZT');
        }

        $targetCurrency = Currency::byCode($targetCurrencyCode)->first();

        return $sum * $originCurrency->rate / $targetCurrency->rate;
    }

    public static function getCurrencySymbol() {
        return session('currency', 'KZT');
    }
}
