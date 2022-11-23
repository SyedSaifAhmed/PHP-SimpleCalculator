<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Calculator</title>
</head>
<body>
<?php
echo "hello world";
?>

<form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">

    <select name="op" >
        <option >None</option>
        <option >Add</option>
        <option >Subtract</option>
        <option >Multiply</option>
        <option >Divide</option>
    </select>

    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>

</form>

<p>The answer is: </p>
<?php
if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET["op"];

    switch ($operator) {
        case 'None':
            # code...
            echo "Select something";
            break;
        case "Add":
            # code...
            echo $result1+$result2;
            break;
        case "Subtract":
            # code...
            echo $result1-$result2;
            break;
        case "Multiply":
            # code...
            echo $result1*$result2;
            break;
        case 'Divide':
            # code...
            echo $result1/$result2;
            break;
        // default:
        //     # code...
        //     break;
    }

}
?>



</body>
</html>