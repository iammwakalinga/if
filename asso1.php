
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="asso1.php" method="post">

 Password:<input  type="text" name="student">
<br>


<input type="submit">
<br>

</form>
<?php
 $grades=array("Juma"=>"B+","Asha"=>"B-","Tuma"=>"c");
 echo $grades[$_POST["student"]];
 ?>

 



</body>
</html> 


 
