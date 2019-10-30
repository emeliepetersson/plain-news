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


//Increment amount of likes on click
function likeCounter(event) {
	const likeInput = event.currentTarget.parentElement.querySelector('.likes');
	let i = likeInput.value;
	likeInput.value = ++i;
}

// Add onclick event to like-icon.
const likeButton = document.getElementsByClassName('like-icon');
for (let i = 0; i < likeButton.length; i++) {
	likeButton[i].onclick= likeCounter;
}
