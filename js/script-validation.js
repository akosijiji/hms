//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

	    $('#patient-form').validate({
	       rules: {
	        patient_fname: {
	        minlength: 2,
	        required: true
	      },
	        patient_lname: {
	        required: true,
	        minlength: 2
	      },
		patient_mname: {
	      	minlength: 2,
	        required: true
	      },
		patient_occupation: {
	        minlength: 2,
	        required: true
	      },
		patient_phoneno: {
		  required: true,
		  number: true
	      },
		patient_address: {
		  minlength: 2,
		  required: true
		}
		
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready