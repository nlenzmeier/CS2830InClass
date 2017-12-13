<!DOCTYPE html>
<?php
	/* References: 
			1) http://php.net/manual/en/function.setcookie.php
			2) http://www.w3schools.com/php/php_cookies.asp
	*/
	
/* Note: A cookie is created with the setcookie() function.

			Syntax
				setcookie(name, value, expire, path, domain, secure, httponly);

			Only the name parameter is required. All other parameters are optional.
*/

		$cookie_name = "flavor";
		$cookie_value = "Oatmeal cream pie";
		
		setcookie($cookie_name, $cookie_value);
		
		setcookie("nick", "loves cookies");
		
		//60 s/min * 60 min/hr
		setcookie($cookie_name, $cookie_value, time() + 3600);
	
		$cookie_value = "White macadamia nut";
	
		setcookie($cookie_name, $cookie_value, time() + 5);
		
		
?>

<!-- NOTE: the setcookie() function must (should) appear BEFORE the <html> tag --> 



<html>
	<head>
		<title> setting cookies </title>
	</head>
	<body>
	<?php
		if( ! isset($_COOKIE[$cookie_name])){
			echo "Cookie name" . $cookie_name . "is not set!";
		}
		else {
			echo "Cookie" . $cookie_name . "is set! <br>";
			echo "Value is: " . $_COOKIE[$cookie_name];
		}
	?>
	</body>
</html>