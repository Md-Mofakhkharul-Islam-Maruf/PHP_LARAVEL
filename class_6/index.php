<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
        <label for="first_number">First Number:</label>
        <input type="number" id="first_number" name="first_number"><br><br>
        <label for="second_number">Second Number:</label>
        <input type="number" id="second_number" name="second_number"><br><br>
        <label for="operation">Operation:</label>
        <select name="operation" id="operation">
        <option value="">Select Value</option>
        <option value="add">+</option>
        <option value="min">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        </select> 
        <button type="submit">Calculate</button>   
    </form>
    <?php
       if($_SERVER['REQUEST_METHOD']=="POST")
       {
        $num1=$_POST["first_number"];
        $num2=$_POST["first_number"];
        $operate =$_POST["operation"];
       
    //    if($operate == "add")
    //    {
    //     $result = $num1 + $num2;
    //     echo $result;
    //    }
 
    switch($operate)
    {
        case "add":
            $result =$num1+$num2;
            echo $result;
            break;
            case "min":
                $result =$num1-$num2;
                echo $result;
                break;
                case "mul":
                    $result =$num1*$num2;
                    echo $result;
                    break;
                    case "div":
                        $result =$num1/$num2;
                        echo $result;
                        break;
                        default: echo"nothing";
    }
}
      ?>
</body>
</html>