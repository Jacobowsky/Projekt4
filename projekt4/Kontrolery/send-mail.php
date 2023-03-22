<?php
$name = $_GET['name'];
$gender = $_GET['gender'];
$email = $_GET['email'];

function getUserData($name, $gender, $email) {
    echo "Imię: " . $name;
    echo "<br>Płeć: " . $gender;
    echo "<br>Email: " . $email;
}

getUserData($name, $gender, $email)
?>