<?php
  session_start();
  if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
  } else {
    $username = "";
  }
  
  $article_id = $_POST['article_id'];
  $commenter_name = $_POST['commenter_name'];
  $comment_text = $_POST['comment_text'];
  $comment_date = date('Y-m-d H:i:s');
  
  // Connect to database
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "articles";
  
  $conn = mysqli_connect($host, $username, $password, $dbname);
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Insert comment into music_com table
  $sql = "INSERT INTO music_com (article_id, commenter_name, comment_text, comment_date)
          VALUES ('$article_id', '$commenter_name', '$comment_text', '$comment_date')";
  
  if(mysqli_query($conn, $sql)) {
    echo "Comment submitted successfully";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
