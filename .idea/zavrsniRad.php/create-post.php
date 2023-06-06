<?php include('db.php'); ?>

<?php include('header.php'); ?>

<?php

// Checking if the post creation form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Data validation and storage
  $title = $_POST['title'];
  $body = $_POST['body'];
  $author = $_POST['author'];

  //Preparing a SQL query to enter a new post
  $query = $conn->prepare('INSERT INTO posts (Title, Body, Author) VALUES (:title, :body, :author)');
  $query->bindParam(':title', $title);
  $query->bindParam(':body', $body);
  $query->bindParam(':author', $author);
  $query->execute();

  //Redirection to all posts
  header('Location: posts.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Blog - Create a post</title>
</head>
<body>
<h1>Blog - Create a post</h1>

<form method="POST" action="">
  <label for="title">Title:</label><br>
  <input type="text" name="title" id="title"><br><br>
  <label for="body">Content:</label><br>
  <textarea name="body" id="body"></textarea><br><br>
  <label for="author">Author:</label><br>
  <input type="text" name="author" id="author"><br><br>
  <input type="submit" value="Create post">
</form>
</body>
</html>
      <?php include('sidebar.php'); ?>
      <?php include('footer.php'); ?>