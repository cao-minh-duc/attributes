<?php
namespace GetThingsDone\Attributes\Contracts;

use Illuminate\Database\Eloquent\Model;

interface HasCastAttributes
{
    public function getCasts();
    
    public function getAttributeNamesDefault();

    public function getAttributeNames();

    public function getTable();

    public function getAttributeInstances();
}