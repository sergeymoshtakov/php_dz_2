<?php

$x = 100;
$y = 100;
$color = "green";

echo "<p>X = $x, Y = $y, Color = $color</p>";

if ($x >= 0 && $y >= 0) {
    echo "<div style='position: absolute; left: {$x}px; top: {$y}px; width: 100px; height: 100px; background-color: {$color};'></div>";
} else if($x >= 0){
    echo "<div style='position: absolute; left: {$x}px; top: 0px; width: 100px; height: 100px; background-color: {$color};'></div>";
} else if($y >= 0){
    echo "<div style='position: absolute; left: 0px; top: {$y}px; width: 100px; height: 100px; background-color: {$color};'></div>";
} else {
    echo "<div style='position: absolute; left: 0px; top: 0px; width: 100px; height: 100px; background-color: {$color};'></div>";
}