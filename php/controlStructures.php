<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php
        echo "Printing 1 to 10 using for loop: ";
        for($i=1;$i<=10;$i++){
            echo "$i ";
        }
        echo "<br>Printing 1 to 10 using while loop: ";
        $i=1;
        while($i<=10){
            echo "$i ";
            $i++;
        }
        echo "<br>";
        $a = 2;
        $b=5;
        if($a>$b){
            echo "$a is greater than $b";
        }
        elseif($a == $b){
            echo "$a is equal to $b";
        }
        else{
            echo "$a is lesser than $b";
        }
        echo "<br>";
        switch($a){
            case 5:
                echo "$a in words is five";
                break;
            case 2: 
                echo "$a in words is two";
                break;
            default:
                echo "cannot convert $a to word";
        }
    ?>
</body>
</html>