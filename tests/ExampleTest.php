<?php

namespace Nepo\NepalCurrencyConverter\Tests;

use Nepo\NepalCurrencyConverter\NepalCurrencyConverter;

/**
 * Here we are testing the class NepalCurrencyConverter.
 *!! Write a test for every conveter function.
 */
it('convert Nepali currency to Indian currency', function () {
    $inr = NepalCurrencyConverter::convert(1)->toINR();
    expect($inr)->toBe(0.62);
});

it('convert Nepali currency to Chinese currency', function () {
    $yuan = NepalCurrencyConverter::convert(1)->toCNY();
    expect($yuan)->toBe(18.82);
});
