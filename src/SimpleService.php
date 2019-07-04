<?php


namespace Brazhinskyserhei\Simple;


class SimpleService
{
    protected $property = 'TestProperty';
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getPropertyValue()
    {
        return $this->property. ' '.$this->value;
    }
}