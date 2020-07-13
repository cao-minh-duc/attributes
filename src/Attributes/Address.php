<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Address extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->text($this->alias);
        return $table;
    }
}