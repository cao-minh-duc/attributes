<?php
namespace GetThingsDone\Attributes;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

abstract class AttributeAbstract implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }

    public function getAlias()
    {
        return strtolower( class_basename( static::class ) );
    }

    public function getDefaultName()
    {
        return trans( 'types:name' )[ $this->getAlias() ] ?? class_basename( static::class );
    }

    public function getDefaultRules(): array
    {
        return [];
    }
}