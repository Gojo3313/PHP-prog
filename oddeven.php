<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
<form method="post" action="">
    Enter a number:
    <input type="text" name="number" required>
    <input type="submit" Value="check">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["number"];
    if(is_numeric($number)){
        if($number % 2 == 0){
            echo "<p>$number is an even numnber.</p>";
        }else{
            echo"<p>$number is an odd number.</p>";
        }
    }else {
        echo"<p>Please enter a valid numeric value.</p>";
    }
}  
?>
</body>
</html>
