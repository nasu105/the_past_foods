<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" href="./sample.css">
    <title>Document</title>
</head>
<!-- <style>
    .summary {
        font-size: 24px;
    }
</style> -->
<body>
  <main>
  
    <form action="memo_text_create.php" method="POST">
      <div class="title">
        <h1>過去飯</h1>
        <p class="subtitle">〜日々の体の摂取記録〜</p>
        <p class="subtitle_2">お前の現在は過去の俺が築く</p>
      </div>
      <div class="summary">
        <a href="memo_text_read.php" class="summary_a">過去飯一覧</a>
      </div>
      <div class="format_box">
      <div class="format">
        <input type="date" id="day" name="day">
        <select name="food_time" id="food_time">
        <option value="-">ー</option>
        <option value="朝食">朝食</option>
        <option value="昼食">昼食</option>
        <option value="夕食">夕食</option>
        </select>
        <select name="place" id="place">
        <option value="-">ー</option>
        <option value="内食">内食</option>
        <option value="外食">外食</option>
        <option value="弁当">弁当</option>
        </select>
        <select name="foods" id="foods" >
        <option value="-">ー</option>
        <option value="肉">肉</option>
        <option value="魚">魚</option>
        <option value="パン">パン</option>
        <option value="麺類">麺類</option>
        <option value="ファーストフード">ファーストフード</option>
        <option value="その他">その他</option>
        </select>
        <textarea id="text_area" placeholder="例)お店のURLなど。" rows="4" cols="100" name="text_area"></textarea>
      </div>
      <div class="button">
        <button id="save">保存</button>
        <button id="clear">削除</button>
      </div>
      </div>

    </form>
  </main>
    
</body>
</html>