<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & CSS</title>
</head>
<body>
<fieldset>
    <form action="" method="get">

        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name">
        <hr>

        <label for="select">Select Your Course</label>
        <select name="select" id="" required>
            <option value="">select</option>
            <option value="PHP & Laravel">PHP & Laravel</option>
            <option value="c, c++">c, c++</option>
            <option value="Python/Jango">Python/Jango</option>
        </select>
            <hr>
            <label for=""> Select your Blood Group: </label> 
                <input type="radio" name="BloodGroup" id=""><label>A+</label>
                <input type="radio" name="BloodGroup" id=""><label>A-</label>
                <input type="radio" name="BloodGroup" id=""><label>B+</label>
                <input type="radio" name="BloodGroup" id=""><label>B-</label>
            </select>
            <hr>

     <!-- <input type="submit" value="Submit"> -->
        <button type="submit">Register</button>
    </form>
    </fieldset>
    <hr>
    <fieldset>
        <legend>Calculator</legend>
    <form action="" method="get">
        <label for="first_number">First Number:</label> 
        <input type="text" name="first_number" id=""><hr>
        <label for="second_number">First Number:</label> 
        <input type="text" name="second_number" id=""><hr>

        <label for="operation">Operation</label>
        <select name="operation" id="operation">
        <option value="">Operation</option>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
        </select>
<hr>
        <input type="submit" value="submit">

    </form>
    </fieldset>
    
</body>
</html>