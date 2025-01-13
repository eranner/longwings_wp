<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

if(!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['token']){

    echo $_SESSION['token'].'<br>';
    echo $_POST['csrf_token'];
    http_response_code(403); // Forbidden
    die('Invalid CSRF token. Submission rejected.');
}

if(!empty($_POST['work_phone'])){
    http_response_code(403); // Forbidden
    die('Invalid CSRF token. Submission rejected.');
}

unset($_SESSION['token']); // Invalidate the token after use



// name
// email
// address
// city
// state
// zip
// phone

$name = sanitize_text_field($_POST['name']);
$email = sanitize_text_field($_POST['email']);
$address = sanitize_text_field($_POST['address']);
$city = sanitize_text_field($_POST['city']);
$state = sanitize_text_field($_POST['state']);
$zip = sanitize_text_field($_POST['zip']);
$phone = sanitize_text_field($_POST['phone']);

$to = ['eranner@gmail.com', 'info@longwingsacademy.org'];
// $to = ['eranner@gmail.com'];
$subject = "Longwings Academy Inquiry";
$message = "
<html>
<body>
<h3>Contacted By:</h3>
<p>$name</p>
<h3>Contact Email:</h3>
<p>$email</p>
<h3>Address:</h3>
<p>$address \n $city, $state $zip</p>
<h3>Phone:</h3>
<p>$phone</p>


</body>
</html>";
$headers = ['Content-Type: text/html; charset=UTF-8', 'From: <info@longwingsacademy.org>'];

$mail_sent = wp_mail($to, $subject, $message, $headers);

if (!$mail_sent) {
    die('Error: Unable to send email. Please try again later.');
}

get_header();
require('navbar.php');
require('small-hero.php');
?>

<div class="container" style="display: flex; flex-direction: column; align-items: center; text-align:center;">
    <h3>Thanks for your inquiry! A member of our team will be in touch shortly.</h3>
    <p>Click <a href="<?php echo site_url();?>">here</a> if you are not redirected within a few moments.</p>
</div>

<script>
    setTimeout(()=> {
        location.assign('<?php echo site_url();?>');
    }, 3000)
</script>