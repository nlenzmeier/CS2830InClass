<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
    <title>Challenge 8</title>
    


</head>

<body>
    <?php
    
        echo "<img src=\"images/1.%20aGuyInJacket.gif\" alt=\"picture 1\">";
        
        $dir = "images/";
        $images = glob($dir . ".jpg");
    
        foreach($images as $image){
            echo $image;
        }
    
    
    ?>
    <!--<img src="images/1.%20aGuyInJacket.gif" alt="picture 1">-->
    
    
    
</body>



</html>