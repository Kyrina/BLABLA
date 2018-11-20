<?php
require_once('functions.php');
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Zavdanya1"."<br>";
zavdanya1(11,22,5,3,55,9);
echo "<br>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Zavdanya2"."<br>";
$array1= array(240,222,555,5464,756,854,945);
$array2= array(945,556,1544,452,755,645,1054);
zavdanya2($array1,$array2);
echo "<br>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Zavdanya3"."<br>";
$array = [11, -32, 445, -7, 845, 90, -98, 665, 5641, -1545,666];
zavdanya3($array);
echo "<br>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Zavdanya4"."<br>";
for ($i=0;$i<8;$i++)
for ($j=0;$j<4;$j++)
    $a[$i][$j]=rand(-50,50);
print_r($a);
echo "<br>";
zavdanya4($a);
?>