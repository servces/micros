<?php 
	
	
	session_start();
	define('PASSWORD', '#admin123#');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){


		if( isset($_POST['login']) && $_POST['login'] == 'true'){

			if($_POST['passwd'] == PASSWORD){
				$_SESSION['user'] = 'login';
			}
			

		}



		//var_dump($_POST);

		if(isset($_POST['dashboard']) && $_POST['dashboard'] == 'true'){		

			if(isset($_POST['sha_email']) && !empty($_POST['sha_email']) ){

				$_email = $_POST['sha_email'];

				$_encoded = base64_encode($_email);
				$_link = "index.php?acc=".$_encoded;
			}

			if (isset($_POST['type'])) {
				$_link .= "&wp=" . $_POST['type'];
			}

		}


	}


	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['session']) && $_GET['session'] == 'exit'){
			unset($_SESSION["user"]);
			header("Location: index-make-link.php");
		}
	}

?>


<?php if( !isset($_SESSION['user']) ): ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>::Login::</title>
	<style type="text/css">

	</style>
</head>
<body >
	<form style="text-align: center;padding: 20px;" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="hidden" name="login" value="true">
		<input type="password" name="passwd">
		<input type="submit" name="botom-submit" value="login">
	</form>
</body>
</html>
<?php else: ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Make Link</title>
</head>
<body>

	<form style="text-align: center;padding: 20px;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<div><input type="text" name="sha_email"></div>

		<div>
			<input type="radio" name="type" checked value="MBI_SIMPLE">Simple
			<input type="radio" name="type" value="MBI_CODE">Code
		</div>
		<input type="hidden" name="dashboard" value="true">
		<input type="submit" name="make" value="Generar Link">
	</form>
	<div style="font-size:13px; padding: 15px;">
		<div>
			
		</div>
		<div style="text-align: center;padding: 20px;">
			<?php 
				if(!empty($_encoded) && filter_var($_POST['sha_email'], FILTER_VALIDATE_EMAIL)){
					echo "Link: " . $_link;
				}
			?>	
		

		</div>
	</div>	
</body>
</html>
<?php endif; ?>