<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <li><span>Withdrawals</span></li> 
                        </ul>
                    </div>
                </div>
            </div>

            <section class="withdrawals">
                <div class="container">
                    <div class="withdrawals__inner">
                        <div class="withdrawals__col">
                            <div class="withdrawals__box">
                                <div class="withdrawals__title text__head">Withdrawals Earnings</div>
                                <div class="withdrawals__content">
                                    <form>
                                        <div class="withdrawals__form-line">
                                            <label>Amount to Withdraw ($2000.00 Maximum) <span>*</span></label>
                                            <input type="text" placeholder="Enter the amount you want to withdraw..." required>
                                        </div>
                                        <div class="withdrawals__form-line">
                                            <label>Choose your Withdraw Method <span>*</span></label>
                                            <select>
                                                <option>Select Your Card</option>
                                                <option>Select Your Card</option>
                                            </select>
                                        </div>
                                        <div class="withdrawals__form-line">
                                            <label>Your Account Name <span>*</span></label>
                                            <select>
                                                <option>Select Your Card</option>
                                                <option>Select Your Card</option>
                                            </select>
                                        </div>
                                        <div class="withdrawals__form-line">
                                            <label>Confirm Your Password <span>*</span></label>
                                            <input type="text" placeholder="Select Your Card" required>
                                        </div>
                                        <button type="submit">Request Withdrawal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="withdrawals__col">
                            <div class="withdrawals__box">
                                <div class="withdrawals__title text__head">Withdrawal History</div>
                                <div class="withdrawals__content">
                                    <div class="withdrawals__content-items">
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$200</div>
                                            <div class="withdrawals__content-status">Paiding</div>
                                        </div>
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$100</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>   
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$200</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>   
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$100</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>   
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$200</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>   
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$100</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>   
                                        <div class="withdrawals__content-item">
                                            <div class="withdrawals__content-date">Dec 26th, 2016</div>
                                            <div class="withdrawals__content-email">Psdboss@paypal.com</div>
                                            <div class="withdrawals__content-price">$200</div>
                                            <div class="withdrawals__content-status withdrawals__content-paid">Paid</div>
                                        </div>                                        
                                    </div>
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