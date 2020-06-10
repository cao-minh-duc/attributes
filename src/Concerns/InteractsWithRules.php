<?php
namespace GetThingsDone\Attributes\Concerns;

use GetThingsDone\Attributes\Attributes;

trait InteractsWithRules
{
    protected array $rules = [];

    public function getDefaultRules(array $rules = []): array
    {
        return array_merge(
            $this->getAttributeInstances()->map(function ($attribute){
                return $attribute->getDefaultRules();
            })->toArray(),
            $rules
        );
    }

    public function getRules(): array
    {
        return array_merge(
            $this->getDefaultRules(),
            $this->rules
        );
    }
}