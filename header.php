<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stitch</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    </head>

    <body>

        <!--HEADER-->
        <nav class="navbar stitch-navbar">
            <div class="container-fluid">
                <a href="./index.php"><img src="assets/stitchw.png" class="align-text-left" id="stitch-logo"></a>
                <div class="aligh-text-right" style="margin-right: 168px;">
                    <lord-icon id="margin-right"
                        src="https://cdn.lordicon.com/msoeawqm.json"
                        trigger="hover"
                        colors="primary:#ffffff,secondary:#ba225c"
                        id="header-logos">
                    </lord-icon>
                    <a id="text-icons">
                        PT / € </a>
                    <a href="./404.php">
                        <lord-icon id="margin-right"
                        src="https://cdn.lordicon.com/rjzlnunf.json"
                        trigger="hover"
                        colors="primary:#ffffff,secondary:#ba225c"
                        id="header-logos">
                        </lord-icon>
                    </a>
                    <div class="dropdown">
                        <button class="btnlogin" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <lord-icon
                                id="margin-right"
                                src="https://cdn.lordicon.com/dxjqoygy.json"
                                trigger="hover"
                                colors="primary:#ffffff,secondary:#ba225c"
                                state="hover-looking-around"
                                style="width:32px;height:32px">
                            </lord-icon>
                        </button>
                        <ul class="dropdown-menu">
                            <?php //To appear as login in case it is
                                if (isset($_SESSION["useruid"])) {
                                echo "<li><a class='dropdown-item' href='profile.php'>Perfil</a></li>";
                                echo "<li><a class='dropdown-item' href='includes/logout.inc.php'>Logout</a></li>";
                                }
                                else {
                                echo "<li><a class='dropdown-item' href='login.php'>Login</a></li>";
                                echo "<li><a class='dropdown-item' href='signup.php'>Registo</a></li>";
                                }
                            ?>
                        </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <nav class="nav-pink navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav nav-pink">
                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">Jogos</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="row g-3">
                                        <div class="col-lg-3 col-6">
                                            <div class="dropdown-content col-megamenu">
                                                <h6><a href="./categories.php" class="title"> Categorias</a></h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/acao.svg" id="icon">
                                                        Ação</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/arcade.svg" id="icon">
                                                        Arcada</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/combate.svg" id="icon">
                                                        Combate</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/corrida.svg" id="icon">
                                                        Corrida</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/desporto.svg" id="icon">
                                                        Desporto</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/estrategia.svg" id="icon">
                                                        Estratégia</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/vr.svg" id="icon">
                                                        Simulação</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/terror.svg" id="icon">
                                                        Terror</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/mmo.svg" id="icon">
                                                        MMO</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/rpg.svg" id="icon">
                                                        RPG</a></li>
                                                    <li><a href="#">
                                                        <img src="./icons/pink-nav-icons/aventura.svg" id="icon">
                                                        Aventura</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6 ">
                                            <div class="dropdown-content col-megamenu">
                                                <h6 class="title">Plataformas</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Steam</a></li>
                                                    <li><a href="#">Xbox</a></li>
                                                    <li><a href="#">Playstation</a></li>
                                                    <li><a href="#">Nintendo</a></li>
                                                    <li><a href="#">Origin</a></li>
                                                    <li><a href="#">Ubisoft</a></li>
                                                    <li><a href="#">GOG</a></li>
                                                    <li><a href="#">Epic Games</a></li>
                                                    <li><a href="#">DLC's</a></li>
                                                    <li><a href="#">Outros Jogos</a></li>
                                                    <li><a href="#">Battle.net</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="dropdown-content col-megamenu">
                                                <h6 class="title">Pesquisar por Preço</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Abaixo de 5€</a></li>
                                                    <li><a href="#">Abaixo de 10€</a></li>
                                                    <li><a href="#">Abaixo de 15€</a></li>
                                                    <li><a href="#">Abaixo de 20€</a></li>
                                                    <li><a href="#">Abaixo de 30€</a></li>
                                                    <li><a href="#">Abaixo de 40€</a></li>
                                                    <li><a href="#">Abaixo de 50€</a></li>
                                                    <li><a href="#">Abaixo de 60€</a></li>
                                                    <li><a href="#">Abaixo de 70€</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="dropdown-content col-megamenu">
                                                <h6 class="title">Mais Populares</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">#1 Fifa 22</a></li>
                                                    <li><a href="#">#2 Elden Ring</a></li>
                                                    <li><a href="#">#3 F1 22</a></li>
                                                    <li><a href="#">#4 Forza</a></li>
                                                    <li><a href="#">#5 Fortnite</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </li>



                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">
                                    <img src="./icons/pc.svg" id="icon">PC</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="col-megamenu">
                                            <h6 class="title">Title Menu One</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">
                                    <img src="./icons/playstation.svg" id="icon"> Playstation</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="col-megamenu">
                                            <h6 class="title">Title Menu One</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">
                                    <img src="./icons/playstation.svg" id="icon"> Xbox</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="col-megamenu">
                                            <h6 class="title">Title Menu One</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">
                                    <img src="./icons/nintendo.svg" id="icon"> Nintendo</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="col-megamenu">
                                            <h6 class="title">Title Menu One</h6>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown has-megamenu">
                            <button data-bs-toggle="dropdown" class="dropbtn">DLC's</button>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="col-megamenu">
                                                <h6 class="title">Title Menu One</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                    <li><a href="#">Custom Menu</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>