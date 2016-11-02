window.jsDemo = {};

(function() {
	'use-strict';

	var GlobalModelConstructor = Backbone.Model.extend();
	jsDemo.globalState = new GlobalModelConstructor({
		currentUrl: window.location.pathname,
		pageRendered: window.location.pathname
	});
})();
