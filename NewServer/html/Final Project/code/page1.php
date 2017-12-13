<?php
set_include_path('templates');
require_once("Template.php");
require_once("MenuComponent.php");

// Set Page Title
$title = 'Home';
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


	$currentPage = 'Home';

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
	<title>Page 1</title>
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
		.vid{
			color:white;
			text-align: center;
		}
    </style>
</head>
<body>
	<div id="wrapper" class="group">
		<h1></h1>
		<ul id="menu"></ul>
		<div id="display"></div>
	</div>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">Tilla's Website!</h1>
        <div class="div">
        	<p>Welcome to Tilla's fan page, where you can keep up-to-date with all of her whereabouts! 
        	Check in frequently to see all of the crazy adventurous she goes on. Hope to see you again soon!</p>
        </div>
        <br>
        <div class="vid">
        <video width="200" controls>
  			<source src="../images/vid1.mp4" type="video/mp4">
  			<!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
		</video>
		<video width="200" controls>
  			<source src="../images/vid2.mp4" type="video/mp4">
  			<!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
		</video>
        </div>
        <div class="ui-widget-content">
            
           <!--  <p><a href='page2.php'>Go to page 2.</a></p> -->
           	<p class="vid">Ready to logout so soon?</p>
           	
           <!-- 
	<button type="submit" class="btn btn-default btn-lg">
  					 Logout <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 
				</button>
 -->
        	<p class="vid"><a href='logout.php'>Logout</a></p>

        </div>
    </div>
</body>
</html>