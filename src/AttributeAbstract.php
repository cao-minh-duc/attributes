<?php
namespace GetThingsDone\Attributes;

use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

abstract class AttributeAbstract implements CastsAttributes
{
    protected ?string $alias;
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

    abstract function createColumn(Blueprint $table);

    public function getDefaultName()
    {
        return trans( 'attributes::name' )[ $this->getAlias() ] ?? class_basename( static::class );
    }

    public function getDefaultRules(): array
    {
        return [];
    }

    /**
     * Get the value of alias
     */ 
    public function getAlias(): string
    {
        return $this->alias ?? $this->getDefaultAlias();
    }

    /**
     * Set the value of alias
     *
     * @return  self
     */ 
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    public function getDefaultAlias()
    {
        return Str::snake( class_basename( static::class ) );
    }
}