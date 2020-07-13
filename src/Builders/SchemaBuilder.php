<?php
namespace GetThingsDone\Attributes\Builders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use GetThingsDone\Attributes\Builders\BuilderAbstract;
use GetThingsDone\Attributes\Contracts\HasCastAttributes;
use GetThingsDone\Attributes\Attributes\AttributeAbstract;

class SchemaBuilder extends BuilderAbstract
{

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