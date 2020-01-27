<?php include_once  __DIR__.'/result.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Movies</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

        <!-- jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.js" />
        <script src="js/main.js" />

        <!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
<body style="background: linear-gradient(45deg, #000000, #5042425c), url(<?php echo $result->img ?>) no-repeat center center / cover;">
    <header class="container">
        <h1 class="display-4" <?php if (!isset($_GET['search']) && !empty($_GET['search'])) { echo "style=\"color: #000; text-shadow: none;\""; }?>>Movies & Serials</h1>
        <form action="" method="GET" name="form" id="searchForm">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search a Movie or Serials..." aria-label="Search a Movie or Serials" aria-describedby="button-addon2">
                <div class="input-group-append">
                        <button class="btn btn-primary" name="submit" type="submit" id="button-addon2" form="searchForm">Search</button>
                </div>
            </div>
        </form>
    </header>

    <section id="result" class="border-top border-bottom">
        <div class="contents container mt-5 mb-5">
            <?php include 'tmp/templateResult.php'; ?>
        </div>
    </section>
    <section id="subttiles" class="container mt-5 mb-5">
        <?php
            if (isset($_GET['subtitles']))
            {
                include 'tmp/templateSub.php';
            }
            else
            {
                echo "";
            }
            ?>
    </section>
</body>
</html>