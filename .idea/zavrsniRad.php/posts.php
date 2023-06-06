<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
</head>
<?php
   include('header.php'); 
   include('footer.php');
   include('sidebar.php');
   include('db.php');
?>

<?php

// Executing a query to retrieve posts
$sql = "SELECT * FROM posts ORDER BY Created_at DESC";
$statement = $connection->prepare($sql);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// Displaying posts on a page

if (!empty($posts)) {
    foreach ($posts as $post) {
        echo "<h2>" . $post['Title'] . "</h2>";
        echo "<p>" . $post['Body'] . "</p>";
        echo "<p>Author: " . $post['Author'] . "</p>";
        echo "<p>Created_at: " . $post['Created_at'] . "</p>"; }
    } else {
        echo "No results";
    }

?>
