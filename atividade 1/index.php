<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
</head>
<body>
    <h1>LP3 Aula 3</h1>

    <?php


    //1° Forma
    for($x = 0; $x < 10; $x++) {
        if($x % 2 != 0 ) {
            echo "$x <br>";
        }
    }

    //2° Forma
    for($y = 0; $y < 10; $y+=2){
        echo "$y <br>";
    }

    //3° Forma
    
    $z = 0;

    while($z < 10){
        if($z % 2 != 0 ) {
            echo "$z <br>";
        }
        $z++;
    }

    ?>

    <h4>Questão 1</h4>

    <?php

    for($i = 100; $i >= 0 ; $i+=-5){
        echo "$i <br>";
    }
        echo "Acabou!";

    ?>  

    <h4>Questão 2</h4>

    <?php

    $total = 0;
    $media = 0;
    $loops = 0;

    for($i = 14; $i < 73; $i++){

        $total += $i;
        $loops++;

    }
        $media = $total / $loops;

        echo "$media";

    ?>

    <h4>Questão 3</h4>

    <?php

    for($i = 30; $i >= 0 ; $i+=-1){
        if($i % 4 == 0){
            echo "$i é divisivel por 4 <br>";
        }else{
            echo "$i <br>";;
        }
    }
    ?>
    

</body>
</html>