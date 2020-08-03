<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Text extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string($this->alias)->nullable();
        return $table;
    }
}