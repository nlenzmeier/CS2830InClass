<!DOCTYPE html>
<!--
	References: 
		1) http://www.w3schools.com/js/js_function_closures.asp
-->
<html>
<head>
    <title>Closures</title>
    <script>
       /* 
       		//function declaration
       		function x(){
       		
       		}
       		
       		//function expression
       		
       		var x = function(){
       		
       		};
       */
       
       function Cow(){
       		var name = "Bertha";
       		
       		var moo = function(){
       			console.log(name + " says moooo!");
       		};
       		
       		return moo;
       }
       
       //Note that "moo" refers to a local variable called "name"
       //when we call Cow and it returns moo, we're no just getting the function moo
       //we'll also get the name Bertha
       
       var animalSound = Cow();
       console.dir(animalSound);
       
       animalSound();
       
       //...otherwise this would be equivalent to "moo"
       var animalSound2 = function(){
       		console.log(name + " says mooooo!");
       }
       
       console.dir(animalSound2);
       animalSound2();
       
    </script>
</head>
<body>
</body>
</html>