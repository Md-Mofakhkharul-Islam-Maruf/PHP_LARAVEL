<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback function</title>
</head>
<body>
    <?php
    function sub ($x, $y)
    {
        $z = $x - $y;
        echo "The Subtruction of $x and $y is: $z";
    }    
    function div ($x, $y)
    {
        $z = $x / $y;
        echo "The Division of $x and $y is: $z";
    }    
    function temp($a,$b, $c)
    {
        $c($a,$b);

    }
    temp (18,6,"sub");
    ?>
</body>
</html>