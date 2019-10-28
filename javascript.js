
// Show and hide content when button is clicked.
function showHide(event) {

	const targetContent = event.currentTarget.parentElement.querySelector('.article-content');
	const button = event.currentTarget.parentElement.querySelector('.show-hide');

	targetContent.classList.toggle('show');

		if (targetContent.classList.contains('show')) {
			button.textContent = "Hide content ";
			
		}
		else {
			button.textContent = "Show more";
		}
}

// Add onclick event to all buttons with class name "show-hide".
const contentShow = document.getElementsByClassName('show-hide');
for (let i = 0; i < contentShow.length; i++) {
	contentShow[i].onclick= showHide;
}


// Show and hide menu items when hamburger icon is clicked.
function toggleMenu(event) {
	const menuItems = event.currentTarget.parentElement.querySelector('.mobile-nav-items');

	menuItems.classList.toggle('show-menu');
}

// Add onclick event to hamburger-icon with class name "hamburger-icon".
const hamburgerIcon = document.getElementsByClassName('hamburger-icon');
for (let i = 0; i < hamburgerIcon.length; i++) {
	hamburgerIcon[i].onclick= toggleMenu;
}


