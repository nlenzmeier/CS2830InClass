<!DOCTYPE html>

	<!-- 
Nicolle Lenzmeier
	nalyv2
	14209824
	October 21, 2016
 -->


<html>

<head>
	<meta charset="utf-8">
    <title>Challenge 8</title>
    
<!-- make image tags h & w -->

	<style>
		img{
			height: 500px;
			width: 800px;
		}
	
		h1{
			size: 16px;
			color: forestgreen;
		
		}
	
	</style>

</head>

<body>

	<h1>Challenge 8 Images</h1>
	
    <?php
    
    	$dir = "images/";
        $images = glob($dir . "*.jpg");
        
        if($images == null){
        	echo "Directory not found.";
        	return;
        }
        
        if($images == FALSE){
        	echo "Directory cannot be opened.";
        }
    
       foreach($images as $image){
            echo "<div> <img src=\" ". $image . "\" alt=\"picture\"></div>";
        }
        
        $images = glob($dir . "*.jpeg");
    
       foreach($images as $image){
            echo "<div> <img src=\" ". $image . "\" alt=\"picture\"></div>";
        }
        
        $images = glob($dir . "*.gif");
    
       foreach($images as $image){
            echo "<div> <img src=\" ". $image . "\" alt=\"picture\"></div>";
        }
        
        $images = glob($dir . "*.png");
    
       foreach($images as $image){
            echo "<div> <img src=\" ". $image . "\" alt=\"picture\"></div>";
        }
      
    ?>

 
    
</body>



</html>