<?php

namespace Caominhduc3108\Attributes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Caominhduc3108\Attributes\Skeleton\SkeletonClass
 */
class AttributesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'attributes';
    }
}
