<?php
/**
 * Created by PhpStorm.
 * User: deyzerman
 * Date: 09.11.18
 * Time: 16:11
 */

namespace Test;

class MyClass
{

    private $arr = ['foo' => 'bar'];

    public function power($x, $y)
    {
        return pow($x, $y);
    }

    public function getArr()
    {
        return $this->arr;
    }
}