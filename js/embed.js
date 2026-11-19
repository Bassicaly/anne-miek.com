/*
 * Click-to-load for third-party embeds (YouTube, Google Maps).
 *
 * Nothing is requested from the third party until the visitor clicks, so no IP
 * address is sent and no cookies are set on page load. Without JavaScript the
 * plain link inside the element stays visible.
 *
 * Markup:
 *   <div class="embed" data-embed="https://..." data-provider="YouTube"
 *        data-label="Video" data-title="..." data-width="560" data-height="315">
 *     <a href="https://...">Fallback link</a>
 *   </div>
 */
(function () {
	'use strict';

	var boxes = document.querySelectorAll('.embed[data-embed]');

	Array.prototype.forEach.call(boxes, function (box) {
		var provider = box.getAttribute('data-provider') || 'een externe website';
		var label = box.getAttribute('data-label') || 'Inhoud';
		var width = parseInt(box.getAttribute('data-width'), 10) || 560;
		var height = parseInt(box.getAttribute('data-height'), 10) || 315;
		var fallback = box.querySelector('a');

		box.style.maxWidth = width + 'px';
		box.style.aspectRatio = width + ' / ' + height;
		box.classList.add('embed-ready');

		var message = document.createElement('p');
		message.textContent = 'Deze ' + label.toLowerCase() + ' wordt geladen van ' + provider +
			'. Daarbij ontvangt ' + provider + ' uw IP-adres en kan er cookies plaatsen.';

		var button = document.createElement('button');
		button.type = 'button';
		button.textContent = label + ' laden';

		box.insertBefore(message, box.firstChild);
		box.insertBefore(button, fallback);

		button.addEventListener('click', function () {
			var frame = document.createElement('iframe');
			frame.src = box.getAttribute('data-embed');
			frame.title = box.getAttribute('data-title') || label;
			frame.setAttribute('allowfullscreen', '');
			frame.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
			frame.setAttribute('allow', 'accelerometer; encrypted-media; gyroscope; picture-in-picture');

			box.textContent = '';
			box.classList.remove('embed-ready');
			box.classList.add('embed-loaded');
			box.appendChild(frame);
		});
	});
})();
