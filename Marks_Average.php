<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3> Find the Three subject average  marks and Print : 
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter first subject" ><br><br>
        <input type="text"name="n2" placeholder="Enter second subject" ><br><br>
        <input type="text"name="n3" placeholder="Enter Third subject" ><br><br>
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];
$b=$_GET['n2'];
$c=$_GET['n3'];
$average= ($a+$b+$c)/3;

if($average <40){
    echo"$average ::poor";
}else if($average >=40 && $average<80){
    echo"$average  ::fair";
}else if($average>=80 && $average<90){
    echo"$average ::good";
}else{
    echo"$average ::Excellent";
}
?>
</center>
