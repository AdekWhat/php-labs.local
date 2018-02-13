<pre>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 19:50
 */

$get = $_GET['b'];

$str = "I have $get ball";
echo ($get<2)?$str:$str."s";
