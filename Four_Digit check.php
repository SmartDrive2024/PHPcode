<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>2.Enter the number in php and check whether it is a four digit number or not.(User Input)
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter a Number" ><br><br>
        
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];


if($a>1000 && $a < 9999){
    echo"$a is a four digit Number";
}else{
    echo"$a is not a four digit Number";
}
?>
</center>
