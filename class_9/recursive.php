<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function recursive($n)
    {
        if($n==0)
        {
            return ;
        }
        echo $n."\n";
        recursive($n-1);
    }
    recursive(5);
    ?>
</body>
</html>