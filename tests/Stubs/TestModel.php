<?php
namespace GetThingsDone\Attributes\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use GetThingsDone\Attributes\Attributes\Email;
use GetThingsDone\Attributes\Attributes\Address;
use GetThingsDone\Attributes\Contracts\HasCastAttributes;
use GetThingsDone\Attributes\Concerns\InteractsWithCastAttributes;

class TestModel extends Model implements HasCastAttributes
{
    use InteractsWithCastAttributes;

    /**
     * The attributes that should be cast.
     * 
     * @var array
     */
    protected $casts = [
        'address' => Address::class,
        'email'   => Email::class,
    ];
}