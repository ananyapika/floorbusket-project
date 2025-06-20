<section class="apply">
    <div class="container">
	<header class="header_apply">
		<h3 id="title" class="text-center">Application Form For B.Sc & G.N.M Nursing 2024-2025</h3>
		
	</header>
	<div class="form-wrap">	
		<form id="survey-form" action="" method="post" >
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="address">Address</label>
						<input type="text" name="address" id="address" placeholder="Enter your address with pincode" class="form-control" required>
					</div>
				</div>
			</div>
			
            <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Enter your Email Id" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="city">City</label>
						<input type="text" name="city" id="city" placeholder="Enter your City Name" class="form-control" required>
					</div>
				</div>
			</div>

				<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="phone">Phone No</label>
						<input type="phone" name="phone" id="phone" placeholder="Enter your 10 digit Phone no" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="district">District</label>
						<input type="text" name="district" id="district" placeholder="Enter your District Name" class="form-control" required>
					</div>
				</div>
			</div>


            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                      <select class="form-control" name="degree" id="degree">
                          <option value="" selected disabled>Select Highest Qualification*</option>
                          <option value="course1">High School (10th Grade)</option>
                          <option value="course2">Intermediate (12th Grade)</option>
                          <option value="course3">Bachelor's Degree (UG)</option>
                          <!-- Add more courses as needed -->
                      </select>
                  </div>
                  
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                      <select class="form-control" name="course" id="course">
                          <option value="" selected disabled>Select your prefered course*</option>
                          <option value="course1">GNM</option>
                          <option value="course2">BSC</option>
                         
                          <!-- Add more courses as needed -->
                      </select>
                  </div>
</div>
			</div>
			
            <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label id="name-label" for="phone">Subject</label>
						<input type="text" name="subject" id="subject" placeholder="Enter your method subject(if any)" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label id="email-label" for="district">visit date</label>
						<input type="text" name="visit" id="visit" placeholder="In which date you want to visit the college(DD-MM-YY)" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<button type="submit" id="send" name="send" value="send" class="btn btn-primary btn-block">Submit</button>
				</div>
			</div>

		</form>
	</div>	
</div>

</section>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $district = $_POST['district'];
    $degree = $_POST['degree'];
    $course = $_POST['course'];
    $subject = $_POST['subject'];
    $visit = $_POST['visit'];

    // Load Composer's autoloader
    require 'php_mailer/Exception.php';
    require 'php_mailer/PHPMailer.php';
    require 'php_mailer/SMTP.php';

    // Create an instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'waytoadmissions21@gmail.com'; // Your Gmail username
        $mail->Password   = 'lgle pkre mzzy sebw'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('waytoadmissions21@gmail.com', 'Contact Form');
        $mail->addAddress('gitanjali.nursing@gmail.com

		', 'gitanjali'); // Recipient's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Query';
        $mail->Body    = 'Name: ' . $name . '<br>' .
                         'Address: ' . $address . '<br>' .
                         'Email: ' . $email . '<br>' .
                         'City: ' . $city . '<br>' .
                         'Phone: ' . $phone . '<br>' .
                         'District: ' . $district . '<br>' .
                         'Degree: ' . $degree . '<br>' .
                         'Course: ' . $course . '<br>' .
                         'Subject: ' . $subject . '<br>' .
                         'Visit Date: ' . $visit;

        // Send email
        $mail->send();
        echo "<div class='success'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>