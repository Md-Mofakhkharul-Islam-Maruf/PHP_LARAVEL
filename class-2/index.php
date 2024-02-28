<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create obj</title>
</head>
<body>
<?php
class person{
    public $first_person;
    public $second_person;

}
$obj = new person;
$obj->first_person="Maruf";
$obj->second_person= "Hasan";
echo "First person name is: ". $obj->first_person."</br>";
echo "Second person name is: ". $obj->second_person;
?>
</body>
</html>