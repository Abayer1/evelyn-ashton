// JavaScript Document
			function validateForm() {
				var uname_input_valid = 	false;
				//var fname_input_valid = 	false;
				//var lname_input_valid = 	false;
				//var pass_input_valid = 	false;
				//var email_input_valid = 	false;
				//var policy_input_valid =	false;
				
				//Username validation check
				document.create_user_form.username.onblur = function() {
					var username_check = document.getElementById('create_uname_container');
					var span_display = username_check.getElementsByTagName('span');
					if(this.value.length > 0) {
						if(span_display[0].firstChild.nodeValue === null) {
							span_display[0].appendChild(document.createTextNode('Success!'));
							uname_input_valid = true;	
						} else {
							span_display[0].firstChild.nodeValue = "Success!";
							uname_input_valid = true;
						}
					} else {
						if(span_display[0].firstChild.nodeValue === null) {
							span_display[0].appendChild(document.createTextNode('Error!'));
							uname_input_valid = false;
						} else {
							span_display[0].firstChild.nodeValue = "Error!";
							uname_input_valid = false;
						}
					}
				};
				
				
				document.create_user_form.onsubmit = function() {
					processForm(uname_input_valid);	
					return false;
				};
			}
			
			function processForm(uname_input_valid) {
				if(user_input_valid) {
					alert('inside processForm()');
					return false;
				} else {	
					alert('something still is not valid');
					return false;
				}
			}
			window.onload = validateForm;