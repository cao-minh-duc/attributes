<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

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

    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string($this->alias);
        return $table;
    }
}