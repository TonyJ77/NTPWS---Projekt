<?php 
	print '
    <style>
    input[type=text], input[type=email], input[type=password], input[type=file], select, textarea {
        width: 50%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        font-size: 95%;
    }
    
    input[type=submit] {
        display: block;
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 25%;
    }
    
    input[type=submit]:hover {
        background-color: #45a049;
    }
    
    </style>
	<h1>Registration Form</h1>
	<div id="register">';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<form action="" id="registration_form" name="registration_form" style="display: grid; margin:0 auto;"  method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE" style="width: fit-content; margin:0 auto;">
			
			<label for="fname">First Name *</label>
			<input id="ja" type="text" id="fname" name="firstname" placeholder="Your name.." required style="width: fit-content;>
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last last name.." required style="width: fit-content;>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required style="width: fit-content;>
			
			<label for="username">Username:* <small>(Username must have min 5 and max 10 char)</small></label>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Username.." required style="width: fit-content;><br>
			
									
			<label for="password">Password:* <small>(Password must have min 4 char)</small></label>
			<input type="password" id="password" name="password" placeholder="Password.." pattern=".{4,}" required style="width: fit-content;>
			<label for="country">Country:</label>
			<select name="country" id="country" style="width: fit-content;>
				<option value="">Choose your country</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email, username, password, country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for registration </p>
			<hr>';
		}
		else {
			echo '<p>User with this email or username already exist!</p>';
		}
	}
	print '
	</div>';
?>