<?php

namespace Sixincode\HiveTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\HiveTranslation\HiveTranslation
 */
class HiveTranslation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\HiveTranslation\HiveTranslation::class;
    }
}
