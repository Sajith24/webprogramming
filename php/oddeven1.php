<html>
<body>
<form method="GET">
enter a number:
<input type="number" name="number">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
if($_GET) {
$number=$_GET['number'];
if(($number%2)==0){
echo"$number is even";}
else{
echo"$number is odd";}}
?>