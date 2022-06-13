<?php

class Fruit {
    public $name;
    public $color;
    public $taste;

    public function __construct(string $name, string $color, string $taste) {
        $this -> name = $name;
        $this -> color = $color;
        $this -> taste = $taste;
    }
}


// array associativo
$fruits = [
    'apple' => new Fruit('cherry', 'red', 'sweet'),
    'banana' => new Fruit ('banana', 'yellow', 'sweet'),
    'mango' => new Fruit ('lemon', 'yellow', 'sweet'),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <main>
        <?php foreach ($fruits as $item) { ?>
            <h1><?php echo $item->name?></h1>
            <p><?php echo $item->color?></p>
            <p><?php echo $item->taste?></p>
        <?php } ?>
    </main>
</body>
</html>