<?php

//Milligram Test Cases

use NehalPatel\UnitConversion\Weight\Milligram;

it('can convert Milligram to Kilogram', function () {
    $milligram = new Milligram(1000000);
    expect($milligram->toKilogram()->convert())->toEqual(1);
});

it('can convert Milligram to Gram', function () {
    $milligram = new Milligram(1000000);
    expect($milligram->toGram()->convert())->toEqual(1000);
});

it('can convert Milligram to Matric Ton', function () {
    $milligram = new Milligram(1000000);
    expect(round($milligram->toMatricTon()->convert(), 4))->toEqual(0.001);
});

it('can convert Milligram to Long Ton', function () {
    $milligram = new Milligram(1000000);
    expect(round($milligram->toLongTon()->convert(), 4))->toEqual(0.001);
});

it('can convert Milligram to Short Ton', function () {
    $milligram = new Milligram(1000000);
    expect(round($milligram->toShortTon()->convert(), 4))->toEqual(0.0011);
});

it('can convert Milligram to Pound', function () {
    $milligram = new Milligram(1000000);
    expect(round($milligram->toPound()->convert(), 4))->toEqual(2.2046);
});

it('can convert Milligram to Ounce', function () {
    $milligram = new Milligram(1000000);
    expect(round($milligram->toOunce()->convert(), 4))->toEqual(35.274);
});
