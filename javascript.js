

//const content = document.getElementsByClassName('article-content');

const contentShow = document.getElementsByClassName('show-hide');
for (let i = 0; i < contentShow.length; i++) {
	contentShow[i].onclick= showHide;
}


/**
 * Show more content when element with class "content-show" is clicked,
 * and show less content when element with class "content-hide" is clicked.
 */
function showHide(event) {

	const targetContent = event.currentTarget.parentElement.querySelector('.article-content');
	const button = event.currentTarget.parentElement.querySelector('.show-hide');

	targetContent.classList.toggle('show');

		if (targetContent.classList.contains('show')) {
			button.textContent = "Hide content";
			
		}
		else {
			button.textContent = "Show more";
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



