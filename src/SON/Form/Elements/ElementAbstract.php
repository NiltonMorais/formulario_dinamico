<?php
/**
 * Created by PhpStorm.
 * User: Nilton
 * Date: 19/01/2016
 * Time: 21:01
 */

namespace SON\Form\Elements;


use SON\Form\Contracts\ElementInterface;

class ElementAbstract implements ElementInterface
{
    protected $attributes;

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }


    public function render()
    {
    }

}