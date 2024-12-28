<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Enter the three number in php and check among three which is greater.(User Input)
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter first Number" ><br><br>
        <input type="text"name="n2" placeholder="Enter second Number" ><br><br>
        <input type="text"name="n3" placeholder="Enter Third Number" ><br><br>
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];
$b=$_GET['n2'];
$c=$_GET['n3'];

if($a>$b && $a > $c){
    echo"$a <=  is the greatest Number";
}else if($b>$c && $b>$a){
    echo"$b <=  is the greatest Number";
}else{
    echo"$c <= is the greatest Number";
}
?>
</center>
