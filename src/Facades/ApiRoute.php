<?php

namespace Examyou\RestAPI\Facades;

use Examyou\RestAPI\Routing\ApiRouter;
use Illuminate\Support\Facades\Facade;

class ApiRoute extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ApiRouter::class;
    }
}