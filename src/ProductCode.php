<?php
namespace GetThingsDone\Attributes;

use Illuminate\Database\Schema\Blueprint;

class ProductCode extends Code
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string( $this->alias, 10 );
        return $table;
    }
}