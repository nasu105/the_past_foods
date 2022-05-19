<?php

// データをまとめる用の文字列、空配列を用意する
// $str = '';
$array = array(); 
// ファイルを開く
$file = fopen('data/foodselect.csv', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgetcsv()で1行づつ取得→$lineに変換
if ($file) {
	while ($line = fgetcsv($file)) {
		array_push($array, $line);
		// echo"<tr>";
		/* $str .= "<tr>";
		// テーブルセルに配列の値を格納
		for($i = 0; $i < count($line); $i++){
			// echo"<td>".$line[$i]." </td>";
			$str .= "<td>".$line[$i]." </td>";
			array_push($array, $str);
			// $str .= "<tr><td>{$line[$i]}</td></tr>";
		}
		$str .= "</tr>"; */
	}
	// echo"</tr>";
}

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

$js_array = json_encode($array); //javascriptに渡すためにjson_encodeを行う
// var_dump($js_array);
// exit();
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
			<a href="memo_text_delite.php">削除</a>
			<table>
				<tbody>
					<?= $array ?>
				</tbody>
			</table>
	</fieldset>
	<div>
		<!-- 円グラフ作成のためのcanvasを用意 -->
		<canvas id="mycanvas" height="450" width="850"></canvas>
	</div>

	<script>
		/* 外部スクリプトへ配列を渡す方法：参考url"" */
		// jsonをparseしてJavascriptの変数に代入
		var array = JSON.parse('<?php echo $js_array; ?>'); 
		// console.log(array);
	</script>
	<!-- 外部のjavascriptを読み込むだお -->
	<script src="main.js"></script>
</body>
</html>