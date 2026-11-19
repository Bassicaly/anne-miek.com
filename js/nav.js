/*
 * Touch support for the dropdown menu.
 *
 * With a mouse the menu opens on hover (CSS). On touch devices there is no
 * hover, so the first tap on a parent item opens its submenu and a second tap
 * follows the link. Tapping anywhere else closes the menu again.
 */
(function () {
	'use strict';

	var items = document.querySelectorAll('#main-nav .dropdown');
	if (!items.length || !window.matchMedia) return;

	function closeAll(except) {
		Array.prototype.forEach.call(items, function (item) {
			if (item !== except) item.classList.remove('open');
		});
	}

	Array.prototype.forEach.call(items, function (item) {
		var link = item.querySelector('a');

		link.addEventListener('click', function (event) {
			if (!window.matchMedia('(hover: none)').matches) return;

			var isPlaceholder = link.getAttribute('href') === '#';
			if (!item.classList.contains('open')) {
				event.preventDefault();
				closeAll(item);
				item.classList.add('open');
			} else if (isPlaceholder) {
				event.preventDefault();
				item.classList.remove('open');
			}
		});
	});

	document.addEventListener('click', function (event) {
		if (!event.target.closest('.dropdown')) closeAll();
	});
})();
