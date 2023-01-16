<?php
  include_once 'header.php';
  include_once 'includes/dbh.inc.php';
  include_once 'includes/functions.inc.php';
  $repeated_games = array();
  $repeated_games_query = "";
?>


<div class="container">
  <div style="margin-top:20px"></div>
    <div class="row justify-content-center" style="--bs-gutter-x: 0rem; text-align:right; padding-right:150px">
    <div class="col-md-12" style="padding-bottom:15px; font-size:18px">Ordenar por<img src="icons/down-arrow.svg" style="width:20px; padding-left:5px"></img></div>
    </div>
    <div class="row justify-content-center" style="--bs-gutter-x: 0rem">
      <div class="col-md-2">
        <ul class="list-unstyled destaques-text">
          <li>
            <label for="disabledRange" class="form-label"><h5>Preço</h5></label>
            <input type="range" class="form-range" id="disabledRange" disabled style="max-width:170px">
          </li>
          <li>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" checked disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Jogos</label>
            </div>
            <div class="form-check" style="padding-bottom:25px;">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckCheckedDisabled" style="max-width:170px">DLC's</label>
            </div>
          </li>
          <li>
            <h5>Categorias</h5>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Ação</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckCheckedDisabled" style="max-width:170px">Arcade</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Combate</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckCheckedDisabled" style="max-width:170px">Corrida</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Desporto</label>
            </div>
            <div style="padding-bottom:25px; font-size:16px">Mostrar mais<img src="icons/down-arrow.svg" style="width:20px; padding-left:5px"></img></div>
          </li>
          <li>
            <h5>Categorias</h5>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Steam</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckCheckedDisabled" style="max-width:170px">Epic Games</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Origin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckCheckedDisabled" style="max-width:170px">Uplay</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled style="max-width:170px">
              <label class="form-check-label" for="flexCheckDisabled" style="max-width:170px">Windows Store</label>
            </div>
            <div style="padding-bottom:25px; font-size:16px">Mostrar mais<img src="icons/down-arrow.svg" style="width:20px; padding-left:5px"></img></div> 
          </li>
        </ul>

      </div>
      <div class="col-md-10 index-text">
        <ul class="list-unstyled">
          <?php listPage($conn, $repeated_games, $repeated_games_query); ?>
        </ul>
      </div>
    </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination pagination-sm justify-content-end" style="padding-right:430px">
    <li class="page-item"><a class="page-link" href="./highlights.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="./highlights.php">1</a></li>
    <li class="page-item"><a class="page-link" href="./highlights.php">2</a></li>
    <li class="page-item"><a class="page-link" href="./highlights.php">3</a></li>
    <li class="page-item"><a class="page-link" href="./highlights.php">Next</a></li>
  </ul>
</nav>

<?php
  include_once 'footer.php';
?>