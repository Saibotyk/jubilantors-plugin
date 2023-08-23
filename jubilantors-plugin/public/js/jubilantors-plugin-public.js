(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
	const article = document.querySelector(".post-16");
	const bar = document.querySelector(".bar");
	function fillBar() {
		let scrollYPosition = window.scrollY - 211;
		const scrollMax = article.clientHeight;
		let percentOfScroll = (scrollYPosition * 100) / scrollMax * 1.30;
		if (percentOfScroll < 100) {
			bar.style.width = `${percentOfScroll}%`;
			bar.style.borderRadius = '0 16px 16px 0';
		}
		else {
			bar.style.width = '100%'
			bar.style.borderRadius = '0';
		}
		console.log(bar.style.width);
	}

	window.addEventListener('scroll', function () {
		if (bar.style.width === '100%') {
			return
		}
		fillBar();
	});
});