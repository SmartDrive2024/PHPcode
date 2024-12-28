<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Natural Numbers</title>
</head>

<center>
<body>
    <h3>Sum of Natural Numbers squere</h3>
    <form action="" method="get">
        <input type="number" name="n" placeholder="Enter a number"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
        $n = $_GET['n'];
        $sum = 0;
       

        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        $squere = pow($sum, 2);

        echo "The sum of the first $n natural numbers is: $squere ";
        ?>
</body>
</center>
</html>
