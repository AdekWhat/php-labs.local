<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 20:25
 */
$day = date('N');
//$day = $_GET['date'];
Switch($day){
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье";
        break;
    default:
        echo "Unknown date";

}