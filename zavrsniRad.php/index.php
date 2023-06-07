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
    <!-- <link href="styles/blog.css" rel="stylesheet">
    <link href="../styles/styles.css" rel="stylesheet"> -->

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 14px;
        }

        .blog-masthead {
            background-color: #b34848;
        }

        .blog-title {
            color: #b34848;
        }

        .blog-post-title a {
            color: #b34848;
        }

        .blog-post-title a:hover {
            text-decoration: underline;
            color: #b34848;
        }
    </style>
</head>
<?php include('header.php') ?>

<body>
    <main role="main" class="container">

        <div class="row">

            <?php include('posts.php') ?>
            <?php include('sidebar.php') ?>

        </div><!-- /.row -->

    </main><!-- /.container -->

    <?php include('footer.php') ?>
</body>

</html>