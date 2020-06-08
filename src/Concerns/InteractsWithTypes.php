<?php
namespace GetThingsDone\Attributes\Concerns;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

trait InteractsWithTypes
{
    // protected $attributeNames = [];
    
    public function getAttributeNamesDefault(): array
    {
        $attributeNames = [];
        foreach($this->getCasts() as $attribute => $type )
        {
            if( class_exists($type) 
                && (new $type instanceof CastsAttributes)
            ){
                $attributeNames[$attribute] = (new $type)->getDefaultName() ;
                continue;
            }
        }

        return $attributeNames;
    }

    public function getAttributeNames(): array
    {
        return array_merge(
            $this->getAttributeNamesDefault(),
            $this->attributeNames ?? []
        );
    }
}