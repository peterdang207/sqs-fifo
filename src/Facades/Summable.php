<?php

namespace Peterdang\SqsFifo\Facades;

use Illuminate\Support\Facades\Facade;

class Summable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Summable';
    }
}