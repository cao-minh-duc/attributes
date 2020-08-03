<?php
namespace GetThingsDone\Attributes\Attributes;

use Illuminate\Database\Schema\Blueprint;

class Image extends AttributeAbstract
{
    public function createColumn(Blueprint $table): Blueprint
    {
        return $table;
    }
}