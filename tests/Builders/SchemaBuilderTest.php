<?php
namespace GetThingsDone\Attributes\Tests\Builders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use GetThingsDone\Attributes\Tests\TestCase;
use GetThingsDone\Attributes\Builders\SchemaBuilder;
use GetThingsDone\Attributes\Tests\Stubs\TestModel;

class SchemaBuilderTest extends TestCase
{
    protected $expectColumns = [
        [
            'name' => 'address',
            'type' => 'text',
            'notnull' => true,
        ]
    ];
    /** @test */
    public function it_should_create_table_columns()
    {
        $testModel = new TestModel();
        
        SchemaBuilder::make($testModel)->createTable();

        $columns = Schema::getConnection()
                    ->getDoctrineSchemaManager()
                    ->listTableColumns('test_models');

        foreach($this->expectColumns as $column)
        {
            $this->assertEquals(
                Schema::getColumnType('test_models',$column['name']), 
                $column['type']
            );

            $doctrineColumn = DB::connection()->getDoctrineColumn('test_models', $column['name']);
            $this->assertEquals(
                $doctrineColumn->getNotNull(),
                $column['notnull'] ?? true
            );
        }
        

    }
}