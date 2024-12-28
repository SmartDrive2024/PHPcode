<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Enter the number in php and Check Whether it is positive, negative, or zero.(User Input)
Eg:-input 4 it is positive number (User Input)

    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter a Number" ><br><br>
        
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];


if($a>0){
    echo"$a is a positive Number";
}else if($a<0){
    echo"$a is a negative Number";
}else{
    echo"$a is a zero Number";
}
?>
</center>
