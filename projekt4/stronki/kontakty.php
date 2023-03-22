<form action="Kontrolery/send-mail.php"method="post">  
        <div>
            <label class="name-label">Podaj swoję imię:</label>
            <input type="text" name="name">
        </div>
      <span id="bottom-text">Wybierz swoją płeć:</span> <br><br>
      Możesz zaznaczyć jedną lub obie opcje:
      <br><br><br> 
          <input type="checkbox" name="gender" value="female"><span id="gender">Kobieta</span>
          <input type="checkbox" name="gender" value="male"><span id="gender">Mężczyzna</span>
    <br><br>
          <div class="input-wrapper">
            <label class="mail-label" for="mail-input">e-mail:</label>
            <input id="mail-input" type="text" name="email">
          </div>
            <br><br>

            

          <input type="submit" name="submit" value="Zapisz się">  
</form>

<?php
if(isset($_POST['submit'])) {
    
}
?>