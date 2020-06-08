<?php
namespace GetThingsDone\Attributes\Contracts;

interface HasTypes
{
    public function getCasts();
    
    public function getAttributeNamesDefault();

    public function getAttributeNames();
}