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
	const article = document.querySelector(".entry-content");
	const header = document.querySelector(".site-header");
	const bar = document.querySelector(".bar");
	function fillBar() {
		let scrollYPosition = window.scrollY - header.scrollHeight;
		const scrollMax = article.clientHeight*0.98;
		console.log(scrollMax);
		let percentOfScroll = (scrollYPosition * 100) / scrollMax;
		if (percentOfScroll < 100) {
			bar.style.width = `${percentOfScroll}%`;
			bar.style.borderRadius = '0 16px 16px 0';
		}
		if (window.scrollY > article.scrollHeight) {
			bar.style.width = '100%'
			bar.style.borderRadius = '0';
		}

	}

	window.addEventListener('scroll', function () {
		if (bar.style.width === '100%') {
			return
		}
		fillBar();
	});
});