<?php

    // Print the contents of $_GET
    print_r($_POST);
    
    print "<br><br>"; 
    
    // The format of the URL will be something like:
    // http://example.com/get/intro.php?name=Mr.Wergeles&lang=ch

    // Look for a 'name' key
    $name = $_POST['userName'];
    // Look for a 'language' key
    $language = $_POST['language'];
    
    // If the language is Chinese, say hi in Chinese
    if ($language == 'ch') {
        print "Ni Hao $name";
    }
    // Else default to English
    else {
        print "Hello $name";
    }

?>
