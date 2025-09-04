$(document).ready(function() {
    
	$('.person').on('click',function(){
		
		var personId = this.id; // Get the person's ID from the div id
		console.log('Person clicked: ' + personId); // Debug output
		
		// Reload the page with the new person ID
		window.location.href = 'GenThree_Simple.php?person=' + personId;
		
	});

});