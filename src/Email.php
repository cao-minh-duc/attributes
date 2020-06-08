<?php
namespace GetThingsDone\Attributes;

class Email extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'email:rfc,dns'
        ];
    }
}