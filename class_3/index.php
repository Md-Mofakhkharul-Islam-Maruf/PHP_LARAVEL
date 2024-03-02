<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable scope</title>
</head>
<body>
    <?php
    $Bangladesh = 1971;   // global scope
    function age()
    {
        $Pakisthan = 1900;       //Local scope
        echo "I Love Bangladesh";
    }
    echo age()."<br>";
    echo $Bangladesh."<br>";

    $Num1 = 4;
    $Num2 = 3;
    function check_scope()
    {
        global $Num1, $Num2;
        echo "From Check function <br>";
        echo $num3 = $Num1 + $Num2;
    }
    echo check_scope()."<br>";
    define("Sitename", "My Portfolio Site <br>");
    echo Sitename;
    define ('PI',"3.1416");
    echo PI;
?>
</body>
</html>