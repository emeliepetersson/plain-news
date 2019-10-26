

function showHide() {
	const contentShow = document.getElementsByClassName('content-show');
	for (let i = 0; i < contentShow.length; i++) {
	
		if (contentShow[i].style.display != 'none') {
			contentShow[i].style.display = 'none';

			const hiddenContent = document.getElementsByClassName('content');
			for (let i = 0; i < hiddenContent.length; i++) {
				hiddenContent[i].style.display = 'block';
				
			}
			
		}
		else {
			contentShow[i].style.display = 'inline';

			const hiddenContent = document.getElementsByClassName('content');
			for (let i = 0; i < hiddenContent.length; i++) {
				hiddenContent[i].style.display = 'none';
				
			}
		}
	}
	
}

const contentShow = document.getElementsByClassName('content-show');

for (let i = 0; i < contentShow.length; i++) {
	contentShow[i].onclick= showHide;
}

const contentHide = document.getElementsByClassName('content-hide');
for (let i = 0; i < contentHide.length; i++) {
	contentHide[i].onclick= showHide;
}


