
    <!-- List of comments -->
    <?php
    // Checking if the post ID was passed
    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        // Prepares SQL queries to retrieve comments for a specific post
        $query = $conn->prepare('SELECT * FROM comments WHERE Post_id = :postId');
        $query->bindParam(':postId', $postId);
        $query->execute();

        //Retrieving query results
        $comments = $query->fetchAll();

        //Showing all comments
        foreach ($comments as $comment) {
            echo '<h3>Autor: ' . $comment['Author'] . '</h3>';
            echo '<p>' . $comment['Text'] . '</p>';
            echo '<hr>';
        }
    } else {
        echo 'No post ID found.';
    }
?>

<a href="single-post.php?id=<?php echo $postId; ?>">Return to single-post</a>
    
    <!-- Form for adding comments -->
    <form action="comments.php" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>
        </div>
        <button type="submit">Add Comment</button>
    </form>
</div>
