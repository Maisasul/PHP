<?php

// echo "code academy";

// for($i = 0; $i <= 13; $i++)
// {
//     if($i == 9)
//     {
//         echo "Maisa<br>";
//     }
//     else
//     {
//         echo $i."<br>";
//     }
// }

// for($i = 0; $i <= 18; $i++)
// {
//     if($i % 5 == 0 && $i % 3 == 0)
//     {
//         echo "fizzbuzz <br>";
//     }
//     elseif($i % 3 == 0)
//     {
//         echo "fizz <br>";
//     }
//     elseif($i % 5 == 0)
//     {
//         echo "buzz <br>";
//     }
//     else
//     {
//         echo $i."<br>";
//     }
// }

// $num = [12,23,56,34,45];
// $max = $num[0];
// $count = count($num);
// for($i = 0; $i < $count; $i++)
// {
//     if($num[$i] > $max)
//     {
//         $max = $num[$i];
//     }
// }
// echo $max;

//Two sum
// $num = [2,3,4,1];
// $target = 6;
// $count = count($num);
// for($i = 0; $i < $count; $i++)
// {
//     for($j = $i+1; $j < $count; $j++)
//     {
//         if($num[$i] + $num[$j] == $target)
//         {
//             $x[0] = $i;
//             $x[1] = $j;
//         }
//     }
// }
// print_r ($x);

// $num = [2,4,3,1];
// $target = 6;
// $count = count($num);
// for($i = 0; $i < $count-1; $i++)
// {
//     if($num[$i] + $num[$i+1] == $target)
//     {
//         echo $num[$i],$num[$i+1];
//     }
// }

// $ip = "123.12.4.5";
// // echo str_replace(".","-",$ip);
// for($i = 0; $i< strlen($ip); $i++)
// {
//     if($ip == ".")
//     {
//         echo "-";
//         echo $ip;
//     }
// }

$text = "Maisa Sul";
$x = strlen($text);

for($i = ($x-1);$i >= 0; $i--)
{
    echo $text[$i];
}