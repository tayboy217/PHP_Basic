<?php
echo '数字を入力してください>';
$number = trim(fgets(STDIN));

// 10よりも大きいかを判断する
if ($number > 10) {
  echo '10よりも大きいです';
} else {
  echo '10よりも小さいです';
}
r