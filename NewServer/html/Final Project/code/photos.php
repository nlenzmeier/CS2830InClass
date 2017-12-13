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


	$currentPage = 'Photos';

	$menu = new MenuComponent($menuItems, $currentPage);
	return $menu->generate();
}

function buildContent() {
	$content = new Template();
	$content->myVariable = 'Mr. Wergeles';
	return $content->build('intro.tmpl');
}
?>

<!DOCTYPE html>
<!-- This document was created by Mr. Wergeles on November 3, 2016 -->
<html>
<head>
	<title>Photos</title>
	<link href="stylepage1.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    
    <link href="menu_style.css" rel="stylesheet" type="text/css">
    
    <!-- THIS ENDS WHERE THE MENU IS! -->
    
    <meta charset="UTF-8">
	
	<meta name="keywords" content="animal,slideshow">
	<meta name="description" content="Animal Slideshow">
	<meta name="author" content="Dale Musser">
	
     <!-- This is going to be on the midterm -->
	<script src="../jslibs/jquery-1.11.2.min.js"></script>
	
	<script src="app.js"></script>
    
    <script src="../jslibs/jquery-ui.js"></script>
	
    <link href="app.css" rel="stylesheet" type="text/css" media="all">
    
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
		body {
  		/* 	font: 14px/1.4 arial; */
  			background-color: darkseagreen;
		}
		h1{
			color: white;
			font-size: 3em;
			text-align: left;
		}
		
	</style>
	
</head>
<!-- 
<body>
	
	<h1>Photos</h1>
	<div>
		<img src="../images/1.jpg"  alt="prez" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/2.jpg"  alt="chill" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/3.JPG"  alt="3" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
	</div>
	<div>
		<img src="../images/4.JPG"  alt="3" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/5.JPG"  alt="3" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/8.JPG"  alt="3" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
    </div>
    <p>Ready to logout so soon?</p>
	<p><a href='logout.php'>Logout</a></p>
</body>
 -->
 
 <body>
    <h1>Photos</h1>
    
    <!-- wrapper div --> 
    <div id="stage">
        <div id="photoMenu">
            <ul id="menuItems"></ul>
        </div>
        
        <h1 id="photoTitle">Tilla</h1>
        
        <div id="photoDisplay">
            <img id="imageHolder" src="../images/2.jpg">
        </div>
    </div>
</body>
 
 
</html>