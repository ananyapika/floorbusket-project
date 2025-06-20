<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php_mailer/Exception.php';
require 'php_mailer/PHPMailer.php';
require 'php_mailer/SMTP.php';

$recipient_address = "tatkun@gmail.com "; // Replace with the actual recipient email

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'waytoadmissions21@gmail.com'; // Your SMTP email
        $mail->Password = 'lgle pkre mzzy sebw'; // Use App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->isHTML(true);

        // Get form type
        $mail_type = isset($_POST['mail_type']) ? trim($_POST['mail_type']) : '';

        if (!$mail_type) {
            echo json_encode(['status' => false, 'message' => 'Form type not provided.']);
            exit;
        }

        // Common Fields
        $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $phone = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_NUMBER_INT);
        $message = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);
        // $course = filter_var($_POST['course'] ?? '', FILTER_SANITIZE_STRING);

        // Validate common fields
        if (!$name || strlen($name) < 2) {
            throw new Exception("Name must be at least 2 characters.");
        }
        if (!$email) {
            throw new Exception("Valid email is required.");
        }
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            throw new Exception("Phone number must be between 10 and 15 digits.");
        }
        // if (!$course) {
        //     throw new Exception("Course selection is required.");
        // }

        // Additional Fields Based on Form Type
        $extra_fields = "";
        if ($mail_type === 'admission_form') {
            $dob = filter_var($_POST['dob'] ?? '', FILTER_SANITIZE_STRING);
            $gender = filter_var($_POST['gender'] ?? '', FILTER_SANITIZE_STRING);
            $qualification = filter_var($_POST['qualification'] ?? '', FILTER_SANITIZE_STRING);
            $address = filter_var($_POST['address'] ?? '', FILTER_SANITIZE_STRING);

            $extra_fields = "
                <p><strong>Date of Birth:</strong> $dob</p>
                <p><strong>Gender:</strong> $gender</p>
                <p><strong>Qualification:</strong> $qualification</p>
                <p><strong>Address:</strong> $address</p>";
        } elseif ($mail_type === 'enquiry_form') {
            $subject = filter_var($_POST['subject'] ?? '', FILTER_SANITIZE_STRING);
            $extra_fields = "<p><strong>Subject:</strong> $subject</p>";
        } elseif ($mail_type === 'career_form') {
            $position = filter_var($_POST['position'] ?? '', FILTER_SANITIZE_STRING);
            $resume = $_FILES['resume'] ?? null;

            $extra_fields = "<p><strong>Position Applied For:</strong> $position</p>";

            // Attach Resume (if uploaded)
            if ($resume && $resume['error'] === 0) {
                $mail->addAttachment($resume['tmp_name'], $resume['name']);
            }
        }

        // Define Email Subject
        $mail_subject = match ($mail_type) {
            'admission_form' => 'New Admission Form Submission',
            'enquiry_form'   => 'New Enquiry Form Submission',
            'career_form'    => 'New Career Application',
            default          => 'New Form Submission'
        };

        // Prepare Email Body
        $mail_body = "<h2>New Submission</h2>
                      <p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Phone:</strong> $phone</p>
                    //   <p><strong>Course:</strong> $course</p>
                      $extra_fields
                      <p><strong>Message:</strong> $message</p>";

        // Set Email Headers
        $mail->setFrom('no-reply@yourdomain.com', 'Admission Portal');
        $mail->addAddress($recipient_address);
        $mail->Subject = $mail_subject;
        $mail->Body = $mail_body;

        // Send email
        if ($mail->send()) {
            echo json_encode(['status' => true, 'message' => "Your message has been sent successfully!"]);
        } else {
            throw new Exception("Mail could not be sent.");
        }
    } catch (Exception $e) {
        echo json_encode(['status' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => false, 'message' => "Method not allowed"]);
}
