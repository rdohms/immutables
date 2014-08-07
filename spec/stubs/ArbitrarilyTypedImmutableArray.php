<?php namespace BigName\Immutables\Stubs;

use BigName\Immutables\InvalidType;
use BigName\Immutables\TypedImmutableArray;

final class ArbitrarilyTypedImmutableArray extends TypedImmutableArray
{
    protected function typeGuard($item)
    {
        if ( ! $item instanceof ArbitrarilyTypedObject)
            throw new InvalidType;
    }
}
