<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 21:42
 */

function hello($x,...$a)
{

    var_dump($a);
    return func_num_args();
}

$num = hello(3, 21, 12, 'something', true);
var_dump($num);