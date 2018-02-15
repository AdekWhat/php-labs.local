<pre>
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.02.2018
 * Time: 20:25
 */
function common($time)
{
    switch (true) {
        case ($time == 0):
        case ($time < 5):
            echo "Why you are online, you must sleep!\n";
            break;
        case ($time < 9):
            echo "Wake up and go to work\n";
            break;
        case ($time < 18):
            $rand = mt_rand(0, 5);
            if ($rand < 3) {
                echo "Work harder\n";
            } else {
                echo "Pretend that you are working\n";
            }
            break;
        case($time <= 23):
            echo "Now you can relax\n";
    }
}

//$hour = (int)date('G');
//$day = date('N');
$day = $_GET['date'];
$hour = $_GET['hour'];
Switch ($day) {
    case 1:
        echo "Понедельник\n";
        common($hour);
        break;
    case 2:
        echo "Вторник\n";
        common($hour);
        break;
    case 3:
        echo "Среда\n";
        common($hour);
        break;
    case 4:
        echo "Четверг\n";
        common($hour);
        break;
    case 5:
        echo "Пятница\n";
        common($hour);
        break;
    case 6:
        echo "Суббота\n";
        if ($hour < 5) {
            echo "Stop doing what you are doing and go to bed\n";
        } elseif ($hour < 17) {
            echo "Do some homethings\n";
        } elseif ($hour <= 23) {
            $rand = mt_rand(0, 5);
            if ($rand < 3) {
                echo "Party hard\n";
            } else {
                echo "Stay home and watch something on Youtube\n";
            }
        }
        break;
    case 7:
        echo "Воскресенье\n";
        if ($hour < 5) {
            echo "WTF you are doing, go to bed?\n
            Remember about church\n";
        } elseif ($hour < 10) {
            echo "Prey for your sins\n";
        } elseif ($hour <= 23) {
            echo "You're free for the rest of the day\n";
        }
        break;
    default:
        echo "Unknown date\n";

}