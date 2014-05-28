<?php
$id = $_REQUEST['id'];

mysql_connect("localhost","-u root"," ");
mysql_query("use workers");
$query = "delete from workers where id=$id";
echo "q=$query";
mysql_query($query);

?>
