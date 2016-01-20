<?php
namespace SON\Form\Elements;

class Textarea extends ElementAbstract
{
    private $text;

    public function render()
    {
        echo "\t<textarea ";
        foreach($this->attributes as $attrKey => $attrValue){
            echo "{$attrKey}='{$attrValue}' ";
        }
        echo ">".$this->text;
        echo "</textarea>\n";
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