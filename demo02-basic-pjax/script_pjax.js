(function() {
	'use-strict';

	// Backbone view controller
	var PjaxController = Backbone.View.extend({
		initialize: function() {
			var self = this;

			// Watch for change to currentUrl
			jsDemo.globalState.on('change:currentUrl', function(model, val) {
				self.render(val);
			});

			// Watch for a change to page rendered
			jsDemo.globalState.on('change:pageRendered', function(model, val) {
				window.history.pushState({}, '', val);
			});

			// Watch for clicks on pjax links
			$('body').on('click', '.js-pjax-link', function(e) {
				e.preventDefault();
				jsDemo.globalState.set('currentUrl', $(this).attr('href'));
			});
		},

		/**
		 * Render page
		 *
		 * @param {string} url - The URI
		 */
		render: function(url) {
			$.ajax({
				url: url,
				data: {
					pjax: true
				},
				success: function(html) {
					// Replace the content on the DOM
					$('.js-body-area').html($(html).html());

					// Trigger a change event on the model
					jsDemo.globalState.set('pageRendered', url);
				}
			});
		}
	});

	// Instantiate the view controller
	new PjaxController();
})();
