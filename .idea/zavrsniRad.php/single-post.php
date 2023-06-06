<?php include('db.php');?>


<?php include('header.php'); ?>

            <?php

                // Checking if the post ID was passed
    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        // Preparing the SQL query to retrieve the individual post
        $query = $conn->prepare('SELECT * FROM posts WHERE Id = :postId');
        $query->bindParam(':postId', $postId);
        $query->execute();

        // Retrieving query results
        $post = $query->fetch();

        // Checking if the post was found
        if ($post) {
            echo '<h2>' . $post['Title'] . '</h2>';
            echo '<p>' . $post['Body'] . '</p>';
        } else {
            echo 'Nije pronađen post sa zadatim ID-om.';
        }
    } else {
        echo 'Nije pronađen ID posta.';
    }
?>

<a href="posts.php">Return to all posts</a>

    <?php include('footer.php'); ?>

</body>
</html>