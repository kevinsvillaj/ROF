



<!DOCTYPE html>
<html>
<head>
	<title>ROOM ON FIRE</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			
		}

		header {
			background-color: #FF5733;
			padding: 14px;
			font-family: "Old English Text MT";
			text-align: center;
			color: white;
			font-size: 80px;
			font-weight: bold;
		
		}
		h1 {
			font-family: "Old English Text MT";
			text-align: center;
    		font-size: 70px;
   			font-weight: bold;
   			margin-top: 20px;
    		margin-bottom: 10px;
  		}
		  h2 {
			font-family: 'Times New Roman', Times, serif;
			text-align: center;
    		font-size: 20px;
   			font-weight: normal;
   			margin-top: 20px;
    		margin-bottom: 10px;
			margin-left: 145px;
			margin-right: 145px;
		
  		}
		  h3 {
			font-family: 'Times New Roman', Times, serif;
			text-align: center;
    		font-size: 15px;
   			font-weight: normal;
   			margin-top: 20px;
    		margin-bottom: 10px;
			color: gray;
  		}
		  h4 {
			font-family: 'Times New Roman', Times, serif;
			text-align: center;
    		font-size: 15px;
   			font-weight: normal;
   			margin-top: 5px;
    		margin-bottom: 10px;
			color: gray;
			margin-left: 145px;
			margin-right: 145px;
  		}
		P{
			font-family: 'Times New Roman', Times, serif;
			text-align: LEFT;
    		font-size: 21px;
   			font-weight: normal;
   			margin-top: 20px;
    		margin-bottom: 10px;
			margin-left: 170px;
			margin-right: 150px;
			line-height: 1.5;
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
		img {
     		width: 80%; /* Adjust the percentage value to change the size */
     		height: auto;
     		display: block;
      		margin: 0 auto;
    	}


		h5{
  			background: linear-gradient(to bottom, #FF5733 0%, #FF5733 100%);
  			min-height: 75vh;
		}



	</style>
</head>
<body>
	<header>ROOM ON FIRE</header>
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
          <form action='logout.php' method='post' style='float: right;'>
            <input type='submit' value='Log out &#9211;' style='background-color: transparent; color: white; padding: 0px; margin: 0px; border: none; cursor: pointer;'>
          </form>
        </div>";


?>
	<nav>
		<button onclick="window.location.href='pages/art.php'">Art</button>
		<button onclick="window.location.href='pages/music.php'">Music</button>
		<button onclick="window.location.href='pages/cinema.php'">Cinema</button>
		<button onclick="window.location.href='pages/fashion.php'">Fashion</button>
	</nav>
	<br>
	<div>	
		<hr color="rgray" size=".8" width="87%">
		<h1>Welcome to New York Citys Best Magazine</h1>
		<h2>NYC is home of Various types of art form, whether it be in cinema music fashion 
or in the visual arts. The city has been a global center of artistic creativity for decades, attracting artists, musicians, and designers from all over the world. From the Broadway theaters in Times Square to the galleries in Chelsea, there is always something new and exciting to discover in the city's vibrant arts scene.</h2>
		<br>
		<hr color="rgray" size=".8" width="87%">
		<h3 style="white-space: pre;">BY GROUP 6                                                                                                                                                                                                                                                                                   MAY 7, 2023</h3>

		<div style="display: flex; justify-content: center;">
		<img src="https://scontent-iad3-1.xx.fbcdn.net/v/t39.30808-6/345576987_3434170243497466_7085515692032727965_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=yES_2MoL7kEAX_DO-am&_nc_ht=scontent-iad3-1.xx&oh=00_AfCoIQhuTCdYkwnxOrkxV0uiUbDwZdoZoYfmvVGHs7lZDg&oe=6465F281" alt="The Strokes">
		</div>
		<h4> Photo montage of people or projects that have a connection to NYC and its legacy. (Kate Moss 1992)(King Kong 1933)(Catfish And The Bottlemen 2015)(Manhattan Film 1979)(The Strokes 2001).</h4>
		<br><hr color="rgray" size=".8" width="87%"><br>
		<p> Here at ROF, we believe that New York City is home to the greatest artists and art enthusiasts, from all around the world. Whether it be in cinema, music, fashion, or any other art form, New York City has always been at the forefront of creativity and innovation. Even if this city does not have a direct connection to your life, it has undoubtedly had an impact on the art and culture you consume. <br><br>
		Moreover, NYC has been the epicenter of many cultural movements, including the revival of rock in the early 2000s. Bands like The Strokes, Yeah Yeah Yeahs, and Interpol burst onto the scene with their unique sounds that quickly gained popularity worldwide. NYC's fashion scene has also had a significant impact on the world, with designers like Calvin Klein, Ralph Lauren, and Donna Karan starting their fashion empires in the city. Art has always been an integral part of the city's culture, with iconic museums like the Metropolitan Museum of Art and the Museum of Modern Art showcasing some of the world's most famous artworks. The city's street art scene has also gained recognition, with graffiti artists like Jean-Michel Basquiat and Keith Haring leaving their mark on the city's walls.<br><br> 
		It is essential to document the ever-evolving cultural landscape of NYC. As a magazine, we strive to showcase the city's rich history and culture while also highlighting the emerging talents and movements that shape its future. Through our articles, interviews, and photo features, we aim to provide a platform for artists, musicians, and creatives who call this city home. Join us as we explore the vibrant and dynamic world of NYC culture.
		<br><br><hr color="rgray" size=".8" width="87%"><br><br>
		</p>
	</div>
	<br><br><br><br><br><br><br>
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








