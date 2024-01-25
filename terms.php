



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
        <h1> Terms And Conditions</h1>
		<br><hr color="rgray" size=".8" width="87%"><br>
		<p> 
Welcome to Room on Fire. These Terms and Conditions of Use govern your use of our website, including all content, functionality, and services offered on or through our website. If you disagree you any of the writing please be sure to write a comment telling us how you feel.

By using our website, you agree to these Terms and Conditions of Use. If you do not agree to these terms, you should not use our website because we as New Yorkers will always let our opinions be known.

1. Content
All content on our website, including but not limited to text, graphics, images, videos, and audio, is owned by us or our content providers and is protected by copyright law. So don't go saying we put you on front street.

You may access and view content from our website for personal, non-commercial use only. You may not modify, reproduce, distribute, publish, or create derivative works from any content on our website without our prior written consent.

2. User Content
You may submit content, including comments and feedback, to our website. By submitting user content, you grant us a non-exclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute,
and display such content throughout the world in any media. So in summary we OWN YOUR COMMENT. MUA HAHA. I promise to use your comment wisely.

You agree not to submit user content that:

* is false, misleading, or inaccurate but if you say chest we will respect you;
* infringes on the intellectual property rights of others;
* is defamatory, obscene, or offensive unless it's funny;
* violates any law or regulation, will we keep it on the low tho;
* promotes illegal activities unless you the plug hmu then;
* contains viruses, malware, or other harmful code, we know hackers that will mess you up;
We reserve the right to remove any user content at any time for any reason. So make sure your comments are follow these rules.

3. Website Use
You may use our website only for lawful purposes and in accordance with these Terms and Conditions of Use. You agree not to:

* use our website in any way that violates any applicable federal, state, local, or international law or regulation;
* engage in any activity that interferes with or disrupts our website or its servers or networks;
* attempt to gain unauthorized access to our website, user accounts, or computer systems;
* use our website to transmit or upload any content that contains viruses, trojan horses, worms, or other harmful code.

4.Links to Third-Party Websites
Our website may contain links to third-party websites that are not owned or controlled by us. We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites.
You acknowledge and agree that we shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such third-party website. 

5. Changes to Terms and Conditions
We may revise these terms and conditions at any time without notice. By using our blog website, you agree to be bound by the current version of these terms and conditions. At a whim things at this website may change so be on toes.
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








