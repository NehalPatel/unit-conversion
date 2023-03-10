<?php

use NehalPatel\UnitConversion\Length\Kilometer;

it('can convert Kilometer to Meter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMeter()->convert(), 4))->toEqual(10000);
});

it('can convert Kilometer to Centimeter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toCentimeter()->convert(), 4))->toEqual(1000000);
});

it('can convert Kilometer to Millimeter', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMillimeter()->convert(), 4))->toEqual(10000000);
});

it('can convert Kilometer to Mile', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toMile()->convert(), 4))->toEqual(6.2137);
});

it('can convert Kilometer to Yard', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toYard()->convert(), 4))->toEqual(10936.1);
});

it('can convert Kilometer to Foot', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toFoot()->convert(), 4))->toEqual(32808.4);
});

it('can convert Kilometer to Inch', function () {
    $kilometer = new Kilometer(10);
    expect(round($kilometer->toInch()->convert(), 4))->toEqual(393701);
});


//use function Pest\Faker\faker;
//
//test('it can convert Kilometer to Foot', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $foot = $kilometer * 3280.84;
//    expect(convertKilometerToFoot($kilometer))->toBeApproximately($foot, 0.01);
//});
//
//test('it can convert Kilometer to Kilometer', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    expect(convertKilometerToKilometer($kilometer))->toBe($kilometer);
//});
//
//test('it can convert Kilometer to Yard', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $yard = $kilometer * 1093.61;
//    expect(convertKilometerToYard($kilometer))->toBeApproximately($yard, 0.01);
//});
//
//test('it can convert Kilometer to Millimeter', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $millimeter = $kilometer * 1000000;
//    expect(convertKilometerToMillimeter($kilometer))->toBe($millimeter);
//});
//
//test('it can convert Kilometer to Centimeter', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $centimeter = $kilometer * 100000;
//    expect(convertKilometerToCentimeter($kilometer))->toBe($centimeter);
//});
//
//test('it can convert Kilometer to Inch', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $inch = $kilometer * 39370.1;
//    expect(convertKilometerToInch($kilometer))->toBeApproximately($inch, 0.01);
//});
//
//test('it can convert Kilometer to Mile', function () {
//    $kilometer = faker()->randomFloat(2, 1, 1000);
//    $mile = $kilometer / 1.60934;
//    expect(convertKilometerToMile($kilometer))->toBeApproximately($mile, 0.01);
//});
