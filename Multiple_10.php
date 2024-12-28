<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiple by 10</title>
</head>
<body>
    <center>
    <h3>Enter the number in php and Check if Number is Multiple of 10 or not.(User Input)
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter a Number" ><br><br>
        
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];
if($a %10==0 ){
    echo"$a is a multiple by 10";
}else{
    echo"$a is not a multiple by 10";
}
?>
</center>
