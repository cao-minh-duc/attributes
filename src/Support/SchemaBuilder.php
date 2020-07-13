<?php
namespace GetThingsDone\Attributes\Support;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use GetThingsDone\Attributes\Contracts\HasCastAttributes;
use GetThingsDone\Attributes\Attributes\AttributeAbstract;

class SchemaBuilder 
{
    protected HasCastAttributes $model;

    public function __construct(HasCastAttributes $model)
    {
        $this->model = $model;
    }

    public static function make(HasCastAttributes $model)
    {
        return new self($model);
    }

    public function createTable(): void
    {
        Schema::create(
            $this->model->getTable(),
            function (Blueprint $table)
            {
                $table->id();

                $table = $this->createTableColumns($table);

                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    protected function createTableColumns(Blueprint $table): Blueprint
    {
        $this->model->getAttributeInstances()->map(function(AttributeAbstract $attribute) use (& $table){
            $table = $attribute->createColumn($table);
        });
        return $table;
    }

    public function dropTable(): void
    {
        Schema::dropIfExists(
            $this->model->getTable()
        );
    }

}