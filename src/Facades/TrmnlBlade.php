<?php

namespace Bnussbau\TrmnlBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bnussbau\TrmnlBlade\TrmnlBlade
 */
class TrmnlBlade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bnussbau\TrmnlBlade\TrmnlBlade::class;
    }
}
