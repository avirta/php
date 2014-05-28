<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$age = $_REQUEST['age'];
$sex = $_REQUEST['sex'];
$position = $_REQUEST['position'];
$experience = $_REQUEST['experience'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>age=$age</p>";
echo "<p>sex=$sex</p>";
echo "<p>position=$position</p>";
echo "<p>experience=$experience</p>";

mysql_connect("localhost","-u root"," ");
mysql_query("use workers");
$query = "insert into workers (name,surname,fathersname,age,sex,position,experience) 
	values ('$name', '$surname','$fathersname','$age','$sex','$position','$experience');";
echo $query;
mysql_query($query);
?>
