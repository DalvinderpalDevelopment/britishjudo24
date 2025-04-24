document.addEventListener('DOMContentLoaded', () => {

	// Header nav toggle fucntion to toggle list items to show dropdown.
	function headerNavToggle() {
		const mainNavItems = document.querySelectorAll('.header__main--nav > ul > li');
		const mainNavDropdown = document.querySelector('.header__main--nav-dropdown');
		const headerMainCollection = document.getElementsByClassName('header__main');
		const headerMain = headerMainCollection[0];

		mainNavItems.forEach(item => {
			item.addEventListener('mouseenter', () => {
				if (headerMain) {
					headerMain.classList.add('nav-toggle');
					mainNavDropdown.setAttribute('aria-expanded', 'true');
				}
			});

        	item.addEventListener('mouseleave', () => {
				if (headerMain) {
					headerMain.classList.remove('nav-toggle');
					mainNavDropdown.setAttribute('aria-expanded', 'false');
				}
			});
		});

		mainNavDropdown.addEventListener('mouseenter', () => {
			if (headerMain) {
				headerMain.classList.add('nav-toggle');
				mainNavDropdown.setAttribute('aria-expanded', 'true');
			}
		});
	}

	// Toggle search icon to show form.
	function toggleSearchForm() {
		const headerMain = document.querySelector('.header__main');
		const headerLogo = document.querySelector('.header__main--logo');
		const headerNav  = document.querySelector('.header__main--nav');
		const searchIcon = document.querySelector('.header__main--search-toggle');
		const searchForm = document.querySelector('.header__main--search');

		searchIcon.addEventListener('click', () => {
			searchForm.classList.toggle('active');

			if (searchForm.classList.contains('active')) {
				headerLogo.style.display = 'none';
				headerNav.style.display = 'none';
				headerMain.style.backgroundColor = '#ffffff';
				searchIcon.setAttribute('aria-expanded', 'true');
			} else {
				headerLogo.style.display = 'block';
				headerNav.style.display = 'block';
				headerMain.style.backgroundColor = '';
				searchIcon.setAttribute('aria-expanded', 'false');
			}
		});
	}

	// Stats counter animation.
	function statsCounter() {
		const counters = document.querySelectorAll('.stats__grid__col h4');

		counters.forEach(counter => {
			const updateCounter = () => {
				const target = +counter.getAttribute('data-count');
				const start = 0;
				const duration = 10000;
				const stepTime = Math.abs(Math.floor(duration / target));

				let current = start;
				const interval = setInterval(() => {
					current += 1;
					counter.innerText = current;

					if (current === target) {
						clearInterval(interval);
					}
				}, stepTime);
			};

			// Trigger the counting animation when the element is in view
			const isInView = () => {
				const rect = counter.getBoundingClientRect();
				return rect.top >= 0 && rect.bottom <= window.innerHeight;
			};

			const onScroll = () => {
				if (isInView()) {
					updateCounter();
					window.removeEventListener('scroll', onScroll);
				}
			};

			window.addEventListener('scroll', onScroll);
			onScroll();
		});
	}

	toggleSearchForm();

	headerNavToggle();

	statsCounter();
});
