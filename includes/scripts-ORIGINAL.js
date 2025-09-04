$(document).ready(function() {
    
	$('.person').on('click',function(){
		
		var children = document.getElementById(this.id).childNodes;
		var active_male_elem = document.getElementsByClassName('holder male me');
		var active_female_elem = document.getElementsByClassName('holder female me');
		var i;
		
		// Clear the active (Clicked) elements
		for (i = 0; i < active_male_elem.length; i++) {
			active_male_elem[i].classList.remove('me');
		} 
		for (i = 0; i < active_female_elem.length; i++) {
			active_female_elem[i].classList.remove('me');
		} 
		
		// Activate the "holder" div of the currently clicked "person" element
		for (i = 0; i < children.length; i++) {
			
			if(children[i].className == 'holder male' || children[i].className == 'holder female'){
				children[i].classList.add('me');
			}
		} 
	

	});
	
	
});