<?php
/**
 * Created by PhpStorm.
 * User: Nilton
 * Date: 19/01/2016
 * Time: 20:06
 */

namespace SON\Form\Validators;


use SON\Form\Contracts\RequestInterface;
use SON\Form\Contracts\ValidatorInterface;

class Validator implements ValidatorInterface
{
    private $validator;
    private $request;

    public function __construct(RequestInterface $request)
    {
       $this->request = $request;
    }

    public function getValidator()
    {
        return $this->validator;
    }
}