<?php

use NehalPatel\UnitConversion\Temperature\Celsius;
use NehalPatel\UnitConversion\Temperature\Fahrenheit;
use NehalPatel\UnitConversion\Temperature\Kelvin;

//Fahrenheit Test Cases
it('can convert temperature from fahrenheit to celsius', function () {
    $f = new Fahrenheit(68);
    //68F to 20C
    expect($f->toCelsius()->convert())->toEqual(20);
});

it('can convert temperature from fahrenheit to kelvin', function () {
    $f = new Fahrenheit(68);
    //68F to 293.15K
    expect($f->toKelvin()->convert())->toEqual(293.15000000000003);
});

//Celsius Test Cases
it('can convert temperature from celsius to fahrenheit', function () {
    $c = new Celsius(20);
    //20C to 68F
    expect($c->toFahrenheit()->convert())->toEqual(68);
});

it('can convert temperature from celsius to kelvin', function () {
    $c = new Celsius(20);
    //20C to 293.15K
    expect($c->toKelvin()->convert())->toEqual(293.15);
});

//Kelvin Test Cases
it('can convert temperature from kelvin to fahrenheit', function () {
    $k = new Kelvin(293.15);
    //293.15K to 68F
    expect($k->toFahrenheit()->convert())->toEqual(68);
});

it('can convert temperature from kelvin to celsius', function () {
    $k = new Kelvin(293.15);
    //293.15K to 20C
    expect($k->toCelsius()->convert())->toEqual(20);
});
