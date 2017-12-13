/*
	The following is the data used by the application.
	Typically this data is loaded from a server or
	from a file.
	
	To make life easier and to see how the app works, the 
	data is provided here instead of loading it from somewhere.
	
*/

var title = 'Tilla Photographs';

var photos = [
	{
		uri : '../images/2.jpg',
		title : 'Bath Time!'
	},
	{
		uri : '../images/5.JPG',
		title : 'Moving Out'
	},
	{
		uri : '../images/8.JPG',
		title : 'Insta-Ready'
	},
	{
		uri : '../images/9.JPG',
		title : 'Netflix and Till'
	},
	{
		uri : '../images/10.JPG',
		title : 'Sitting and Till-ing'
	}
];

// The following 'controller' code utilizes the above data.
// The code and the html in index.html do not contain any specifics
// of the images that are displayed.  The data 'drives' what the logic does.

// The paradigm is Model-View-Controller (MVC)
// Model = the data above
// View = interface elements and CSS
// Controller = the code below
// http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller


// Do the initial setup.
//  - set the title based on the 'title' variable
//  - if there are photos, display the first one and its title
function prepareDisplay(photos) {
	$('#title').html(title);
	
	if (photos.length < 1) return;
	
	//else
	var firstPhoto = photos[0];
	$('#imageHolder').attr('src', firstPhoto.uri);
	$('#photoTitle').html(firstPhoto.title);
}

// This function will display an item that is clicked-on in the menu.
// Which item to display is in the data that was provided when 
// .click was set (see populateMenu) and provided with event data.
function displayItem(event) {	
	var data = event.data;
	var item = data.item;
	$('#imageHolder').attr('src', item.uri);
	$('#photoTitle').html(item.title);
}

// This function takes the data and creates menu items.
// Each menu item is an <li> in a <ul>.
// The .click() on each menu item is set to call displayItem 
// and provided the data contained in eventData.
function populateMenu(items) {
	for (var i=0; i < items.length; i++) {
		var item = items[i];
		
		// The following creates a new <li>.
		// When jquery ($) receives html it creates the element
		// rather than finding it.
		var menuItem = $( '<li><img class="thumnail" src="' + item.uri + '">'+ item.title + '</li>' );
		
		// Add the new <li> to the <ul> with an id of menuItems
		$('#menuItems').append(menuItem);
        
        
		// Create a data object to send as data to the click handler.
		var eventData = {
			'num'	: i,
			'item'	: item
		};
		// Add a click handler with event data to the <li> that was appended above.
		// eventData is the data received in the event received by displayItem
		// when a menu item is clicked
        
		menuItem.click(eventData, displayItem);
	}

}

// When the DOM is ready, the initial display is prepared and the
// menu is populated.
$(document).ready(
	function() {
		prepareDisplay(photos);
		populateMenu(photos);
	
	}
);