<?php
namespace GetThingsDone\Attributes;

class Name extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'string',
            'max:255'
        ];
    }
}