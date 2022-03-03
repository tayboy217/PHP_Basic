<!-- 和暦変換プログラムを作ろう -->

<?php
echo '西暦を入力してください >';
$year = trim(fgets(STDIN));

if (is_numeric($year) && $year <= date('Y')) { // trueを省略
    // echo '数字が入力されました';
    if ($year >= 2018) {
      echo '令和です';
    } elseif ($year >= 1988) {
      echo '平成です';
    } elseif ($year >= 1925) {
      echo '昭和です';
    } elseif ($year >= 1911) {
      echo '大正';
    } elseif ($year >= 1867) {
      echo '明治';
    } else {
      echo '明治よりも前です';
    }
} else {
  echo '今年よりも前の数字を入力してください';
}
