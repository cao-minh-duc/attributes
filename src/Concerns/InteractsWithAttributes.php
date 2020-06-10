<?php
namespace GetThingsDone\Attributes\Concerns;

use Illuminate\Support\Collection;
use GetThingsDone\Attributes\Attributes;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

trait InteractsWithAttributes
{
    // protected $attributeNames = [];
    
    public function getAttributeNamesDefault(array $attributeNames = []): array
    {
        return array_merge(
            $this->getAttributeInstances()->map(function ($attribute){
                return $attribute->getDefaultName();
            })->toArray(),
            $attributeNames
        );
    }

    public function getAttributeNames(): array
    {
        return array_merge(
            $this->getAttributeNamesDefault(),
            $this->attributeNames ?? []
        );
    }

    public function getAttributeInstances(): Collection
    {
        $casts = collect($this->getCasts());

        $instances = $casts->filter(function($cast){
            return Attributes::exists($cast);
        })->map(function($cast, $attribute){
            return (new $cast)->setAlias($attribute);
        });

        return $instances;
    }
}