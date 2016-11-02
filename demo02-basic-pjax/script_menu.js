(function() {
	'use-strict';

	// Backbone view controller
	var MenuController = Backbone.View.extend({
		initialize: function() {
			var self = this;

			// Watch for a change to page rendered
			jsDemo.globalState.on('change:pageRendered', function(model, val) {
				self.render(val);
			});
		},

		/**
		 * Render page
		 *
		 * @param {string} url - The URI
		 */
		render: function(url) {
			var activeClass = 'site-menu__link--is-active';
			$('.js-pjax-link').removeClass(activeClass);
			$('[href="' + url + '"]').addClass(activeClass);
		}
	});

	// Instantiate the view controller
	new MenuController();
})();
