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
$statement->setFetchMode(PDO::FETCH_ASSOC);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-sm-8 blog-main">

    <?php

    // Displaying posts on a page

    if (!empty($posts)) {
        foreach ($posts as $post) { ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo ($post['id']) ?>"><?php echo ($post['Tittle']) ?></a></h2>
                <p class="blog-post-meta"><?php echo ($post['Created_at']) ?> by <?php echo ($post['Author']) ?></p>
                <p><?php echo ($post['body']) ?></p>
            </div>
    <?php
        }
    }
    ?>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

</div>