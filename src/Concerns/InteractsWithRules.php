<?php
namespace GetThingsDone\Attributes\Concerns;

use GetThingsDone\Attributes\Attributes;

trait InteractsWithRules
{
    protected array $rules = [];

    public function getDefaultRules(): array
    {
        $rules = [];
        foreach($this->getCasts() as $attribute => $type)
        {
            if( Attributes::doesntExist($type))
            {
                continue;
            }

            $rules[$attribute] = (new $type)->getDefaultRules();
        }

        return $rules;
    }

    public function getRules(): array
    {
        return array_merge(
            $this->getDefaultRules(),
            $this->rules
        );
    }
}