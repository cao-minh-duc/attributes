<?php
namespace GetThingsDone\Attributes;

class Phone extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'string',
            'alpha_num',
            'max:20'
        ];
    }
}