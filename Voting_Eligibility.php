<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voating eligibility</title>
</head>
<body>
    <center>
    <h3>Enter the age in php and Check Voting Eligibility.	(User Input)
    </h3>
    <form action="" method="get">
        <input type="text"name="n1" placeholder="Enter a Age" ><br><br>
        
        <button>submit</button>
    </form>
    
</body>
</html>
<?php
$a=$_GET['n1'];


if($a >=18 ){
    echo"$a You are eligible to vote";
}else{
    echo"$a You are not  eligible to vote";
}
?>
</center>
