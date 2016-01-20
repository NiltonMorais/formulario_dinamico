<?php
namespace SON\Form\Elements;

class Label extends ElementAbstract
{
    private $text;

    public function render()
    {
        echo "\t<label ";
        foreach($this->attributes as $attrKey => $attrValue){
            echo "{$attrKey}='{$attrValue}' ";
        }
        echo ">".$this->text;
        echo "</label>\n";
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }
}