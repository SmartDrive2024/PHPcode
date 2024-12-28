<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimum Number Cube</title>
</head>
<body>
    <center>
    <h3>Enter the two integer in php and check the minimum number and then print the cube of that minimum number.(User Input)
    </h3>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first Number"><br><br>
        <input type="number" name="num2" placeholder="Enter second Number"><br><br>
        <button type="submit">Submit</button>
    </form>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $min_num = min($num1, $num2);

        $cube = pow($min_num, 3);

        echo "The cube of the minimum number ($min_num) is: $cube";
    }
    ?>
</body>
</html>
</center>
