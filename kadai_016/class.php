<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        //Foodクラス作成
            class Food {
                //プロパティを定義
                private $name;
                private $price;

                //メソッドを定義
                public function show_price() {
                    echo $this->price . '<br>';
                }

                //コンストラクタを定義
                public function __construct(string $name, int $price) {
                    $this->name =$name;
                    $this->price =$price;
                }

            }

            //Animalクラス作成
            class Animal {
                //プロパティ
                private $name;
                private $height;
                private $weight;

                //メソッド
                public function show_height() {
                    echo $this->height . '<br>';
                }

                //コンストラクタ
                public function __construct (string $name, int $height, int $weight) {
                    $this->name =$name;
                    $this->height =$height;
                    $this->weight =$weight;
                }
            }
            
            //Foodをインスタンス化する
            $food = new Food('potato', 250);
            //Animalをインスタンス化する
            $animal = new Animal('dog', 60, 5000);
           
            print_r($food);
            echo '<br>';
            print_r($animal);
            echo '<br>';

            //それぞれメソッドへアクセス
            $food->show_price() .
            $animal->show_height();
        ?>
    </p>
    
</body>
</html>