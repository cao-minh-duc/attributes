<?php
namespace GetThingsDone\Attributes\Tests\Builders;

use GetThingsDone\Attributes\Builders\RulesBuilder;
use GetThingsDone\Attributes\Tests\Stubs\TestModel;
use GetThingsDone\Attributes\Tests\TestCase;

class RulesBuilderTest extends TestCase
{
    protected array $expectRules = [
        'email' => [
            'email:rfc,dns'
        ],
        'code' => [
            'required',
            'string',
            'alpha_num',
            'max:20'
        ],
        'name' => [
            'required',
            'string',
            'max:255'
        ]
    ];

    /** @test */
    public function it_should_return_default_rules()
    {
        $rules = RulesBuilder::make(new TestModel())->getDefaultRules();

        $this->assertEquals(
            $this->expectRules,
            $rules
        );
    }
}