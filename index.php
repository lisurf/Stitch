<?php
  include_once 'header.php';
  include_once 'includes/dbh.inc.php';
  include_once 'includes/functions.inc.php';
  $repeated_games = array();
  $repeated_games_query = "";
?>

<div class="container">
  <div style="margin-top:20px"></div>
    <div class="row justify-content-center" style="--bs-gutter-x: 0rem">
      <div class="col-md-5">
        <div><img src="./icons/frase.gif" style="width:472px; margin-top:40px; margin-bottom:61px"></img></div>
        <div class="row justify-content-center" style="--bs-gutter-x: 0rem">
          <div class="col-md-11 borderr">
            <a href="./404.php"><h3>Publicidade</h3></a>
          </div>
        </div>
      </div>
      <div class="col-md-7 index-text borderr">
          <a href="./highlights.php"><h2>Destaques</h2></a>
          <ul class="list-unstyled">
            <li class="list-inline-item" style="margin-bottom:25px"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
            <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
            <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
            <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
            <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
          </ul>
      </div>
    </div>
</div>

<div class="container">
  <h2>Mais Populares</h2>
  <div style="margin-top:20px"></div>
      <div class="row justify-content-center" style="--bs-gutter-x:0rem">
        <div class="col-md-12">
          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <ul class="list-inline" style="padding-left: 122px">
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                </ul>
              </div>
              <div class="carousel-item">
              <ul class="list-inline" style="padding-left: 122px">
              <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                  <li class="list-inline-item"><a href="./404.php"><?php listGamesSlide($conn, $repeated_games, $repeated_games_query); ?> </a></li>
                </ul>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
    </div>
  </div>
</div>

<div class="container">
  <div style="margin-top:20px"></div>
    <div class="row justify-content-center" style="--bs-gutter-x: 0rem">
      <div class="col-md-7 index-text borderr" style="margin-bottom:30px">
        <h2>Mais Vendidos</h2>
            <ul class="list-unstyled">
              <li class="list-inline-item" style="margin-bottom:25px"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
              <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
              <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
              <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
              <li class="list-inline-item"><a href="./404.php"> <?php listGames($conn, $repeated_games, $repeated_games_query); ?> </a></li>
            </ul>
      </div>
      <div class="col-md-5" style="display:grid; margin-bottom:30px">
        <h2>Categorias</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-4" style="text-align:center; display:grid; place-items:center">
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/acaoc.svg" id="icon-categories-index-w"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Ação</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/corridac.svg" id="icon-categories-index-w"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Corrida</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/fpsc.svg" id="icon-categories-index-w"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">FPS/TPS</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/mmoc.svg" id="icon-categories-index-h-plus"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">MMO</div>
                <a href="./404.php"><img data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/rpgc.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">RPG</div>
            </div>
            <div class="col-md-4" style="text-align:center; display:grid; place-items:center">
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/arcadec.svg" id="icon-categories-index-h-plus"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Arcade</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/desportoc.svg" id="icon-categories-index-w"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Desporto</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/hackslashc.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Hack & Slash</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/musicc.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Música</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/aventurac.svg" id="icon-categories-index-w-plus"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Aventura</div>
            </div>
            <div class="col-md-4" style="text-align:center; display:grid; place-items:center">
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/combatec.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Combate</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/estrategiac.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Estratégia</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/indiec.svg" id="icon-categories-index-h"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Indie</div>
                <a href="./404.php"><img data-placement="bottom" data-toggle="tooltip" title="Brevemente" src="icons/pink-nav-icons/puzzlec.svg" id="icon-categories-index-w"></a>
                <div style="width:100px; text-align:center; font-family: lemonMilkLight; font-size:13px">Puzzle</div>
                <a href="./categories.php" class="categoriasplus">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  include_once 'footer.php';
?>