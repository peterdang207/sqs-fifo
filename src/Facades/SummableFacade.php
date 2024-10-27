<?php

namespace Peterdang\SqsFifo\Facades;

use Illuminate\Support\Facades\Facade;

class SummableFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Summable';
    }
}