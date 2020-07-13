<?php
namespace GetThingsDone\Attributes\Builders;

use GetThingsDone\Attributes\Contracts\HasCastAttributes;

class RulesBuilder extends BuilderAbstract
{
    protected array $rules = [];

    public function getDefaultRules(array $rules = []): array
    {
        return array_merge(
            $this->model->getAttributeInstances()
                ->map(function ($attribute){
                    return $attribute->getDefaultRules();
                })->filter()->toArray(),
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

    public function setRules(array $rules = []): self
    {
        $this->rules = $rules;
        return $this;
    }
}