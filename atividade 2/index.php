<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4</title>
</head>
<body>

<!-- Atividade 1 -->
Atividade 1
    <?php 
    
        for($i = -10; $i < 11; $i++){
            echo"$i ";
        }

        echo"<br> <br>"

    ?>
    


<!-- Atividade 2 -->
Atividade 2
    <?php 

        $soma = 0;

        for($i = 0; $i < 500 ; $i++){
        if($i % 3 == 0){
            $soma += $i;
        }

        
    }

        echo "$soma <br> <br>";

    ?>

<!-- Atividade 3 -->
Atividade 3
    <?php 

        for($i = 100; $i >= 0 ; $i+=-10){
        echo "$i <br>";
    }
        echo "Acabou! <br>";

    ?>

<!-- Atividade 4 -->
Atividade 4
    <?php 

        for($i = 99; $i >= 0 ; $i+=-2){
        if($i % 5 == 0){
            echo " [$i] <br>";
        }else{
            echo "$i <br>";
        }

    }

    ?>

<!-- Atividade 5 -->
Atividade 5
    <?php 

        for($i = 150; $i >= 0 ; $i+=-5){
        echo "$i <br>";
    }

    ?>

    <!-- Atividade 6 -->
Atividade 6
    <?php 
        $i = 150;
        while($i >= 0){
        echo "$i <br>";
        $i+=-5;
        }

    ?>
    
</body>
</html>