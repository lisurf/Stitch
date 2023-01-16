<?php

// Checking for empty input signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) {
	$result;
	if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Checking for invalid username
function invalidUid($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Checking for invalid email
function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Checking if passwords matches
function pwdMatch($pwd, $pwdrepeat) {
	$result;
	if ($pwd !== $pwdrepeat) {
		$result = false;
	}
	else {
		$result = true;
	}
	return $result;
}

// Checking if username is in database, if so return data
function uidExists($conn, $username) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $username);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

// Inserting new user into database
function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

// Checking for empty input login
function emptyInputLogin($username, $pwd) {
	$result;
	if (empty($username) || empty($pwd)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Login user into website
function loginUser($conn, $username, $pwd) {
	$uidExists = uidExists($conn, $username);

	if ($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../index.php?error=none");
		exit();
	}
}

//Listing games without repetition
function listGames($conn, $repeated_games, $repeated_games_query){
	global $conn;
	global $repeated_games;
	global $repeated_games_query;
	if(strlen($repeated_games_query) === 0)
		$sql_games = "SELECT * FROM games ORDER BY RAND() LIMIT 1;";
	else
		$sql_games = "SELECT * FROM games WHERE idgame NOT IN ($repeated_games_query) ORDER BY RAND() LIMIT 1;";

	$result_games = mysqli_query($conn, $sql_games);
	$resultCheck_games = mysqli_num_rows($result_games);

	if ($resultCheck_games > 0) {
		while ($row = mysqli_fetch_assoc($result_games)) {
			$game_id = $row['idgame'];
			array_push($repeated_games, $row['idgame']);
			$sql_games_store = "SELECT price FROM game_has_store WHERE game_idgames = $game_id;";
			$result_games_store = mysqli_query($conn, $sql_games_store);
			$price = $result_games_store->fetch_row()
	?>
		<img class="img" src="./images/<?php echo $row['image']; ?>">
		<div class="gamenames"><?php echo $row['name']; ?></div>
		<div style="width:180px; text-align:right; padding-right:15px">
			<?php
			if($price == null)
				echo "Não disponivel";
			else
				echo "$price[0] €";
			?>
		</div>
	<?php
		}
		$repeated_games_query = join(", ", $repeated_games);
	}
}

//Listing games images without repetition SLIDE
function listGamesSlide($conn, $repeated_games, $repeated_games_query){
	global $conn;
	global $repeated_games;
	global $repeated_games_query;
	if(strlen($repeated_games_query) === 0)
		$sql_games = "SELECT * FROM games ORDER BY RAND() LIMIT 1;";
	else
		$sql_games = "SELECT * FROM games WHERE idgame NOT IN ($repeated_games_query) ORDER BY RAND() LIMIT 1;";

	$result_games = mysqli_query($conn, $sql_games);
	$resultCheck_games = mysqli_num_rows($result_games);

	if ($resultCheck_games > 0) {
		while ($row = mysqli_fetch_assoc($result_games)) {
			$game_id = $row['idgame'];
			array_push($repeated_games, $row['idgame']);
			$sql_games_store = "SELECT price FROM game_has_store WHERE game_idgames = $game_id;";
			$result_games_store = mysqli_query($conn, $sql_games_store);
			$price = $result_games_store->fetch_row()
	?>
		<img class="imgslide" src="./images/<?php echo $row['image']; ?>">
	<?php
		}
		$repeated_games_query = join(", ", $repeated_games);
	}
}


//Listing games without repetition (full page)
function listPage($conn, $repeated_games, $repeated_games_query){
	global $conn;
	global $repeated_games;
	global $repeated_games_query;
	if(strlen($repeated_games_query) === 0)
		$sql_games = "SELECT * FROM games ORDER BY RAND() LIMIT 36;";
	else
		$sql_games = "SELECT * FROM games WHERE idgame NOT IN ($repeated_games_query) ORDER BY RAND() LIMIT 36;";

	$result_games = mysqli_query($conn, $sql_games);
	$resultCheck_games = mysqli_num_rows($result_games);

	if ($resultCheck_games > 0) {
		while ($row = mysqli_fetch_assoc($result_games)) {
			$game_id = $row['idgame'];
			array_push($repeated_games, $row['idgame']);
			$sql_games_store = "SELECT price FROM game_has_store WHERE game_idgames = $game_id;";
			$result_games_store = mysqli_query($conn, $sql_games_store);
			$price = $result_games_store->fetch_row()
	?>
		<li class="list-inline-item" style="margin-bottom:15px">
			<a href="./404.php">
				<img class="imgpage" src="./images/<?php echo $row['image']; ?>">
				<div class="gamenamespage textbox"><?php echo $row['name']; ?></div>
				<div class="textbox" style="text-align:right; padding-right:5px">
					<?php
					if($price == null)
						echo "Não disponivel";
					else
						echo "$price[0] €";
					?>
				</div>
			</a>
		</li>
	<?php
		}
		$repeated_games_query = join(", ", $repeated_games);
	}
}