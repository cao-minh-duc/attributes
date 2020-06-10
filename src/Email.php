<?php
namespace GetThingsDone\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Email extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'email:rfc,dns'
        ];
    }

    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string($this->alias);
        return $table;
    }
}