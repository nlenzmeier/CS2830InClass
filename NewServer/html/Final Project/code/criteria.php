<?php
set_include_path('templates');
require_once("Template.php");
require_once("MenuComponent.php");

// Set Page Title
$title = 'Criteria';
// CSS
$css = array();
// HTML
$html = array();


// Build Menu
$menuResult = buildMenu();
$css[] = $menuResult['cssFile'];
$html[] = $menuResult['html'];

// Build Content
$html[] = buildContent();


// Build Page
$page = new Template();

$page->title = $title;
$page->css = $css;
$page->html = $html;

print $page->build('page.tmpl');



function buildMenu() {
	$menuItems = array();
	$menuItems[] = array('label' => 'Home', 'link' => 'page1.php');
	//$menuItems[] = array('label' => 'Users', 'link' => 'users.php');
	//$menuItems[] = array('label' => 'myLink', 'link' => 'page1.php');
	$menuItems[] = array('label' => 'Bio', 'link' => 'bio.php');
	$menuItems[] = array('label' => 'Apparel', 'link' => 'appearal.php');
	$menuItems[] = array('label' => 'Photos', 'link' => 'photos.php');
	$menuItems[] = array('label' => 'Final Project Criteria', 'link' => 'criteria.php');

	$currentPage = 'Final Project Criteria';

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	$content = new Template();
	//$content->myVariable = 'Mr. Wergeles';
	return $content->build('intro.tmpl');
}

// THIS ENDS THE NEW CODE!!!!

	// if(!(session_start())){
// 		header("Location: error.php:");
// 		exit;
// 	}
// 	
// 	//$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
// 	
// 	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
// 		
// 	if (!($loggedIn)) {
// 		header("Location: login.php");
// 		exit;
// 	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Criteria</title>
    <!-- <link href="main.css" rel="stylesheet" type="text/css"> -->
    <link href="stylepage1.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    
    <link href="menu_style.css" rel="stylesheet" type="text/css">
    
    <script>
		$(function() {
			$.get("appData.php", function(data) {
				$("#wrapper h1").html(data.appTitle);

				// Method 2: using forEach (preferred method) 
				data.posts.forEach(function(post){
					var $li = $("<li>");
					
					$li
						.html(post.title)
						.click(function(){
							$.get("appData.php", {"content": post.id}, function(data){
								$("#display").empty();
								postContent(data);
							});
						});
					$("#wrapper ul").append($li);
				});
				postContent(data.posts[0]);
			});

			function postContent(data) {
				var $h2 = $("<h2>");
				var $div = $("<div>");
				var $p = $("<p>");

				$h2.html(data.title);
				$div.addClass("imgPlaceholder " + data.color);
				$p.html(data.content);
				$("#display")
					.append($h2)
					.append($div)
					.append($p);
			}
		});
	</script>
    <style>
    	body{
    		background-color: darkseagreen;
    	}
    	h1{
			color: white;
			font-size: 3em;
			text-align: left;
		}
		.div{
			background-color: darkslategray;
			border: 2px solid white;
			color: white;
			text-align: center;
		}
		pre{
			padding: 0;
			text-align: left;
		}
    </style>
</head>
<body>
	
	<h1>How Did I Meet The Criteria?</h1>
	
	<div class="div">
	<p>How did I meet the criteria of this project? Well, I will go through, step by step, 
	on how I have achieved each requirement that you have given me, and show you that I have done 
	all that is needed to succeed in this class. Enjoy!</p>
	<hr>
	<pre>			1.  All of my main pages (login_form.php, page1.php, bio.php, 
				        appearal.php, photos.php) have the 5 required tags, using HTML5 
				        and CSS.
			2.  All of my pages are consistent in layout and design. All of my pages are 
			    in the colors white, darkseagreen, and darkslategray. 
			    I stayed within one (my cat, Tilla), and made a fan page around her.
			3.  I like to think I made my webpage well structured and very user friendly. 
			    I made a menubar to easily navigate through each tab that my webpage 
			    offers.
			4.  I have a login page as soon as they go to the website. If they are unable 
			    to put in the correct username (test) and password (pass) then they are 
			    unable to access the rest of the website. 
			5.  See No. 4
			6.  All of my main pages (login_form.php, page1.php, bio.php, appearal.php, 
			    photos.php) have php involved at the top of their code. This was mainly 
			    used for the menubar.
			7.  I use the POST method when it comes to my login_form page. (login.php is 
			    where it is being called.
			8.  I used form elements on my photos.php page. This allowed the user to 
			    select which photo they wished to view. 
			9.  If username and/or password was incorrect, I have an error message that 
			    pops up, alerting the user to retype in their information.
			10. My photos page (photos.php) displays my photos, along with my app.js.
			11. My home page (page1.php) displays two videos that were from my personal 
			    computer.
			12. All of my main pages (login_form.php, page1.php, bio.php, appearal.php, 
			    photos.php) use JavaScript.
			13. All of my main pages (login_form.php, page1.php, bio.php, appearal.php, 
			    photos.php) use JQuery (links at top of every head.
			14. See No. 13
			15. AJAX is used in my login.php if username and/or password is incorrect.
			16 - 17 are in reference to this document.
	</pre>
	 </div>
	 
	 <p>Ready to logout so soon?</p>
	<p><a href='logout.php'>Logout</a></p>
</body>
</html>