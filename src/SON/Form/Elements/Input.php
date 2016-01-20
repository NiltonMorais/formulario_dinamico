<?php
namespace SON\Form\Elements;

use SON\Form\Contracts\ElementInterface;

class Input extends ElementAbstract
{

    public function render()
    {
        echo "\t<input ";
        foreach($this->attributes as $attrKey => $attrValue){
            echo "{$attrKey}='{$attrValue}' ";
        }
        echo ">\n";
    }
}