<?php


namespace Brazhinskyserhei\Simple;


use Illuminate\Support\Facades\Facade;

class Simple extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simple';
    }
}