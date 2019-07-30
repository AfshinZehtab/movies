<?php include_once 'php/result.php' ?>
<html>
    <head>
        <title>Movies</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

        <!-- jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="js/main.js"></script>

        <!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
<body style="background: linear-gradient(45deg, #000000, #5042425c), url(<?php echo $result->img ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
    <header class="container">
        <h1 class="display-4" <?php if (!isset($_GET['search']) && !empty($_GET['search'])) { echo "style=\"color: #000; text-shadow: none;\""; }?>>Movies & Serials</h1>
        <form action="" method="GET" name="form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search a Movie or Serials..." aria-label="Search a Movie or Serials" aria-describedby="button-addon2">
                <div class="input-group-append">
                        <button class="btn btn-primary" name="submit" type="submit" id="button-addon2">Search</button>
                </div>
            </div>
        </form>
    </header>

    <section id="result" class="border-top border-bottom">
        <div class="contents container mt-5 mb-5">
            <?php include 'template.php'; ?>
        </div>
    </section>
</body>
</html>