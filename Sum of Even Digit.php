<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even Digits</title>
</head>
<body>
    <center>
    <h3>Sum of Even Digits</h3>
    <form action="" method="get">
        <input type="number" name="n" placeholder="Enter a number"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
        $n = $_GET['n'];
        $sum = 0;

        while ($n > 0) {
            $digit = $n % 10;  
            if ($digit % 2 == 0) {
                $sum += $digit;
            }
            $n = (int)($n / 10);  
        }

        echo "<h4>The sum of even digits: $sum</h4>";
   
    ?>
    </center>
</body>
</html>
