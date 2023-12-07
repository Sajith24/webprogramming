<html>
<body>
<form method="post" action=" ">
enter a number:
<input type="type" name="number">
<input type="submit" name="calculate">
</form>
<?php
 if($_POST){
   $fact=1;
   $number=$_POST['number'];
   echo "factorial of $number is: <br><br>";
   for($i=1; $i<=$number;$i++) {
   $fact=$fact*$i;
  }
   echo $fact."<br>";
   }
?>
</body>
</html>