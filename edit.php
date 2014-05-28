<html>
<head>
	<title>Add a new workers data</title>
</head>
<body>
	<h1> Workers form </h1>
	<form method="post" action="edit1.php">
		<?php
		mysql_connect("localhost","-u root"," ");
		mysql_query("use workers");
		$id=$_REQUEST['id'];
		$f = mysql_query("select * from workers where id=$id;");
		$r = mysql_fetch_array($f);
		?>
		<p>
		<label> First name:
			<input type=text name="name" value='<?php echo $r['name']?>'>
		</label>
		<br>
		<label> Father's name:
			<input type=text name="fathersname" value='<?php echo $r['fathersname']?>'>
		</label>
		<br>
		<label> Last name:
			<input type=text name="surname" value='<?php echo $r['surname']?>'>
		</label>
		<br>
		<label> Age:n
			<input type=text name="age" value='<?php echo $r['age']?>'>
		</label>
		
		<br>
		<label> Sex
			<select name="sex">
				<option <?php if ($r['sex']=='m') echo " selected "; ?> value="m">Male</option>
				<option <?php if ($r['sex']=='f') echo " selected "; ?> value="f">Female</option>
			</select>
		</label>

		<br>
		<label> Position:
			<input type=text name="position" value='<?php echo $r['position']?>'>
		</label>
		<br>
		<label> Experience years:
			<input type=text name="experience" value='<?php echo $r['experience']?>'>
		</label>

		<input type=hidden name="id" value='<?php echo $r['id'] ?>'>
		<input type=submit value="save">
	</p>
	</form>
</html>
