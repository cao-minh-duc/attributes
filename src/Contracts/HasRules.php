<?php
namespace GetThingsDone\Attributes\Contracts;

interface HasRules
{

    public function getDefaultRules();

    public function getRules();
}