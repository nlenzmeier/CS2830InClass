<?php
	// The format of the URL will be something like:
    // http://example.com/get/intro.php?name=Mr.Wergeles&lang=ch
    echo "hello world<br>";

    print_r($_GET);
    
    $name = $_GET['name'];
    
    echo $name . "<br>";
    
    $language = $_GET['lang'];
    
    echo $language . "<br>";
    
    if(%language == 'ch'){
    	print "Ni Hao $name";
    }
    else {
    	print "Hello $name";
    }
    
    ?>
