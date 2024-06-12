<?php

$a = 9;
$b = 27;

echo "a = $a, b = $b";
echo "<br>";

if( $a % 2 == 0) {
    echo "a is even";
} else {
    echo "a is odd";
}
echo "<br>";


if($a > $b) {
    echo "a^2 = ".($a*$a);
} else {
    echo "b^2 = ".($b*$b);
}
echo "<br>";

$month = 6;
$days = cal_days_in_month(CAL_GREGORIAN,$month,2024);
echo "<p>Month = $month<p>";
echo "<p>Days in the month: $days<p>";

$year = 2024;
require_once('functions.php');
$leap = isLeapYear($year);

echo "<p>Year = $year<p>";
echo "<p>$year ".($leap ? 'is' : 'isn\'t')." leap-year</p>";

if($a % 3 == 0 && $b % 3 == 0){
    echo "Sum of $a and $b is ".($a+$b);
} 
else if ($b != 0){
    echo "Result of division of $a through $b is ".($a/$b);
}
else {
    echo "b is 0. Division by 0 is not allowed.";
}
echo "<br>";

