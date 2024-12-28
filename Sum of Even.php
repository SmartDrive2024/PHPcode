<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Sum of Even Numbers</title>
</head>
<body>
    <center>
    <h3>Print Sum of Even Numbers </h3>
    <form action="" method="get">
        <input type="number" name="n1" placeholder="Enter a Number"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
   
        $n = (int)$_GET['n1'];
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 == 0) {
                $sum += $i;
            }
        }
        echo "<br><br>The sum of even numbers between 1 and $n is: $sum";
    ?>
    </center>
</body>
</html>
