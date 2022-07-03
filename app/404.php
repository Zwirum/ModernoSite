<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="content">
            
           <?php include 'inc/header.inc.php'; ?>

           <?php include 'inc/search-section-cut.inc.php'; ?>

            <div class="beardcrumbs">
                <div class="container">
                    <div class="beardcrumbs__inner">
                        <ul class="beardcrumbs__list">
                            <li><a href="#">Home</a></li>
                            <li><span>404 Page</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-404">
                <div class="container">
                    <div class="page-404__wrapper">
                        <div class="page-404__head text__head">Error Page</div>
                        <div class="page-404__inner">
                            <div class="page-404__404 wow ">404</div>
                            <div class="page-404__title ">Sorry Page Was Not Found</div>
                            <div class="page-404__text">
                                The page you are looking is not available or has been removed. Try going to Home Page by using the button below.
                            </div>
                            <a href="index.php" class="page-404__link wow">Go To Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        <?php include 'inc/footer.inc.php'; ?>  

    </div>

    <?php include 'inc/modal.inc.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>