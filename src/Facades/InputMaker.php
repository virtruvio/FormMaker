<?php

namespace Grafite\FormMaker\Facades;

use Illuminate\Support\Facades\Facade;

class InputMaker extends Facade
{
    /**
     * Create the Facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'InputMaker';
    }
}
