<!DOCTYPE html>
<!-- Document was created by Nick on October 17, 2016-->
<html>
<head>
	<title>Variables and Scope</title>
</head>
<body>
    <?
    	/* declaring PHP variables*/
    	
        $txt = "Hello World!";
        $x = 5;
        $y = 10.5;
    
        echo $txt;
        echo"<br>";
    
        echo $x;
        echo"<br>";
    
        echo $y;
        
        echo"<br><br>";
        
        $x = 6;
        $y= 4;
        
        echo $x + $y;
        
        /*Global and local scope*/
        
        $x=5; //global scope
        
        function myTest(){
        	echo"<p>Variable x inside function is $x</p>:";
        }
        
        myTest();
        
        echo"<p>Variable x outside of function is: $x</p>";
        
        function myTest2(){
        	$n=10;
        	echo "<p>Variable n inside function is: $n</p>";
        }
        
        myTest2();
        
        echo "<p>Variable n outside function is: $n</p>";
        
        /*global keyword is used to access global variables with ... */
        
        $x = 5;
        $y = 10;
        
        function myTest3(){
        	global $x, $y;
        	
        	$y = $x + $y;
        }
        
        myTest3();
        
        echo "<p>". $y ."</p>";
    ?>




</body>
</html>