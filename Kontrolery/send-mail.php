    <link rel="stylesheet" href="Design/mail.css">   
<?php
$form = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "gender" => $_POST["gender"],
]
?>
<?php
$name = $form["name"];
$email = $form["email"];
$gender = $form["gender"];

if (empty($_POST["name"])) {  
    $errMsg = "Nie wpisałeś/aś swojeg imienia.<br>";  
        echo $errMsg;  
             return false;
} else {  
    $name = $_POST["name"]; 
    echo "Dzień dobry " .$name ."<br>"; 
}

$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Twój email jest nie prawidłowy.<br>";  
            echo $ErrMsg;  
                return false;
} else {  
    echo "Twój email to: " .$email ."<br>";  
} 

if (empty($_POST["gender"])) {
    $ERrMsg = "Nie dokonałeś/aś wyboru płci.<br>";
        echo $ERrMsg;
            return false;
} else {
    echo "Twoja płeć to:" .$gender ."<br>";
}
?>

<?php
if (isset($gender) && $gender == 'Mężczyzna' && 'Kobieta') {
        echo "Twoja płeć to Inna!" ."<br>";
}
?>

<?php
if (isset($name) && isset($email) && isset($gender) && in_array($gender, ['Mężczyzna', 'Kobieta'])) {
    
    $to = $email;
    $subject = "Potwierdzenie rejestracji";
    $message = "Dziękujemy za rejestracje! 
     Twoje dane to: Imię: $name,
     Płeć: $gender, 
     Email: $email";
    $headers = "From: admin@example.com";

    mail($to, $subject, $message, $headers);
}
 ?>