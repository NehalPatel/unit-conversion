<?php

namespace NehalPatel\UnitConversion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NehalPatel\UnitConversion\UnitConversion
 */
class UnitConversion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NehalPatel\UnitConversion\UnitConversion::class;
    }
}
