<?php

class PriceImmutable
{
    private $price;

    // ...

    public function increaseBy($increase)
    {
        return new static($this->price + $increase);
    }
}
