<!DOCTYPE html> 
<html>
<head>
	<title>Retrieve Data</title>
	<script src="../jquery-1.11.2.min.js"></script>
	<script>
        
        // When the page loads...
        $(function() {
            var app = new Application('Professor Wergeles', 12);
             app.Start();
           
           
           var app2 = new Application('Nicolle' , 20);
           app2.Start();
        });
    
        // Application class
        function Application(name, age) {
            this.name = name;
            this.age = age;
        }

        // Modified Application Start method
        Application.prototype.Start = function() {
            var advert = new Advertisement('You just won 2 million dollars!');
            advert.Retrieve(this.onDataReceived, this);
        };

        Application.prototype.onDataReceived = function(data) {
            alert(this.name + ': ' + data);
        };
            
        // Advertisement class
        function Advertisement(advertise) {
			this.advertise = advertise;
        }
        
        // Re-write of the Retrieve method of the Advertisement class
        Advertisement.prototype.Retrieve = function(onSuccess, context) {
            // onSuccess and context are both in scope

            // doOnSuccess wraps around (encloses) onSuccess and context
            var doOnSuccess = function(data) {
                onSuccess.call(context, data);
            };

            // Instead of the jQuery get method calling onSuccess directly, it calls a function defined inside of Retrieve called 'doOnSuccess'
            $.get('info.php', {'message' : this.advertise},doOnSuccess);
        };
	</script>
</head>
<body>
This is a data retrieval example.  An alert will pop up with the retrieved data.
</body>
</html>