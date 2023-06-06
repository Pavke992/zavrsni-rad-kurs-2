<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <title>Vivify Academy Blog - Homepage</title>

    <link rel="stylesheet" href="styles/blog.css">
</head>
<?php include('header.php'); ?>
<body class="va-l-page va-l-page--homepage">

<?php

// checking if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $title = $_POST['title'];
  $author = $_POST['author'];
  $body = $_POST['body'];
  $created_at = $_POST['created_at'];


  // Save the blog post to a database or file, or perform any other necessary actions
  // For this example, let's just display the submitted data
  // echo "<h2>Blog Post Created!</h2>";
  // echo "<p>Title: $title</p>";
  // echo "<p>Author: $author</p>";
  // echo "<p>body: $body</p>";
  // echo "<p>Content: $created_at</p>";

  $sql = "insert into posts (title, author, body, created_at) values ('{$title}', '{$author}', '{$body}', '{$created_at}')";
  $statement = $connection->prepare($sql);
  $statement->execute();
  header("Location: index.php");
}
?>

<h2>Create a Blog Post</h2>

<form action="create-post.php" method="POST">
  <label for="title">Title:</label>
  <input type="text" id="title" name="title" required>

  <label for="author">Author:</label>
  <input type="text" id="author" name="author" required>

  <label for="body">Body:</label>
  <textarea id="body" name="body" required></textarea>

  
  <label for="created_at">Created At:</label>
  <textarea id="created_at" name="created_at" required></textarea>

  <input type="submit" value="Create Post">

</form>
      <?php include('sidebar.php'); ?>
</body>
      <?php include('footer.php'); ?>