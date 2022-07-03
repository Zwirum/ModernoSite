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
                            <li><span>Contact Us</span></li> 
                        </ul>
                    </div>
                </div>
            </div>

            <section class="contact">
                <div class="container">
                    <div class="contact__wrapper">
                        <div class="contact__head text__head">Contact With Us</div>
                        <div class="contact__inner">
                            <div class="contact__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.3419411295!2d-74.03927047383591!3d40.7590403297018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2z0JzQsNC90YXRjdGC0YLQtdC9LCDQndGM0Y4t0JnQvtGA0LosINCh0KjQkA!5e0!3m2!1sru!2sru!4v1591183871853!5m2!1sru!2sru"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="contact__box">
                                <div class="contact__info">
                                    <div class="contact__info-item">
                                        <div class="contact__info-title icon-map-marker">Our Office Address</div>
                                        <div class="contact__info-content">PO Box 16122 Collins Street West Victoria 8007 Australia</div>
                                    </div>
                                    <div class="contact__info-item">
                                        <div class="contact__info-title icon-phone">Phone</div>
                                        <a href="tel:61383766284" class="contact__info-content">+61 3 8376 6284</a>
                                    </div>
                                    <div class="contact__info-item">
                                        <div class="contact__info-title icon-envelope-o">E-mail</div>
                                        <div class="contact__info-content">info@foxtar.com</div>
                                    </div>
                                </div>
                                <div class="contact__form">
                                    <div class="contact__form-title">Drop Us A Message</div>
                                    <form>
                                        <div class="contact__form-row">
                                            <input type="text" placeholder="Name*" required>
                                            <input type="text" placeholder="E-mail*" required>
                                        </div>
                                        <textarea placeholder="Message*" required></textarea>
                                        <button class="submit-btn-effect" type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>


        <?php include 'inc/footer.inc.php'; ?>

    </div>

    <?php include 'inc/modal.inc.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>