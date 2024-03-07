<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 9</title>
</head>
<body>
    <?php 
    function calculation( int $x, int $y)
    {
         $z = $x / $y;
         return (float)$z;

    }
    echo calculation(7,8);
    function calculation2( int $x, int $y):void
    {
         $z = $x / $y;
        (float)$z;
    }
     calculation(7,8);
    
 ?>
</body>
</html>