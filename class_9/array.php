<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $fruits = array("mango", "apple");
    $bikes = ["kawasaki","RTR","BMW"];
    $laptop =['Dell',"ASUS","Apple"];

    // echo count($bikes);
    for($i=0;$i<count($bikes);$i++)
    {
        echo $bikes[$i]."<br>";
    }

    foreach ($bikes as $b)
    {
        echo $b."<br>";
    }
    ?>
</body>
</html>