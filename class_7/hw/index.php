<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($n = 100; $n>=1; $n--)
    {
        echo $n."<br>";
    }

    echo "The even numbers are :";
    for ($n =100; $n>=1; $n --)
    {
        if($n % 2 == 0)
        {
         echo $n."\n";
        }
    }
    ?>

</body>
</html>