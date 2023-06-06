
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

<!DOCTYPE html>
<html>
<head>
    <title>Blog - All posts</title>
</head>
<body>
    <h1>Blog - All posts</h1>
