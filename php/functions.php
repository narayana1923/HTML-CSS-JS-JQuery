<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function getNameAge($name,$age=21){
            return "Student name is $name and age is $age<br>";
        }
        echo getNameAge("Narayana");
        echo getNameAge("Sumanth",22);
    ?>
</body>
</html>