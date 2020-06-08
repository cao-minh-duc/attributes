<?php
namespace GetThingsDone\Attributes\Contracts;

interface HasAttributes
{
    public function getCasts();
    
    public function getAttributeNamesDefault();

    public function getAttributeNames();
}