<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Enter the number in php and Whether number is divisible by 5 or not.(User Input)
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter a Number" ><br><br>
        
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];


if($a %5==0 ){
    echo"$a is a 5 divisible Number";
}else{
    echo"$a is not a 5 divisible Number";
}
?>
</center>