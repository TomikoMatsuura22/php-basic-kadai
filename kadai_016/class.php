<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food
    {
      // プロバディを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // priceを出力するメソッド
      public function show_price()
      {
        echo "price:" . $this->price . "円\n";
      }
    }

    // インスタンス化する
    $Food = new Food('potato', 250);

    // インスタンス$Foodの書くプロバディの値を出力する
    print_r($Food);
    ?>
  </p>
  <p>
    <?php
    // Animalクラスを定義する
    class Animal
    {
      // プロバディを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct($name, $height, $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      // heightを出力するメソッド
      public function show_height()
      {
        echo "height: " . $this->height . "cm\n";
      }
    }
    // インスタンス化する
    $Animal = new Animal('dog', 60, 5000);

    // インスタンス$Animalの各プロバディを出力する
    print_r($Animal);


    ?>
  </p>

</body>

</html>