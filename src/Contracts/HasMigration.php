<?php
namespace GetThingsDone\Attributes\Contracts;

interface HasMigration
{
    public function createTable();

    public function dropTable();
}