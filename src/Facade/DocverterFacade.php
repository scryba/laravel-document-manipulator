<?php

namespace DocVerter\Facades;

use Illuminate\Support\Facades\Facade;

class DocverterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docverter';
    }
}
