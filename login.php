<?php
    include_once 'header.php'
?>


    <section class="signup-form">
        <h1>Login</h1>
        <div class="container">
            <div class="row" style="margin-right:0; margin-left:0">
                <div class="col-md-6"  style="text-align:center; display:grid; place-items:center">
                    <form action="includes/login.inc.php" method="post" style="text-align:center">
                        <div class="form-group" style="margin-bottom:20px; text-align:center">
                            <input type="text" class="form-control" name="uid" placeholder="Username/Email...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password...">
                        </div>
                        <div style="font-size:12px; padding-bottom:5px; margin-left:135px">
                            <a href="#">Esqueceu-se da Palavra passe?</a>
                        </div>
                        <div class="form-group" style="position: relative">
                            <button type="submit" name="submit" class="btn1">Entrar</button>
                        </div>
                    </form>
                    <?php
                        // Error messages
                        if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p>Wrong login!</p>";
                        }
                        }
                    ?>
                    <div style="margin-top:28px; font-size:18px; padding-bottom:5px">
                    Entrar com:
                    </div>
                    <div style="padding-bottom:15px">
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/epicgameslogin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/facelogin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/googlelogin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/applelogin.svg" class="icon-login">
                        </a>
                    </div>
                    <div style="padding-bottom:30px; margin-left:20px">
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/steamlogin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/nintendologin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/xboxlogin.svg" class="icon-login">
                        </a>
                        <a href="./404.php">
                            <img data-placement="bottom" data-toggle="tooltip" title="Brevemente"
                            src="./icons/pslogin.svg" class="icon-login">
                        </a>
                    </div>
                </div>

                <div class="col-md-6" style="text-align:center">
                    <div style="font-size:18px; margin-top:60px">
                        <a>Ainda não tens conta?</a>
                    </div>
                    <div><a href="./signup.php"><button class="btn2">Registar</button></a></div>
                </div>
            </div>
        </div>
        <div style="margin-bottom:242px"></div>
    </section>


<?php
    include_once 'footer.php'
?>


    <!--Icons-->
    <script
    src="https://cdn.lordicon.com/xdjxvujz.js">
    </script>
    <script
    src="https://cdn.lordicon.com/xdjxvujz.js">
    </script>
    <script
    src="https://cdn.lordicon.com/xdjxvujz.js">
    </script>



    <!--Bootstrap-->
    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
        // For preventing closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
          element.addEventListener('click', function (e) {
            e.stopPropagation();
          });
        })
    });
    </script>

</html>