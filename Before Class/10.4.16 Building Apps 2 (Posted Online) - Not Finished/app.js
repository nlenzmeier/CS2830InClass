/*
	The following is the data used by the application.
	Typically this data is loaded from a server or
	from a file.
	
	To make life easier and to see how the app works, the 
	data is provided here instead of loading it from somewhere.
	
*/



var photos = [
	{
		uri : 'images/birdnest.png',
		title : 'Birdphoto Nest'
	},
	{
		uri : 'images/birdrow.png',
		title : 'Row of Birds'
	},
	{
		uri : 'images/bluefootedbird.png',
		title : 'Blue-footed Birds'
	},
	{
		uri : 'images/deer.png',
		title : 'Running Deer'
	},
	{
		uri : 'images/hounds.png',
		title : 'Hound Dogs'
	},
	{
		uri : 'images/parrots.png',
		title : 'Colorful Parrots'
	},
	{
		uri : 'images/penguins.png',
		title : 'Rockhopper Penguins'
	},
	{
		uri : 'images/pheasants.png',
		title : 'Pheasants'
	},
	{
		uri : 'images/polarbears.png',
		title : 'Polar Bears'
	},
	{
		uri : 'images/sheep.png',
		title : 'Flock of Sheep'
	}
];


var title = 'Animal Photographs';


function prepareDisplay(photos){
    $('#title').html(title);
    
    if(photos.length < 1) return;
    
    var firstPhoto = photos[0];
    
    $('#imageHolder').attr('src', firstPhoto.uri);
    $('#photoTitle').html(firstPhoto.title);
}

function displayItem(event){
    console.dir(event);
    
    var data = event.data;
    var item = data.item;
    $('#imageHolder').attr.('src', item.uri);
    $('photoTitle').html(item.title);
}

function populateMenu(items){
    
    for(var i=0; i < items.length; i++){
        var item = items[i]; 
        
        var menuItem = $( '<li>' + item.title + '</li>'); 
        
        $('#menuItems').append(menuItem); 
        
        var eventData = {
            'num' : i,
            'item' : item
        };
        
        menuItem.click(eventData, displayItem);
    }
    
}

var subtract = function(x, y) {

            var z = x - y; 

            return z; 

        }; 

var result = subtract(4,3); 

alert(result); 




$(document).ready(
    
    function() {
        prepareDisplay(photos);
        populateMenu(photos);
        
    }
    

); 





















