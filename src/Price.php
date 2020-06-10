<?php
namespace GetThingsDone\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Price extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'required',
            'numeric',
            'min:0'
        ];
    }

    public function createColumn(Blueprint $table): Blueprint
    {
        $table->unsignedBigInteger($this->alias)->default(0);
        return $table;
    }
}