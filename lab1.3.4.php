<pre>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 21:08
 */
$get = mt_rand(0,100);
function hello()
{
echo "Hello new user";
}

function buy()
{
    echo "You buy something";
}

if ($get<50) {
    hello();
}
    else {
        buy();
    }

