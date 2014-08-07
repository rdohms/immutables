<?php namespace BigName\Immutables;

abstract class TypedImmutableArray extends ImmutableArray
{
    protected $items = [];

    public function __construct(array $items)
    {
        foreach ($items as $item)
            $this->typeGuard($item);

        $this->items = $items;
    }

    abstract protected function typeGuard($item);
}
