<?php
include_once('header.php');
?>
<div id="signup">
				<div class="container" id='in_signup'>
					<div class="section_header">
						<p></p>
						
					</div>
					<div id='signup_init' class="row-fluid span8 contact">
						<h3>Sign Up</h3>
						<p>
							We can't wait to start working for you. So do your self a favor and sign up!
						</p>
						<form id='signup_form' class='form' method='post' action=''>
							<div class="row form">
								<div class="span6">
									<input class="name" name='firstName' type="text" placeholder="First Name" required>
									<input class="name" name='lastName'type="text" placeholder="Last Name" required>
									<input class="mail" name='email1'type="text" placeholder="Email" required>
									<input class="mail" name='email2'type="text" placeholder="Confirm Email" required>
									<input class="password" name='password1' type="password" placeholder="Password" required>
									<input class='password' name='password2' type="password" placeholder="Confirm Password" required>
									<input class='brn btn-info left' type="submit" value='Sign Up'>
								</div>
							</div>
								

						</form>
					</div>
				</div>
			</div>
			<div id="co_info" class='row-fluid contact span8'>
				<!--  <div class="container" id='co_signup'>
					<div class="section_header">
						<h3>Company Info</h3>
					</div>
					<div id='signup_final' class="row contact">
						<div id='register_response'>	
						</div>	
						<form id='company_info' class='form' method='post' action=''>
							<div class="row form">
								<div class="span6">
									<input class="name" name='company_name' type="text" placeholder="Company Name" required>
									<input class="name" name='company_id'type="text" placeholder="EIN / SSN">
									<input class="mail" name='co_email'type="text" placeholder="Email">
									<!--  <input class="mail" name='email2'type="text" placeholder="Confirm Email" required>
									<input class="password" name='password1' type="password" placeholder="Password" required>
									<input class='password' name='password2' type="password" placeholder="Confirm Password" required>
									<br>
									<input class='btn btn-info' type="submit" value='Next'>
								</div>
							</div>
						</form>
					</div>
				</div>  -->
			</div>
			</body>
			</html>
				<script src='http://code.jquery.com/jquery-1.9.1.js'></script>
				<script src='http://code.jquery.com/ui/1.10.2/jquery-ui.js'></script>
				<script>
					$(document).ready(function(){
						$('#co_info').hide();
					});
				</script>
				<script>
					$("#signup_form").submit(function() {
							$('#signup').hide("slide", { direction: "right" }, 1000);
								
						// Intercept the form submission
						var formdata = $(this).serialize();
						// Serialize all form data
						// Post data to your PHP processing script
						$.post("reg-beta.php", formdata, function(data) {
							// Act upon the data returned, setting it to #success <div>
							//$("#instances").html ( data ).fadeIn("slow");
							$('#co_info').html(data).hide().show( "slide",{ direction: "left" },2000);
						});

						return false;
						// Prevent the form from actually submitting
					});
				</script>