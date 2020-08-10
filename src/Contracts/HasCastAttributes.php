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

    public function toArray();

    /**
     * Fill the model with an array of attributes.
     *
     * @param  array  $attributes
     * @return $this
     *
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function fill(array $attributes);
}