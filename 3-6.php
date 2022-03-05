<?php

// count
$color = ['黒','白', '赤'i ];
// echo count($color);

// array_unshift($color, '緑', '黄');

// $mycolor = array_shift($color);
// echo $mycolor;

// $mycolor = array_shift($color);
// echo $mycolor;

$color_string = implode(',', $color);
$color_string = ',緑,黄'; //黒,白,赤,緑,黄
$newarray = explode(',', $color_string);


print($color_string);
print_r($newarray);
// echo $color[2];

