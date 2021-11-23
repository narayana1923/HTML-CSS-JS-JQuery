<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <?php
        #Indexed Arrays
        $arr = array(1,2,3,4,5);
        echo "Array elements are: ";
        for($i=0;$i<count($arr);$i++){
            echo "$arr[$i] ";
        }
        echo "<br>";
        //Associative arrays
        $arr = array("Name" => "Narayana","Age" => 21,"GPA"=>8.7);
        foreach($arr as $key => $val){
            echo "$key - $val<br>";
        }
        echo "<br>";
        #Multi-dimenstional Arrays
        $arr = array(
            array(
                "Narayana",
                "Sumanth",
                "Chaithanya"
            ),
            array(
                "Velayudam",
                "Palagudi",
                "Sake"
            )
        );
        echo "Values of 2d array are<br>";
        for($i=0;$i<count($arr);$i++){
            foreach($arr[$i] as $val){
                echo "$val ";
            }
            echo "<br>";
        }
    ?>

</body>

</html>