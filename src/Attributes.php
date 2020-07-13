<?php

namespace GetThingsDone\Attributes;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Attributes
{
    public static function exists(string $attribute): bool
    {
        return class_exists($attribute) 
            && ( new $attribute instanceof CastsAttributes );
    }

    public static function doesntExist(string $attribute): bool
    {
        return !self::exists($attribute);
    }
}
