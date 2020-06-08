<?php

namespace GetThingsDone\Attributes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Attributes\Skeleton\SkeletonClass
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
