

const content = document.getElementsByClassName('article-content');

const contentShow = document.getElementsByClassName('content-show');
for (let i = 0; i < contentShow.length; i++) {
	contentShow[i].onclick= showHide;
}

const contentHide = document.getElementsByClassName('content-hide');
for (let i = 0; i < contentHide.length; i++) {
	contentHide[i].onclick= showHide;
}


/**
 * Show more content when element with class "content-show" is clicked,
 * and show less content when element with class "content-hide" is clicked.
 */
function showHide() {
	
	for (let i = 0; i < contentShow.length; i++) {
	
		
		
		if (contentShow[i].style.display != 'none') {
			contentShow[i].style.display = 'none';

			for (let i = 0; i < content.length; i++) {
				content[i].style.height = "100%";
				
			}
			for (let i = 0; i < contentHide.length; i++) {
				contentHide[i].style.display = "inline-block";
				
			}

		}
		else {
			contentShow[i].style.display = 'inline-block';

			for (let i = 0; i < content.length; i++) {
				content[i].style.height = '4.7em';
				
			}
			for (let i = 0; i < contentHide.length; i++) {
				contentHide[i].style.display = "none";
				
			}
		}
	}
	
}



const hamburgerIcon = document.getElementById('hamburger-icon');
hamburgerIcon.onclick = toggleMenu;

/**
 * Show and hide menu items when hamburger icon is clicked.
 */
function toggleMenu() {
	const menuItems = document.getElementById('mobile-nav-items');    
		
		if(menuItems.style.display == "none") { // if menuItems is hidden, show it.
		  menuItems.style.display = "block";
		}
		else { // if is menuItems is displayed, hide it.
		  menuItems.style.display = "none";
		}
}



