<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First and Last Digit</title>
</head>
<body>
    <center>
        <h3>Enter the number in php and print first and last digit.
        </h3>
    <form action="" method="post">
        <input type="number" name="num" placeholder="Enter a number"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = (int)$_POST['num'];

       
        $last_digit = $num % 10;

        
        $first_digit = $num;
        while ($first_digit >= 10) {
            $first_digit = (int)($first_digit / 10);
        }

        echo "First digit: $first_digit<br>";
        echo "Last digit: $last_digit";
    }
    ?>
    </center>
</body>
</html>
