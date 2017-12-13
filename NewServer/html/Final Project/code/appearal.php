<?php
set_include_path('templates');
require_once("Template.php");
require_once("MenuComponent.php");

// Set Page Title
$title = 'Apparel';
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


	$currentPage = 'Apparel';

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
	<title>Apparel</title>
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
		body {
  			/* font: 14px/1.4 arial; */
  			background-color: darkseagreen;
		}
		h1{
			color: white;
			font-size: 3em;
			text-align: left;
		}
		.imgWrap {
  			position: relative;
  			height: 400px;
  			width: 257px;
		}
		.imgDescription {
  			position: center;
  			top: 0;
  			bottom: 0;
  			left: 0;
  			right: 0;
  			background: rgba(29, 106, 154, 0.72);
  			color: #fff;
  			visibility: none;
  			opacity: 0;
  			/*remove comment if you want a gradual transition between states
  			-webkit-transition: visibility opacity 0.2s;
  			*/
		}
		.imgWrap:hover .imgDescription {
  			visibility: visible;
  			opacity: 1;
		}
		/* 
img{
			height: 400px;
			width: 900px;
		}
 */
		
	</style>
	
</head>
<body>
	
	<h1>Apparel</h1>
	
	<div>
	<div class="imgWrap" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/Tilla4Prez.png"  alt="prez" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
		<p class="imgDescription">Tilla 4 Prez<br>$28.95</p>
	</div>
	<div class="imgWrap" style="float: left; width: 40%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="../images/Tilla&Chill.png"  alt="chill" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
	 	<p class="imgDescription">Till and Chill<br>$26.95</p>
    </div>
    </div>
    <p>Ready to logout so soon?</p>
	<p><a href='logout.php'>Logout</a></p>
</body>
</html>