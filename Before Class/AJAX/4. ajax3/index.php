<!DOCTYPE html>
<html>
<head>
	<title>AJAX POST/Form Example</title>
	<style>
		body {
			font-family: arial, helvetica, sans-serif;
			font-size: 12pt;
		}
		
		h1 {
			font-size: 1em;
		}
		
		h2 {
			margin-top: 0;
			font-size: 1em;
			text-align: center;
		}
		
		#formbox {
			float: left;
			width: 250px;
			min-height: 250px;
			border: 1px solid black;
			background-color: #CCDDFF;
			padding: 10px;
			margin-right: 20px;
			margin-bottom: 20px;
		}
		
		.center {
			text-align: center;
		}
		
		.instructions {
			font-size: .8em;
		}
		
		.centeredImage {
			display: block;
			margin: 0 auto 0 auto;
		}
		.age {
			margin-right: 18px; 
		}
		.name {
			margin-right: 3px; 
		}
	</style>

	<script>

	
	</script>
</head>
<body>
	<h1>Ajax POST/Form Example</h1>
	<p>Nunc molestie orci nec sem ultrices eget pharetra erat ullamcorper. Integer hendrerit felis at odio viverra placerat. Sed tincidunt velit id libero venenatis tincidunt. Vivamus nec vestibulum odio. Praesent sollicitudin, sapien ac pharetra viverra, augue velit lacinia nisi, placerat varius leo ante sed nulla. Duis luctus eros quam. Phasellus nec urna bibendum elit imperdiet placerat ut quis mauris. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur varius lacinia nisl vel tincidunt. Aliquam ac massa velit.</p>
	
	
	<div id="formbox">
		<h2>Hobby Corner</h2>
		<p class="instructions">Enter your name, hobby and age in the form below and click the Submit button.</p>
		<form>
			<p><label for="name" class="name">Name: </label><input type="text" name="name" id="name" value=""><br></p>
			<p><label for="hobby">Hobby: </label><input type="text" name="hobby" id="hobby" value=""><br></p>
			<p><label for="age" class="age">Age: </label><input type="text" name="age" id="age" value=""><br></p>
			<p class="center"><input type="button" value="Submit" onclick="doSubmit()"></p>
		</form>
	</div>
	
	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec nulla in nisi dictum adipiscing et ac nisi. Praesent ullamcorper, ante ac varius tristique, eros dolor sollicitudin massa, sit amet feugiat tellus purus nec dui. Cras sit amet eros vitae dui euismod consequat. Nam consectetur sapien in purus ornare rhoncus. Donec vel dolor ut elit accumsan ornare. Maecenas commodo ligula non lacus luctus eu viverra augue placerat. Suspendisse a nibh erat. Phasellus pretium, est nec hendrerit suscipit, orci eros pulvinar mi, vitae facilisis ipsum metus nec odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla pellentesque risus id diam suscipit vel tincidunt dolor vehicula. Mauris fermentum porttitor fermentum. Nulla et diam sed mauris eleifend congue at eget nunc. Aliquam pharetra dapibus viverra. Sed auctor tincidunt libero, eu lobortis ligula accumsan ut. Quisque urna felis, tempor a aliquet eu, fringilla et mauris.</p>
</body>
</html>
