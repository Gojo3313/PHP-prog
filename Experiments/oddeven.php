<!DOCTYPE html>
<html>
<head>
    <center><h1><title>Odd or Even Checker</title></h1>
</head>
<body>
<p><h1><cenetr> ANUSHANTH - 211211101018 <br><br> Odd & Even Number Checker </center></h1></p>
<form method="post" action="">
    <center><h1>Enter a number:</h1>
    <input type="text" name="number" required>
    <input type="submit" Value="check">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["number"];
    if(is_numeric($number)){
        if($number % 2 == 0){
            echo "<p><center><h3> $number is an even numnber.</h3></p></center>";
        }else{
            echo"<p><center><h3>$number is an odd number.</h3></p></center>";
        }
    }
	     else{
             echo"<p><center><h3>Please enter a valid numeric value.</h3></p></center>";
        }
}  
?>
</body>
</html>
