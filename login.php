<?php
session_start();
?>

<html lang="en">
	<head>
		<meta charset="utf8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>Login</title>

		<style type="text/css">
		 .border {
        border-width: 2px;
        border-style: solid;
        border-color : black
       	width: 200px;
    }
		</style>
	</head>

	<body>  

		<?php
		$username = $password = $usrErr=$pwdErr="";

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$username = test_input($_POST["username"]);
			$password = test_input($_POST["password"]);
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if($username == "adminque" )
				{
					$_SESSION['loginerrorusr'] = 0;

				} 
				else
				{
					$_SESSION['loginerrorusr'] = 1;
				}

				if($password == "bosque")
				{
					$_SESSION['loginerrorpwd'] = 0;

				} 
				else
				{
					$_SESSION['loginerrorpwd'] = 1;
				}
			}

		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>
		<div class="border">
			<h2>LOGIN</h2>
				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if ($_SESSION['loginerrorusr'] == 1)
					{
						$usrErr = "Username salah";
					}
					else if ($_SESSION['loginerrorusr'] == 0 && $_SESSION['loginerrorpwd'] == 1)
					{
						$pwdErr = "Password salah";
					}
					else if ($_SESSION['loginerrorpwd'] == 0 && $_SESSION['loginerrorpwd'] == 0)
					{
						header("Location: login-page.php");
					}
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					Username: <input type="text" name="username"> <span class="error">* <?php echo $usrErr;?></span><br><br>
					Password: <input type="password" name="password"> <span class="error">* <?php echo $pwdErr;?></span><br><br>
					<input type="submit""name="submit" value="Submit">  
			</form>
		</div>

	</body>
</html>