<html>
    <head>
    <link rel="stylesheet" href="Design/mail.css">
</head>

<?php
$form = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "gender" => $_POST["gender"]
]
?>
<?php
$name = $form["name"];
$email = $form["email"];
$gender = $form["gender"];

if (empty($_POST["name"])) {  
    $errMsg = "Nie wpisałeś/aś swojeg imienia.<br>";  
             echo $errMsg;  
} else {  
    $name = $_POST["name"]; 
    echo "Dzień dobry " .$name ."<br>"; 
}

$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Twój email jest nie prawidłowy.<br>";  
            echo $ErrMsg;  
} else {  
    echo "Twój email to: " .$email ."<br";  
}

if (empty($_POST["gender"])) {
    $ERrMsg = "Nie dokonałęś wyboru płci.<br>";
        echo $ERrMsg;
} else {
    echo "Twoja płeć to:" .$gender ."<br>";
}

if (isset($name) && isset($email) && isset($gender)) {
    
    $to = $email;
    $subject = "Potwierdzenie rejestracji";
    $message = "Dziękujemy za rejestracje! Twoje dane to: Imię: $name, Płeć: $gender, Email: $email";
    $headers = "From: admin@example.com";
        
    mail($to, $subject, $message, $headers);
}
 ?>

