<!DOCTYPE html>
<html>
<head>
	<title>AJAX Loading Feedback</title>
    <!-- Loading icon CSS -->
    <style>
        #loader {
            display: none;
        }
        .loadNode {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 100%;
            margin: 10px 5px;
            transition: background-color .2s;
        }
        .loadNode:nth-of-type(1) {
            background-color: #aaa;
        }
        .loadNode:nth-of-type(2) {
            background-color: #777;
        }
        .loadNode:nth-of-type(3) {
            background-color: #333;
        }
    </style>
	<script>
        
       
        
		
		
        
        // The following JavaScript drives the loading animation
        var tick = 1;
        setInterval(function() {
            var loadNodes = document.querySelectorAll(".loadNode");
            if (tick == 1) {
                backgroundColors = ["#333", "#aaa", "#777"];
                tick = 2;
            }
            else if (tick == 2) {
                backgroundColors = ["#777", "#333", "#aaa"];
                tick = 3
            }
            else {
                backgroundColors = ["#aaa", "#777", "#333"];
                tick = 1;
            }
            loadNodes[0].style.backgroundColor = backgroundColors[0];
            loadNodes[1].style.backgroundColor = backgroundColors[1];
            loadNodes[2].style.backgroundColor = backgroundColors[2];
        }, 200);
    </script>
</head>
<body>
	<h1>Content</h1>
    <div id="loader">
        <div class="loadNode"></div>
        <div class="loadNode"></div>
        <div class="loadNode"></div>
    </div>
	<p id="contentBox"></p>
	<button type="button" onclick="getContent()">Get Content</button>
</body>
</html>
