<?php

//ShortTon Test Cases

use NehalPatel\UnitConversion\Weight\ShortTon;

it('can convert ShortTon to Kilogram', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toKilogram()->convert(), 4))->toEqual(907.1847);
});

it('can convert ShortTon to Gram', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toGram()->convert(), 4))->toEqual(907184.74);
});

it('can convert ShortTon to Milligram', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toMilligram()->convert(), 4))->toEqual(907184740);
});

it('can convert ShortTon to Matric Ton', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toMatricTon()->convert(), 4))->toEqual(0.9074);
});

it('can convert ShortTon to Long Ton', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toLongTon()->convert(), 4))->toEqual(0.8929);
});

it('can convert ShortTon to Pound', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toPound()->convert(), 4))->toEqual(2000);
});

it('can convert ShortTon to Ounce', function () {
    $short_ton = new ShortTon(1);
    expect(round($short_ton->toOunce()->convert(), 4))->toEqual(32000);
});
