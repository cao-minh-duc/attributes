<?php
namespace GetThingsDone\Attributes\Adapters;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use GetThingsDone\Attributes\Contracts\HasCastAttributes;

class CacheAdapter
{
    protected ?string $key;

    protected int $lifetime = 120;

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function generateKey(): self
    {
        $key = Str::uuid();
        return $this->setKey($key);
    }

    /**
     * Get the value of model
     */ 
    public function getData()
    {
        return Cache::get(
            $this->getKey()
        );
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setData($data): self
    {   
        if(! $this->getKey() )
        {
            $this->generateKey();
        }

        Cache::put(
            $this->getKey(),
            $data,
            now()->addMinutes( $this->getLifetime() )
        );

        return $this;
    }

    /**
     * Get the value of lifetime
     */ 
    public function getLifetime(): int
    {
        return $this->lifetime;
    }

    /**
     * Set the value of lifetime (minutes)
     *
     * @return  self
     */ 
    public function setLifetime(int $lifetime): self
    {
        $this->lifetime = $lifetime;

        return $this;
    }
}