<?php

// データをまとめる用の文字列、空配列を用意する
$str = '';
$array = array();
// ファイルを開く
$file = fopen('data/foodselect.csv', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行づつ取得→$lineに変換
if ($file) {
	while ($line = fgetcsv($file)) {
		// echo"<tr>";
		$str .= "<tr>";
		// テーブルセルに配列の値を格納
		for($i = 0; $i < count($line); $i++){
			// echo"<td>".$line[$i]." </td>";
			$str .= "<td>".$line[$i]." </td>";
			array_push($array, $str);
			// $str .= "<tr><td>{$line[$i]}</td></tr>";
		}
		$str .= "</tr>";
	}
	// echo"</tr>";
}

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

?>

<!-- htmlを書いていくだお -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>過去飯一覧</title>
</head>
<body>
	<fieldset>
			<legend>過去の飯たち</legend>
			<a href="memo_text_index.php">入力画面</a>
			<table>
				<tbody>
					<?= $str ?>
				</tbody>
			</table>
	</fieldset>
	<div>
		<!-- 円グラフ作成のためのcanvasを用意 -->
		<canvas id="mycanvas" height="450" width="800"></canvas>
	</div>

	<!-- javascriptを読み込むだお -->
	<script src="main.js"></script>
</body>
</html>