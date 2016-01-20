<?php

namespace SON\Form\Contracts;

interface FormInterface
{
    public function __construct(ValidatorInterface $validator);
    public function setMethod($method);
    public function setAction($action);
    public function getMethod();
    public function getAction();
    public function render();
    public function addField(ElementInterface $field);
    public function createField($fileName, $fieldAttributes = []);

}