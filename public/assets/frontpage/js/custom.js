(function($) {

	'use strict';

	$('#contactForm').validate({
		submitHandler: function(form) {

			var $form = $(form),
				$messageSuccess = $('#contactSuccess'),
				$messageError = $('#contactError'),
				$submitButton = $(this.submitButton),
				$errorMessage = $('#mailErrorMessage'),
				submitButtonText = $submitButton.val();

			$submitButton.val( $submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...' ).attr('disabled', true);

			$.ajax({
				type: 'POST',
				url: $form.attr('action'),
				data: {
					Name: $form.find('#Name').val(),
					Email1: $form.find('#Email1').val(),
					phone: $form.find('#phone').val(),
					subject: $form.find('#subject').val(),
					_token: $form.find('#_token').val(),
					c_message: $form.find('#c_message').val()
				}
			}).always(function(data, textStatus, jqXHR) {

				$errorMessage.empty().hide();
console.log(data);
				if (data.status == 'success') {

					$messageSuccess.removeClass('hide-box');
					$messageError.addClass('hide-box');

					$form.find('.form-control').val('').blur().parent().removeClass('has-success').removeClass('has-danger').find('label.error').remove();

					$form.find('.form-control').removeClass('error');

					$submitButton.val( submitButtonText ).attr('disabled', false);

					return;

				} else {
					$errorMessage.html(data.errorMessage).show();
				}

				$messageError.removeClass('hide-box');
				$messageSuccess.addClass('hide-box');

				$form.find('.has-success').removeClass('has-success');

				$submitButton.val( submitButtonText ).attr('disabled', false);

			});
		}
	});

}).apply(this, [jQuery]);
