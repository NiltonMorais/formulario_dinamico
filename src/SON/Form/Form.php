<?php

namespace SON\Form;

use SON\Form\Contracts\ElementInterface;
use SON\Form\Contracts\FormInterface;
use SON\Form\Contracts\ValidatorInterface;

class Form implements FormInterface
{
    private $method;
    private $action;
    private $fields;
    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
       $this->validator = $validator;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function render()
    {
        echo "<form method='".$this->getMethod()."' action'".$this->getAction()."'>\n";
        foreach($this->fields as $field){
            $field->render();
        }
        echo "</form>";
    }

    public function addField(ElementInterface $field)
    {
        $this->fields[] = $field;
        return $this;
    }

    public function createField($fileName, $fieldAttributes = [])
    {
        $namespace = "SON\\Form\\Elements\\";
        $className = $namespace.ucfirst(strtolower($fileName));

        if(class_exists($className)){
            return new $className($fieldAttributes);
        }

        return false;

    }
}