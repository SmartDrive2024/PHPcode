<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Cubes</title>
</head>
<body>
    <center>
    <h3>Sum of Cubes of the First n Numbers</h3>
    <form action="" method="get">
        <input type="number" name="n" placeholder="Enter a number" ><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
        $n = $_GET['n'];
        $sum = 0;

        for ($i = 1; $i <= $n; $i++) {
            $sum += pow($i, 3);
        }

        echo "<br><br>The sum of the cubes of the first $n numbers is: $sum";
    
    ?>
    </center>
</body>
</html>
