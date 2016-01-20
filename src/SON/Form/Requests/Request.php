<?php
/**
 * Created by PhpStorm.
 * User: Nilton
 * Date: 19/01/2016
 * Time: 20:07
 */

namespace SON\Form\Requests;


use SON\Form\Contracts\RequestInterface;

class Request implements RequestInterface
{
    private $request;

    public function getRequest()
    {
       return $this->request;
    }
}