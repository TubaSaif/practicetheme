document.addEventListener('DOMContentLoaded', function() {
	const menuToggle = document.querySelector('.hamburger');
	const navigation = document.querySelector('.main-navigation');
  
	if (menuToggle && navigation) { // Check if elements are found
	  menuToggle.addEventListener('click', () => {
		navigation.classList.toggle('toggled');
		menuToggle.classList.toggle('active');
	  });
	} else {
	  console.log('Elements not found');
	}
  });
  
