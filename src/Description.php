<?php
namespace GetThingsDone\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Description extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->text($this->alias)->nullable();
        return $table;
    }
}