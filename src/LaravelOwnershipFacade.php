<?php

namespace Lukasmundt\LaravelOwnership;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lukasmundt\LaravelOwnership\Skeleton\SkeletonClass
 */
class LaravelOwnershipFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ownership';
    }
}
