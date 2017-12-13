<?php
set_include_path('templates');
require_once("Template.php");
require_once("MenuComponent.php");

// Set Page Title
$title = 'About-Tilla';
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


	$currentPage = 'Bio';

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
	<title>About - Tilla</title>
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
		p{
			color: white;
			font-size: 1.3em;	
		}
		h1{
			color: white;
			font-size: 3em;
			text-align: left;
		}
		.div{
			background-color: darkslategray;
			border: 2px solid white;
		}
	</style>
	
</head>
<body>
	
	<h1>About Tilla</h1>

	<div class="div">
	<p>The story of one special cat began when she was found in a bush outside of her owner's house at three weeks old. 
	 Knowing that Tilla would die unless she had help, her owner took her in and decided to make her a part of her 
	 multi-animal household. Not having a name yet, her owner took many suggestions from people. 
	 She eventually came up with Tilla on her own, and it fit perfectly; Tilla was a fiesty trooper, always causing trouble, 
	 so most people thought she was named after Attila the Hun. </p>
	 
	 <p>Through the years, she has gone on many adventures and heartbreaks. She moved to college with her owner, 
	 both taking the world by storm; she went through some stomach health problems; and recently, went through a hard time when
	 she lost a fellow cat family member on November 14, 2016.</p>
	 
	 <p>On a day-to-day basis, Tilla enjoys sleeping in the sun, getting brushed, sitting on vents in the house, and playing 
	 with little sticks of chalk. Everyone that meets her, cat lovers or not, immediately falls in love with her, touching lives 
	 wherever she goes. Taking one look at her will make your heart melt. If you wish to stay up to date with her entertaining
	 life, follow her owner on Instagram @nlenzmeier and see all of the ridiculous and adorable shenanigans!</p>
	 </div>
	 
	 <p>Ready to logout so soon?</p>
	<p><a href='logout.php'>Logout</a></p>
</body>
</html>