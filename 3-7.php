<?php
$color = ['黒' ,'白'];

// echo $color[0];
// echo "\n";
// echo $color[1];
// echo "\n";
// echo $color[2];

for ($i=0; $i<count($color); $i++) {
  echo '・', $color[$i], "\n";
}