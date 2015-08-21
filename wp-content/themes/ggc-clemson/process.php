<?php

$name = $_POST['name'];
$email = $_POST['email'];
$persontype = $_POST['persontype'];

if (empty($name) || empty($email) || empty($persontype)) {
  exit();
}

$email_content = "
This person would like to be added to the mailing list:\n\n
Name: $name\n
Email: $email\n
Person Type: $persontype
";

mail(getenv('CONTACT_ALERT'), 'Newsletter Signup', $email_content);

header("Location: /donatemore-info/?thanks=true");
?>
