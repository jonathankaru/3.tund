<?php

	//if(empty($_POST["password"])){
	//$password_error = "Ei saa olla tyhi";
		
	//else{
		
	//user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	
	$email_error = "";
	$password_error =""; 
	
	//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
	}
	//Kontrollime kasutaja e-posti, et see ei ole tühi.
	if(empty($_POST["email"])){
		$email_error = "Ei saa olla tyhi";

	}
	//kontrollime parooli
	//parool ei ole tühi, kontrollime pikkust.
	if(strlen($_POST["password"]) < 8){
		$password_error = "Peab olema vähemalt 8 symbolit pikk";
		
	}
			
?>
<?php require_once("../header.php"); ?>

<html>
	<head>
	<title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="userform.php" method="post">
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?> <br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error ?> <br><br>
		
		<input type="submit" value="Logi sisse"> 
		</form>
		
		<h2>Loo kasutaja</h2>
		
<?php require_once("../footer.php"); ?>		
	
	</body>
</html>