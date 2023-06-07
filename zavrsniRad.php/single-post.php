<?php include('db.php'); ?>

<!doctype html>
<html lang="en">

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
    <link href="styles/styles.css" rel="stylesheet">
</head>

<?php include('header.php'); ?>

<body>
    <main role="main" class="container">

        <div class="row">

            <?php
            // Checking if the post ID was passed 
            if (isset($_GET['post_id'])) {


                // Preparing the SQL query to retrieve the individual post
                $sql = "SELECT id, Tittle, body, Author, Created_at FROM posts WHERE posts.id = {$_GET['post_id']}";
                $statement = $connection->prepare($sql);
                $statement->execute();

                // Retrieving query results
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $singlePost = $statement->fetch();
            }


            // Checking if the post was found
            // if ($post) {
            //     echo '<h2>' . $post['Title'] . '</h2>';
            //     echo '<p>' . $post['Body'] . '</p>';
            // } else {
            //     echo 'No post found with the given id.';
            // }
            ?>

            <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo ($singlePost['id']) ?>"><?php echo ($singlePost['Tittle']) ?></a></h2>
            <p class="blog-post-meta"><?php echo ($singlePost['Created_at']) ?> by <?php echo ($singlePost['Author']) ?></p>
            <p><?php echo ($singlePost['body']) ?></p>

            <a href="posts.php">Return to all posts</a>

            <?php include('footer.php'); ?>

</body>
<div style="margin-top: 100px;">
    <?php

    $commentsSql = "Select * From comments where post_id = {$_GET['post_id']}";
    $statement = $connection->prepare($commentsSql);
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $singleComment = $statement->fetchAll();

    foreach ($singleComment as $comment) { ?>

        </p><?php echo ($comment['author']) ?></p>

        <p><?php echo ($comment['text']) ?> </p> <?php
                                                }
                                                    ?>
</div>

</html>