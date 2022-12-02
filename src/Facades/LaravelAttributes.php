<?php

namespace BardSoftware\LaravelAttributes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BardSoftware\LaravelAttributes\LaravelAttributes
 */
class LaravelAttributes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BardSoftware\LaravelAttributes\LaravelAttributes::class;
    }
}
