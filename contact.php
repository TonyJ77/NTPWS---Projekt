<?php 
	print '
	<h1>Contact Form</h1>
	<div id="kontaktForma">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.5132299395469!2d15.968871358450473!3d45.795324610293214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b441ce2df%3A0x54e2a03adf42446f!2sZagreb%20University%20of%20Applied%20Sciences!5e0!3m2!1sen!2shr!4v1635408834578!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
        
        <form action="send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>';
?>