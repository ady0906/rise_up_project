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
            $("#createButton").click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "http://localhost:8080/users",
                    type: 'POST',
                    contentType: "application/x-www-form-urlencoded",
                    crossDomain: true,
                    data: {
                        'firstname': $("input[name=firstname]").val(),
                        'lastname': $("input[name=lastname").val(),
                        'email': $("input[name=email").val(),
                        'country': $("input[name=country").val()
                    },
                    success:function(response) {
                        window.location.replace('/rise_up_project/front/');
                    },
                    error: function() {
                        alert("Failed to create user!");
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div id="container">
    	<h1>New User <button id='createButton'>Create User</button></h1>

    	<div id="body">
    		<p>
                First name: <input type="text" name="firstname">
            </p>
            <p>
                Last name: <input type="text" name="lastname">
            </p>
            <p>
                Email: <input type="text" name="email">
            </p>
            <p>
                Country: <input type="text" name="country">
            </p>
            
    	</div>
    </div>

</body>
</html>