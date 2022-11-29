<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="TopPage">
    <h1>マイ主観ランキング</h1>
    <p>設定は簡単！あなたの好きなものをランキング付けしちゃおう！！</p>
    <div class="ToLoginPage">
        <button>新規登録はコチラ</br>(1分でできます!)</button>
        <button>すでに登録済みの方</button>
    </div>
    <?php

        //継承

        //車の基本クラス
        class BaseClass
        {
            public function printItem() {
                echo "新車です";
            }
            
        }

        //新車クラス
        class NewCar extends BaseClass
        {
            public function printItem() {
                echo "sinです";
            }
        }

        $NewCar = new NewCar();
        $NewCar->printItem();




        class User
        {
            
            public const MAX_SCORE = 100;//値を変更したくないときはconstつける
            public static $count = 0;

            public $id;
            public $age;
            public $name;

            public function __construct($age, $name) {
                $this->age = $age;
                $this->name = $name;
                self::countUp();
            }

            public static function countUp()//クラス中でアクセスする時
            {
                self::$count++;
            }
            //self 全体統一
            public function selfIntroduction()
            {
                echo "My name is $this->name. I am $this->age years old.";
                echo self::$count;//くラス中でアクセスする時 selfをつける
            }

        }

        $user = new User(20, 'hou');

        echo $user->name;
        echo $user->selfIntroduction();
        
        echo User::countUp();
        echo User::MAX_SCORE;
    ?>
</div>
</body>
</html>