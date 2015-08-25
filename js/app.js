
//Portfolio image hover
$(".img-portfolio").hover(function() {
	$(this).closest('.portfolio-item').children('div').toggleClass('hover-active');
	$('.hover-active').hide().fadeIn();
});

//Slide up successful message alert
$('div.alert-success').delay(3000).slideUp(300);


/** Form Validation **/

/**
 * Validate email field
 * 
 * @param  email 	email form field
 * 
 * @return boolean	true if regex matched, false if not
 */
function validateEmail(email) {
	var regex = /\S+@\S+\.\S+/;

	return regex.test(email);
}

/**
 * Validate name field
 * 
 * @param  name 	name form field
 * 
 * @return boolean 	true if not empty, false if empty
 */
function validateName(name) {
	return $('#name').val().length !== 0 ? true : false;
}

/**
 * Validate message field
 * 
 * @param  message 	message form field
 * 
 * @return boolean 	true if not empty, false if empty
 */
function validateMessage(message) {
	return $('#message').val().length !== 0 ? true : false;
}

/**
 * remove error message
 */
function refocus() {
	$(this).next('.error-message').remove();
}

/**
 * Add error message
 * 
 * @param  field 	id of field
 * 
 * @param  string 	string to append to error message
 */
function getErrors(field, string) {
	$(field).after("<p class='error-message'>Please enter a " + string + "</p>");
}


/**
 * Email focusout listener 
 *
 * Validate email on focusout
 */
$("#email").focusout(function() {
	var email = $('#email').val();

	if(!validateEmail(email))
		getErrors('#email', 'valid email address');
});

/**
 * Name focusout listener
 * 
 * Validate name on focusout
 */
$("#name").focusout(function() {
	var name = $('#name').val();

	if(!validateName(name))
		getErrors('#name', 'name');
});

/**
 * Message focusout listener
 *
 * Validate message on focusout
 */
$("#message").focusout(function() {
	var message = $('#message').val();

	if(!validateMessage(message))
		getErrors('#message', 'message');
});

/**
 * Email, name, and message focusin event listener
 *
 * Call refocus() on focusin
 */
$("#email, #name, #message").focusin(refocus);