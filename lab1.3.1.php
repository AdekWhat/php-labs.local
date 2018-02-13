<pre>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 19:22
 */

$day = date('N');

if ($day<6){
    echo "Working harder";

}
elseif ($day<7){
    echo "Remember tomorrow you must go to church";
}
else{
    echo "Prey for your yesterday sin";
}



