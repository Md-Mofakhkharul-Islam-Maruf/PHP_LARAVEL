<?php 
$bangla = $_POST["Bangla"];
$math = $_POST["Math"];
$physics = $_POST["Physics"];
$average =($bangla+$physics+$math)/3;
echo "Average marks is: ".$average."<br>";
if($average<33)
echo "You are fail";
else
if($average>=60 && $average<70)
{
echo "Third Class";
}
else
if($average>=70 && $average<80)
{
echo "Second Class";
}
else
if($average>=80 && $average<100)
{
echo "You got A+";
}
else
{
echo "Distinction";
}
?>