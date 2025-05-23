<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // 連想配列を作成
    $originalArray = ['name' => '玉ねぎ', 'price' => 200, 'region' => '北海道'];

   
    // 新しい連想配列を作成
    $translatedArray = [
      '名前' => $originalArray['name'], 
      '値段' => $originalArray['price'], 
      '産地' => $originalArray['region']
    ];
    

    // 配列$product_dataのキーと値を1つずつ順番に出力する
    foreach ($translatedArray as $key => $value) {
      echo "{$key} : {$value}<br>";
    }
    ?>
</P>
</body>
</html>