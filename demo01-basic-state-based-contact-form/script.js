(function() {
	'use-strict';

	// Backbone view controller
	var ContactController = Backbone.View.extend({
		$form: null,
		$subject: null,
		state: null,
		initialize: function() {
			// Save reference to view
			var self = this;

			// Create model
			var ContactModelConstructor = Backbone.Model.extend();
			self.state = new ContactModelConstructor({
				isVisible: false,
				subject: ''
			});

			// Set the form elements
			self.$form = $('.js-contact-form');
			self.$subject = $('.js-contact-subject');

			// Watching for model changes on form visibility
			self.state.on('change:isVisible', function(model, val) {
				if (val) {
					self.showForm();
				} else {
					self.hideForm();
				}
			});

			// Watching for model changes to the subject
			self.state.on('change:subject', function(mode, val) {
				self.setSubject(val);
			});

			// Watch for clicks on overlay triggers and update model
			$('body').on('click', '.js-contact-trigger', function() {
				self.state.set(
					'isVisible',
					! self.state.get('isVisible')
				);
			});

			// Watch for contact subject trigger
			$('body').on('click', '[data-set-contact-subject]', function() {
				self.state.set('subject', $(this).data('setContactSubject'));
			});
		},

		// Functions below could do a lot more fancy things
		// These functions are alwasy the ones that run to
		// - Show the form
		// - Hide the form
		// - Set the subject
		//
		// Single responsibility principle

		showForm: function() {
			this.$form.fadeIn(200);
		},

		hideForm: function() {
			this.$form.fadeOut(200);
		},

		setSubject: function(val) {
			this.$subject.val(val);
		}
	});

	// Instantiate the view controller
	new ContactController();
})();
