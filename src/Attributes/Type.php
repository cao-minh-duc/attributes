<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Type extends AttributeAbstract
{
    public function createColumn(Blueprint $table)
    {
        $table->string($this->alias);
        return $table;
    }
}