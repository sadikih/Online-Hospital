<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 	<form class="box" action="" method="post">
       <h1 class="log">LOGIN</h1>
<?php echo $msg; ?>
        <input type="text" name="Username_ict" placeholder="E-mail or Phone">
       
        <input type="password" name="password" placeholder="Password">
        
		<input type="submit" name="Signin" value="Login">
		
		<input name="rememberme" type="hidden" id="checkbox_id" />
		
		<a  href="signup.php" style="font-size: 17px;  color: aqua;">Dont have an account ? click here</a>
		</form>

		

		

    
    <?php include "footer.html" ?> 
</body>
</html>
