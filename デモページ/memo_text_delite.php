<?php

$file = 'data/foodselect.csv';

// ファイルを削除する
if (unlink($file)){
  echo $file.'の削除に成功しました。';
} else {
  echo $file.'の削除に失敗しました。';
}

header('Location:memo_text_read.php')
?>