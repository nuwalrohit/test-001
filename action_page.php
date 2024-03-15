<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
	$Contact = $_POST["contact"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Email setup
    $to = "nuwalrohit14@gmail.com"; // Replace with your email address
    $subject = "Feedback Form Submission";

    // Compose email message
    $message = "Name: $name\n";
	$message = "Contact NO: $Contact\n";
    $message .= "Email: $email\n";
    $message .= "feedback:\n$feedback";

    // Send email
    mail($to, $subject, $message);

    // Redirect after submission (optional)
    header("Location: thank-you.html"); // Replace with your thank-you page
    exit();
}
?>
