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
	<h1><?php echo ($user->firstname . ' ' . $user->lastname) ?></h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

</div>

</body>
</html>