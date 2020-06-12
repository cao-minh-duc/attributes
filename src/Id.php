<?php
namespace GetThingsDone\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Id extends AttributeAbstract
{
    public function createColumn(Blueprint $table)
    {
        $table->unsignedBigInteger($this->alias);

        return $table;
    }
}