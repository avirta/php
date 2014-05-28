<?php
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$fathersname = $_REQUEST['fathersname'];
$age = $_REQUEST['age'];
$sex = $_REQUEST['sex'];
$position = $_REQUEST['position'];
$experience = $_REQUEST['experience'];
$id = $_REQUEST['id'];
echo "<p>name=$name</p>";
echo "<p>surname=$surname</p>";
echo "<p>fathersname=$fathersname</p>";
echo "<p>age=$age</p>";
echo "<p>sex=$sex</p>";
echo "<p>position=$position</p>";
echo "<p>experience=$experience</p>";

mysql_connect("localhost","-u root"," ");
mysql_query("use workers");
$query = "update workers set name='$name' where id=$id";
echo "q=$query";
mysql_query($query);
$query = "update workers set surname='$surname' where id=$id";
mysql_query($query);

mysql_query("use workers");
echo "q=$query";
$query = "update workers set fathersname='$fathersname' where id=$id";
mysql_query($query);

mysql_query("use workers");
$query = "update students set age='$age' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use workers");
$query = "update workers set sex='$sex' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use workers");
$query = "update workers set position='$position' where id=$id";
echo "q=$query";
mysql_query($query);

mysql_query("use workers");
$query = "update workers set experience='$experience' where id=$id";
echo "q=$query";
mysql_query($query);
?>
