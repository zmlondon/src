<?php
$title = "information";
include 'header.php';
?>
<?php

$name = $_POST["name"];
$email = $_POST["email"];

echo "Hello " . $name . "<br>Your eamil id is: " . $email;

?>

<?php
include 'footer.php';
?>