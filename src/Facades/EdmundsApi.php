<?php

namespace Dansup\Edmunds\Facades;

use Illuminate\Support\Facades\Facade;

class EdmundsApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-edmunds';
    }
}