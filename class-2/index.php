<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
    $Integer = "28";
    $Float = "3.1416";
    $Boolean = "$";
    $Name_1 = "Maruf";
    $Name_2 = "Hasan";
    $Boolean = TRUE;
    $Array = array('Maruf','Hasan');

echo "First name is: ".$Name_1."<br> Last name is: ".$Name_2."<br>";
var_dump($Float);
var_dump($Boolean);
var_dump($Array);
echo $Array[1]."<br>";

class actor{
    public $Actname;
    public $Actmovie;
}
$Object_name = new actor();
$Object_name->Actname = "Sahruk Khan";
$Object_name->Actmovie = "Pathan";
echo "Actor name is: ".$Object_name->Actname."<br>Movie name is: ".$Object_name->Actmovie."<br>";
printf("Name: %s, Age: %d", $Name_1, $Integer);
?>
</body>
</html>
