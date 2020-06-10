<?php
namespace GetThingsDone\Attributes\Concerns;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

trait InteractsWithMigration
{
    public function createTable(): void
    {
        Schema::create(
            $this->getTable(),
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
        $this->getAttributeInstances()->map(function($attribute) use (& $table){
            $table = $attribute->createColumn($table);
        });
        return $table;
    }

    public function dropTable(): void
    {
        Schema::dropIfExists(
            $this->getTable()
        );
    }
}