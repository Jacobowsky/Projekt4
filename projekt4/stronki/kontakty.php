<form action="Kontrolery/send-mail.php" method="post">  
        <div>
            <label class="name-label">Podaj swoję imię:</label><br>
            <li><input id="name-input" type="text" name="name"></li>
        </div>
      <span id="bottom-text">Wybierz swoją płeć:</span> <br><br>
      Możesz zaznaczyć jedną lub obie opcje:
      <br><br><br> 
          <input type="checkbox" name="gender" value="Kobieta"><span id="gender-output">Kobieta</span>
          <input type="checkbox" name="gender" value="Mężczyzna"><span id="gender-output">Mężczyzna</span>
    <br><br>
          <div class="input-wrapper">
            <label class="mail-label" for="mail-input"><span id=email-task>e-mail:</span></label>
              <input id="mail-input" type="text" name="email">
          </div>
            <br><br>
          <input type="submit" name="submit" value="Zapisz się">  
</form>
