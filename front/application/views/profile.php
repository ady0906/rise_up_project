<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Welcome to the Rise Up Test App</title>
    <link rel="stylesheet" type="text/css" href="/rise_up_project/front/assets/styles.css" />
    <script src="/rise_up_project/front/assets/jquery.js"></script>
    <script>
        $(function(){
            $("#deleteButton").click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "http://localhost:8080/users/<?php echo $user->id ?>",
                    type: 'DELETE',
                    contentType: "text/plain",
                    crossDomain: true,
                    success:function(response) {
                        window.location.replace('/rise_up_project/front/');
                    },
                    error: function() {
                        alert("Failed to delete this user!");
                    }
                });
            });
        });
    </script>
</head>
<body>

<div id="container">
	<h1>
        <?php echo ($user->firstname . ' ' . $user->lastname) ?> 
        <button id='deleteButton'>Delete User</button>
        <a href="/rise_up_project/front/index.php/edit/<?php echo $user->id ?>">
            <button id='createButton'>Edit User</button>
        </a>
    </h1>

	<div id="body">
		<p><strong>Email address:</strong> <?php echo $user->email ?></p>
        <p><strong>Country:</strong> <?php echo $user->country ?></p>
	</div>

</div>

</body>
</html>