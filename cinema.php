<!DOCTYPE html>
<html>
<head>
	<title>Room On Fire</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			color: #333;
		}

		header {
			background-color: #FF5733;
			padding: 0px;
			font-family: "Old English Text MT";
			text-align: center;
			color: white;
			font-size: 80px;
			font-weight: bold;
            margin: 0;
			
		}

		nav {
			background-color: #333;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 20px;
		}

		nav button {
			color: white;
			text-align: center;
			padding: 10px 16px;
			text-decoration: none;
			font-size: 17px;
			border: none;
			outline: none;
			cursor: pointer;
			background-color: inherit;
		}

		nav button:hover {
			background-color: #ddd;
			color: black;
		}
        h1 {
			margin-top: 40px;
			margin-bottom: 20px;
			font-size: 40px;
			font-weight: bold;
			color: #333;
		}
		h2 {
			margin-top: 40px;
			margin-bottom: 20px;
			font-size: 25px;
			font-weight: bold;
			color: #333;
		}

		p {
            margin-left: 90px ;
            margin-right: 90px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #666;
		}

		img {
			max-width: 100%;
			height: auto;
		}

		.article {
			margin-bottom: 40px;
		}
		h5{
  			background: linear-gradient(to bottom, #FF5733 0%, #FF5733 100%);
  			min-height: 75vh;
		}
	</style>
</head>
<body>
	<header>
		<a href="/rof.php" style="color: white; text-decoration: none;">ROOM ON FIRE</a>
	</header>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page
    header('Location: login.php');
    exit();
}

echo "<div style='background-color: #FF5733; color: white; font-size: 12px;padding: 20px; border-radius: 0px; text-align: left;'>
          <span style='float: left;'>Welcome, " . $_SESSION['first_name'] . " Your user ID is: " . $_SESSION['user_id'] . "</span>
          <form action='/logout.php' method='post' style='float: right;'>
            <input type='submit' value='Log out &#9211;' style='background-color: transparent; color: white; padding: 0px; margin: 0px; border: none; cursor: pointer;'>
          </form>
        </div>";


?>

	<nav>
		<button onclick="window.location.href='art.php'">Art</button>
		<button onclick="window.location.href='music.php'">Music</button>
		<button onclick="window.location.href='cinema.php'">Cinema</button>
		<button onclick="window.location.href='fashion.php'">Fashion</button>
	</nav>

	<main>
		<h1 style="text-align: center;">Cinema</h1>
	

	<?php

echo "<br>";
// Connect to the database
$db_host = "localhost";
$db_name = "articles";
$db_user = "root";
$db_pass = "";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the articles from the database
$sql = "SELECT * FROM cinema_artcl ORDER BY article_id DESC";
$result = mysqli_query($conn, $sql);

// Display the buttons for the articles
$num_articles = mysqli_num_rows($result);
$page_size = 6;
$num_pages = ceil($num_articles / $page_size);

if (isset($_GET['page'])) {
    $current_page = intval($_GET['page']);
} else {
    $current_page = 1;
}

$start_index = ($current_page - 1) * $page_size;

$sql = "SELECT * FROM cinema_artcl ORDER BY article_id DESC LIMIT {$start_index}, {$page_size}";
$result = mysqli_query($conn, $sql);

echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px; margin: 40px;'>";

while ($row = mysqli_fetch_assoc($result)) {
echo "<button style='border: line; background-color: white; cursor: pointer;font-size: 18px; font-family: Palatino; display: flex; flex-direction: column; align-items: center;' onclick=\"window.location.href='{$row['address']}'\">";
echo "<h3 style='font-size: 25px; margin: 5px 0;'>{$row['title']}</h3>";
echo "<img src='{$row['picture']}' alt='{$row['title']}' style='max-width: 80%; height: auto; margin-bottom: 0px; margin-top: 6px;'><br>";
echo substr($row['peek'], 0, 150);
if (strlen($row['peek']) > 155) {
    echo "...";
}
echo "<br>";
echo "<br><span style='font-size: 12px;'>By: {$row['author']}</span>";
echo "</button>";
}

echo "</div>";

// Display pagination links
if ($num_pages > 1) {
    echo "<br><br>";
    for ($i = 1; $i <= $num_pages; $i++) {
        if ($i == $current_page) {
            echo "<strong>{$i}</strong> ";
        } else {
            echo "<a href='cinema.php?page={$i}'>{$i}</a> ";
        }
    }
}

// Close the database connection
mysqli_close($conn);

?>
</body>
</html>

<h5>


<div style="background-color: #333; height: 58px; position: relative;">
  
</div>

<div style="background-color: #FF5733; padding: 20px;">
	
  <div style="text-align: center;">
    <a href="terms.php"><button style="background-color: transparent; border: none; color: white; font-size: 16px;">Terms and Conditions</button></a>
    <br><br>
    <a href="credits.php"><button style="background-color: transparent; border: none; color: white; font-size: 16px;">Credits</button></a>
    <br><br>
    <div class="dropdown" style="position: relative; display: inline-block;">
      <button onclick="toggleDropdown()" style="background-color: transparent; border: none; color: white; font-size: 16px;">Socials &#x25BE;</button>
      <div id="dropdown-menu" class="dropdown-menu" style="position: absolute; top: 100%; left: 50%; transform: translate(-50%, 0); z-index: 1; display: none;">
        <a href="https://www.instagram.com/"><button style="background-color: transparent; border: none; color: white; font-size: 16px;">Instagram</button></a>
        <br>
        <a href="https://twitter.com/"><button style="background-color: transparent; border: none; color: white; font-size: 16px;">Twitter</button></a>
        <br>
        <a href="https://www.facebook.com/"><button style="background-color: transparent; border: none; color: white; font-size: 16px;">Facebook</button></a>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleDropdown() {
    var dropdown = document.getElementById("dropdown-menu");
    if (dropdown.style.display === "none") {
      dropdown.style.display = "block";
    } else {
      dropdown.style.display = "none";
    }
  }
</script>

</style>



<br><br><br>
</h5>
