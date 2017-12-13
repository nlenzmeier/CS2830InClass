<!DOCTYPE html>
<!-- This document was created by Mr. Wergeles on November 3, 2016 -->
<html>
<head>
	<title>Tilla's Fan Page</title>
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="main.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    
    <style>
    	background-color: gray;
    
    </style>
</head>
<body>
	
	<h1 class="header">Welcome to Tilla's Fan Page!</h1>
	<p style="text-align:center"><img src="../images/TillaPorn.png" alt="Tilla"></p>
	
	<!-- <img src="../images/Zoom.jpg" alt="Tilla1"> -->
    <div id="loginWidget" class="ui-widget">
    	
        <h1 class="ui-widget-header">Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            
            <div class="stack">
            	<button type="submit" class="btn btn-default btn-lg">
  					 Loggin <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> 
				</button>
                <!-- <input type="submit" value="Submit"> -->
            </div>
        </form>
    </div>
</body>
</html>