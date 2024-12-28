<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squares of Even Numbers in Range</title>
</head>
<body>
    <center>
    <h3>Squares of Even Numbers in a Range</h3>
    <form action="" method="get">
        <input type="number" name="start" placeholder="Start of Range" ><br><br>
        <input type="number" name="end" placeholder="End of Range" ><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
   
        $start = $_GET['start'];
        $end = $_GET['end'];

        if ($start <= $end) {
            echo "<h4>Squares of Even Numbers from $start to $end:</h4>";
            for ($i = $start; $i <= $end; $i++) {
                if ($i % 2 == 0) {
                    $square = $i * $i;
                    echo "Square of $i is $square<br>";
                }
            }
           }
        
    ?>
    </center>
</body>
</html>
