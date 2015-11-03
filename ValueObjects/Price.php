<?php

class Price
{
    private $price;

    // ...

    public function increaseBy($increase)
    {
        $this->price += $increase;
    }
}

$price = new Price();
$price2 = $price;
$price->increaseBy(2);