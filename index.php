<?php require_once 'app.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign in using Facebook</title>
		<style>
			body { background: #eee; font-family: arial; }
			.container { width: 500px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; box-shadow: 2px 2px 6px #ccc;}
		</style>
	</head>
	<body>

		<div class="container">

			<?php if(!isset($_SESSION['facebook'])): ?>
				<p>You are not logged in.</p>
				<a href="<?=$fb->getLoginUrl()?>"><img src="img/LoginWithFacebook.png" style="height:25px;" /></a>
			<?php else: ?>
				<p>You are signed, <?=$user['name']?> &emsp; <a href="logout.php">Log out</a></p>
				<table cellpadding="5">
					<tr>
						<td><b>First Name</b><td>: <?=$user['first_name']?></td>
					</tr>
					<tr>
						<td><b>Last Name</b><td>: <?=$user['last_name']?></td>
					</tr>
					<tr>
						<td><b>Gender</b><td>: <?=$user['gender']?></td>
					</tr>
				</table>
			<?php endif; ?>

		</div>	

	</body>
</html>