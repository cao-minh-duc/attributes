<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Code extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        $table->string( $this->alias, 20 );
        return $table;
    }

    public function getDefaultRules(): array
    {
        return [
            'required',
            'string',
            'alpha_num',
            'max:20'
        ];
    }
      
}