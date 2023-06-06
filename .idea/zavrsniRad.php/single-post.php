<?php include('db.php');?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <title>Vivify Academy Blog - Homepage</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include('header.php'); ?>

    <div>
        <main>


            <?php

                if (isset($_GET['post_id'])) {

                    $postId = $_GET['post_id'];

                    // we are preparing an inquiry
                    $sql = "SELECT * FROM posts WHERE Id = = {$postId}";
                    $statement = $connection->prepare($sql);

                    // we are making an inquiry
                    $statement->execute();

                    // we want the result to be returned as an associative array.
                    // if we omit this line, we will get back a plain, numbered string
                    $statement->setFetchMode(PDO::FETCH_ASSOC);

                    // we fill the variable with the result of the query
                    $singlePost = $statement->fetch();
                    // use var_dump whenever you need to check the contents of a variable
                               echo '<pre>';
                               var_dump($singlePost);
                               echo '</pre>';
            ?>


            <article>
                <header>
                    <h1><?php echo($singlePost['title']) ?></h1>
                    <h3> body: <strong><?php echo($singlePost['body'])?></strong></h3>
                    </div>
                </header>


                <footer>
                    <div>
                        <p><?php echo($singlePost['Author'])?></p>
                    </div>
                </footer>

                <div>
                    <h3>comments</h3>
                    
                </div>

                <?php
                    } else {
                        echo('post_id parameter was not sent through $_GET.');
                    }
                ?>

            </article>
            <?php include('sidebar.php');?>
        </main>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>