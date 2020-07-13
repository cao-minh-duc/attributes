<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Quantity extends AttributeAbstract
{
    public function getDefaultRules(): array
    {
        return [
            'numeric',
            'min:0'
        ];
    }
    public function createColumn(Blueprint $table)
    {
        $table->integer($this->alias)->default(0);

        return $table;
    }
}