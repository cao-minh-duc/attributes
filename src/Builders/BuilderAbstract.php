<?php
namespace GetThingsDone\Attributes\Builders;

use GetThingsDone\Attributes\Contracts\HasCastAttributes;

abstract class BuilderAbstract
{
    protected HasCastAttributes $model;

    public function __construct(HasCastAttributes $model)
    {
        $this->model = $model;
    }

    public static function make(HasCastAttributes $model)
    {
        return new static($model);
    }
}