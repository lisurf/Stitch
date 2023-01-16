<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h1>Registo</h1>
    <div class="signup-form-form container">
      <div class="row" style="margin-right:0; margin-left:0">
        <div class="col-md-6" style="text-align:center; display:grid; place-items:center">
          <form class="form-group" action="includes/signup.inc.php" method="post" style="text-align:center">
            <div class="form-group" style="margin-bottom:20px; text-align:center">
              <input type="text" class="form-control" name="name" placeholder="Nome*">
            </div>
            <div class="form-group" style="margin-bottom:20px; text-align:center">
              <input type="text" class="form-control" name="email" placeholder="Email*">
            </div>
            <div class="form-group"  style="margin-bottom:20px; text-align:center">
                <input type="password" class="form-control" name="pwd" placeholder="Password*">
            </div>
            <div class="form-check"  style="margin-bottom:20px; text-align:center">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">
                <label class="form-check-label" for="gridCheck1">
                  Li e aceito os Termos e Condições e confirmo que tenho mais de XX anos de idade*
                </label>
            </div>
        </div>
        <div class="col-md-6" style="text-align:center; display:grid; place-items:center">
            <div class="form-group"  style="margin-bottom:20px; text-align:center">
              <input type="text" class="form-control" name="uid" placeholder="User*">
            </div>
            <div class="form-group"  style="margin-bottom:20px; text-align:center">
              <input type="date" class="form-control" id="birthday" name="Data de nascimento">
            </div>
            <div class="form-group"  style="margin-bottom:20px; text-align:center">
              <input type="password" class="form-control" name="pwdrepeat" placeholder="Repeat password...">
            </div>
            <div class="form-group" style="position: relative">
               <button type="submit" class="btn1" name="submit">Registar</button>
            </div>
          </form>
        </div>

      <div class="row" style="margin-right:0; margin-left:0; font-size:18px; margin-top:60px; text-align:center">
        <div class="col-12">
          <a>Já tens conta?</a>
            <div><a href="./login.php"><button class="btn2">Entrar</button></a></div>
        </div>
      </div>
    </div>


  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Campo(s) de preenchimento obrigatório em falta!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Username inválido!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Email inválido!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords não combinam!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Algo correu mal!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username indisponível!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<div class='alert alert-success d-flex align-items-center' role='alert' style='width:350px'><lord-icon src='https://cdn.lordicon.com/hrqqslfe.json'
        trigger='hover' colors='primary:#000000,secondary:#ffffff' style='width:30px;height:30px'></lord-icon>Conta criada com sucesso!</div>";
        }
      }
  ?>
</section>

<div style="margin-bottom:236px"></div>

<?php
  include_once 'footer.php';
?>