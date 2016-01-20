<?php
/**
 * Created by PhpStorm.
 * User: Nilton
 * Date: 19/01/2016
 * Time: 20:05
 */

namespace SON\Form\Contracts;


interface ValidatorInterface
{
    public function __construct(RequestInterface $request);
    public function getValidator();
}