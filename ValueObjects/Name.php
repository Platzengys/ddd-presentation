<?php

class Name
{
    private $name;

    public function __construct($name)
    {
        $this->guardName($name);
        $this->name = $name;
    }

    private function guardName($name)
    {
        if (!trim($name)) {
            throw new \InvalidArgumentException('Name cannot be whitespace or empty!');
        }
    }
}
