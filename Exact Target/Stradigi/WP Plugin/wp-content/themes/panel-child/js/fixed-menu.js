  $( function() {
    $( "#tabs" ).tabs();
	var menu = document.querySelector('.responsiveSelectContainer ul');
	if (menu){
		var menuPosition = menu.getBoundingClientRect().top;
		window.addEventListener('scroll', function() {
			if (window.pageYOffset >= menuPosition) { 
			   if (document.querySelector('.responsiveSelectContainer').getBoundingClientRect().top >=0){
				   menu.classList.remove("fixedMenu");
				   menu.classList.add("menu");
			   }else{   
				   menu.classList.remove("menu");
				   menu.classList.add("fixedMenu");
			   }
			} else {
				menu.classList.remove("fixedMenu");
				menu.classList.add("menu");
			}
		});
	}	
  });