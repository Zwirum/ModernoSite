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
                            <li><span>Upload Product</span></li> 
                        </ul>
                    </div>
                </div>
            </div>

            <section class="upload">
                <div class="container">
                    <form>
                        <div class="upload__inner">
                            <div class="upload__title text__head">Upload Your item</div>
                            <div class="upload__content">
                                <div class="upload__line">
                                    <label>Select Categories<span>*</span></label>
                                    <select>
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                                <div class="upload__line">
                                    <label>Product Name<span>*</span></label>
                                    <input type="text" placeholder="Enter your product name here ..." required>
                                </div>
                                <div class="upload__line">
                                    <label>Product Description<span>*</span></label>
                                    <textarea placeholder="<h1> Type your text  here </h1/>" required></textarea>
                                </div>
                                <div class="upload__line">
                                    <label>Upload Main File<span>*</span></label>
                                    <input type="file" required data-placeholder="No File Choosen" data-browse="Choose File">
                                </div>
                                <div class="upload__line">
                                    <label>Upload Screenshots<span>*</span></label>
                                    <input type="file" required data-placeholder="No File Choosen" data-browse="Choose File">
                                </div>
                                <div class="upload__line">
                                    <label>File Included<span>*</span></label>
                                    <select>
                                        <option>Select File Type </option>
                                        <option>Select File Type </option>
                                        <option>Select File Type </option>
                                        <option>Select File Type </option>
                                    </select>
                                </div>
                                <div class="upload__line">
                                    <label>File Dimensions<span>*</span></label>
                                    <input type="text" placeholder="Enter the item  dimentionss here ..." required>
                                </div>
                                <div class="upload__line">
                                    <label>Item Tags<span>*</span></label>
                                    <input type="text" placeholder="Enter Tag Here" required>
                                </div>
                            </div>
                            <div class="upload__title text__head">Set Your Price (US$)</div>
                            <div class="upload__content">
                                <div class="upload__line">
                                    <label>Regular License<span>*</span></label>
                                    <input type="text" placeholder="$00.00" required>
                                </div>
                                <div class="upload__line">
                                    <label>Extended License<span>*</span></label>
                                    <input type="text" placeholder="$00.00" required>
                                </div>
                                <button class="submit-btn-effect" type="submit">Submit</button>
                            </div>
                        </div>    
                    </form>
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