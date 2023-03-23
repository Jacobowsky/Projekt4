<html>
  <head>
    <title>Strona ładująca</title>
    <link rel="stylesheet" href="Design/news.css">
    <link href="https://fonts.google.com/share?selection.family=League%20Spartan" rel="stylesheet">
  </head>
  <body>
        <h1>Zgarnij 15% zniżki na nową kolekcję!</h1>
        <h4>Zapisz się do newslettera, aby otrzymać kupon zniżkowy i być na bieżąco z nowościami w naszym sklepie.</h4>
  <form method="post">  
      <span id="bottom-text">Wybierz interesujący cię dział:</span> <br><br>
      Możesz zaznaczyć jedną lub obie opcje:
      <br><br><br> 
          <input type="checkbox" name="gender" value="female"><span id="gender">Kobieta</span>
          <input type="checkbox" name="gender" value="male"><span id="gender">Mężczyzna</span>
    <br><br>
          <div class="input-wrapper">
            <label class="newsletter-mail-label" for="mail-input">e-mail:</label>
            <input id="mail-input" type="text" name="email">
          </div>
            <br><br>

          <input type="submit" name="submit" value="Zapisuje się">  
</form>


<?php
$form = [
  "email" => $_POST["email"],
  "gender" => $_POST["gender"],
]
?>

<?php
echo "<h2>Dane:</h2><br>";
print_r($form);
?>
  </body>
</html>