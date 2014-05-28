<html>
<head>
	<title>Add a new workers data</title>
</head>
<body>
	<h1> Workers form </h1>
	<form method="post" action="add1.php">
		<p>
		<label> First name:
			<input type=text name="name">
		</label>
		<br>
		<label> Father's name:
			<input type=text name="fathersname">
		</label>
		<br>
		<label> Last name:
			<input type=text name="surname">
		</label>
		<br>
		<label> Age:
			<input type=text name="age">
		</label>
		<br>
		<label> Sex
			<select name="sex">
				<option value="m">Male</option>
				<option value="f">Female</option>
			</select>
		</label>
		<br>
		<label> Position:
			<input type=text name="position">
		</label>
		<br>
		<label>Experience:
			<input type=text name="experience">
		</label>
		<input type=submit value="Add">
	</p>
	</form>
</html>
