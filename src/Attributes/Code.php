<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Code extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string( $this->alias, 10 );
        return $table;
    }
}