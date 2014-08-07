<?php

namespace spec\BigName\Immutables;

use BigName\Immutables\InvalidType;
use BigName\Immutables\Stubs\ArbitrarilyTypedImmutableArray;
use BigName\Immutables\Stubs\ArbitrarilyTypedObject;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TypedImmutableArraySpec extends ObjectBehavior
{
    function let(ArbitrarilyTypedObject $typedObject)
    {
        $this->beAnInstanceOf(ArbitrarilyTypedImmutableArray::class);
        $this->beConstructedWith([$typedObject, $typedObject, $typedObject]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ArbitrarilyTypedImmutableArray::class);
    }

    function it_throws_an_exception_when_attempting_to_contain_an_invalid_type()
    {
        $this->shouldThrow(new InvalidType)->during('__construct', [['foo']]);
    }
}
