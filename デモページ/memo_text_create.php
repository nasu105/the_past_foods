<?php

// var_dump($_POST);
// exit();

// 飛ばされたdataに名前をつける
$day = $_POST['day'];
$food_time = $_POST['food_time'];
$place = $_POST['place'];
$foods = $_POST['foods'];
$text_area = $_POST['text_area'];

// 飛んできたdataを配列にまとめる
$write_data = [$day,$food_time,$place,$foods,$text_area];
// var_dump($write_data);
// exit();

// ファイルを開く,dataにcsvで保存を行う
$file = fopen('data/foodselect.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// ファイルにデータを書き込む
fputcsv($file, $write_data);



// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// 指定したファイルへ移動する
header('Location:memo_text_index.php')



?>