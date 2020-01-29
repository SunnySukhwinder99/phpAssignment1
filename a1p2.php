<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(!empty($_POST['firstname'])&& !empty($_POST['lastname']) &&
	isset($_POST['newsletter']) && is_numeric($_POST['age'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$newsletter = $_POST['newsletter'];
		$age = $_POST['age'];

		echo "<p> First Name: $firstname<br> Last Name: $lastname <br> Age: $age <br> Newsletter: $newsletter </p>";


	}
	
	if(empty($_POST['firstname'])){
		echo "<h1> Please enter your firstname. </h1>";
	}

	if(empty($_POST['lastname'])){
		echo "<h1> Please enter your lastname. </h1>";
	}

	if(!isset($_POST['newsletter'])){
		echo "<h1> Please choose options for newsletter. </h1>";
	}

	if(empty($_POST['age'])){
		echo "<h1> Please enter your age. </h1>";
	}
}

?>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value=<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value=<?php if(isset($_POST['firstname'])) echo $_POST['lastname']; ?>></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value=<?php if(isset($_POST['firstname'])) echo $_POST['age']; ?>></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>