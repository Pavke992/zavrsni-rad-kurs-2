    <?php include('db.php') ?>
    <!-- List of comments -->
    <?php
    // Checking if the post ID was passed
    $id = $_POST['id'];
    if(!empty($_POST['author']) && !empty($_POST['comment'])){
    $author = $_POST['author'];
    $comment = $_POST['comment'];
    $sqlInsert = "INSERT INTO comments (author, text, post_id) VALUES ('{$author}', '{$comment}', {$id});";
    $statementInsert = $connection->prepare($sqlInsert);
    $statementInsert->execute();
    $statementInsert->setFetchMode(PDO::FETCH_ASSOC);
}
 ?>
