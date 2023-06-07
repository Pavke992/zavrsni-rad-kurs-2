<?php
include('db.php')
?>

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
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <div class="sidebar-module">
            <h4>Latest Post</h4>
            <?php

            $sql = "SELECT * FROM posts ORDER BY created_at DESC;";
            $statement = $connection->prepare($sql);

            $statement->execute();

            $statement->setFetchMode(PDO::FETCH_ASSOC);

            $posts = $statement->fetchAll();

            ?>

            <?php foreach ($posts as $post) {

            ?>
                <a class="list-unstyled" href="single-post.php?post_id=<?php echo ($post['id']) ?>"><?php echo ($post['Tittle']) ?></a>
            <?php } ?>
        </div>
    </div>
</aside>