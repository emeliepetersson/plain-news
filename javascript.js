'use strict';

// Function toggles between class names to show/hide content
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


// Function toggles between class names to show/hide menu items.
function toggleMenu(event) {
	const menuItems = event.currentTarget.parentElement.querySelector('.mobile-nav-items');

	menuItems.classList.toggle('show-menu');
}

// Add onclick event to hamburger-icon with class name "hamburger-icon".
const hamburgerIcon = document.getElementsByClassName('hamburger-icon');
for (let i = 0; i < hamburgerIcon.length; i++) {
	hamburgerIcon[i].onclick= toggleMenu;
}


//https://stackoverflow.com/questions/9186346/javascript-onclick-increment-number

//let i = 0;
//function buttonClick() {
//	document.getElementById('inc').value = ++i;
//}
