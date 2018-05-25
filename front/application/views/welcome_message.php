<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to the Rise Up Test App</title>
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/rise_up_project/front/assets/styles.css" />
</head>
<body>

<div id="container">
	<h1>Users <a href="http://localhost:8888/rise_up_project/front/index.php/new"><button>New User</button></a></h1>

	<div id="body">
		<?php foreach ($users as $user) { ?>
			<div class="card">
				<h1>
					<a href="http://localhost:8888/rise_up_project/front/index.php/profile/<?php echo $user->id?>">
						<?php echo ($user->firstname . ' ' . $user->lastname) ?>
					</a>
				</h1>
				<p class="title"><?php echo $user->email ?></p>
				<p><?php echo $user->country ?></p>
				<br />
			</div>
		<?php } ?>
	</div>

</div>

</body>
</html>