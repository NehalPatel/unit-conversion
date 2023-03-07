<?php

//Kilogram Test Cases

use NehalPatel\UnitConversion\Weight\Kilogram;

// beforeEach(function () {
//     $this->kilogram = new Kilogram(10);
// });

//10Kg to 10000G
it('can convert Kilogram to Gram', function () {
    $kilogram = new Kilogram(10);
    expect($kilogram->toGram()->convert())->toEqual(10000);
});

//10Kg to 10000000MG
it('can convert Kilogram to Milligram', function () {
    $kilogram = new Kilogram(10);
    expect($kilogram->toMilligram()->convert())->toEqual(10000000);
});

it('can convert Kilogram to Matric Ton', function () {
    $kilogram = new Kilogram(10);
    expect($kilogram->toMatricTon()->convert())->toEqual(0.01);
});

it('can convert Kilogram to Long Ton', function () {
    $kilogram = new Kilogram(10);
    expect(round($kilogram->toLongTon()->convert(), 4))->toEqual(0.0098);
});

it('can convert Kilogram to Short Ton', function () {
    $kilogram = new Kilogram(10);
    expect(round($kilogram->toShortTon()->convert(), 4))->toEqual(0.0110);
});

it('can convert Kilogram to Pound', function () {
    $kilogram = new Kilogram(10);
    expect(round($kilogram->toPound()->convert(), 4))->toEqual(22.0462);
});

it('can convert Kilogram to Ounce', function () {
    $kilogram = new Kilogram(10);
    expect(round($kilogram->toOunce()->convert(), 4))->toEqual(352.7396);
});
