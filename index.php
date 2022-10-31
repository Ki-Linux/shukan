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
        class Robot {
            private $name = '';//privateは外部からのアクセスを全て遮断
            public function __construct($name) {
                $this->setName($name);
            }
            public function setName($name) {
                $this->name = (string)filter_var($name);
            }
            public function getName() {
                return $this->name;
            }
        }

        $a = new Robot('ロボ太郎');
        $b = $a;

        echo $a->getName();
        echo $b->getName();
        
        $a = new stdClass;
        $a->name = 'ロボ太郎';
        echo $a->name;
    ?>
</div>
</body>
</html>