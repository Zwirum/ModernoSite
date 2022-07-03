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
        <div class="content page-content">

            <?php include 'inc/header.inc.php'; ?>

            <?php include 'inc/search-section-cut.inc.php'; ?>

            <div class="beardcrumbs">
                <div class="container">
                    <div class="beardcrumbs__inner">
                        <ul class="beardcrumbs__list">
                            <li><a href="#">Home</a></li>
                            <li><span>Product Page</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="product-page">
                <div class="container">
                    <div class="product-page__inner">

                        <aside class="product-page__aside ">
                            <div class="category aside__item">
                                <div class="aside__title">
                                    Categories
                                </div>
                                <ul class="category__list">
                                    <li><a href="#">WordPress</a><span>(150)</span></li>
                                    <li><a href="#">Joomla</a><span>(100)</span></li>
                                    <li><a href="#">PSD</a><span>(50)</span></li>
                                    <li><a href="#">Plugins</a><span>(60)</span></li>
                                    <li><a href="#">Components</a><span>(40)</span></li>
                                </ul>
                            </div>
                            <div class="price-range aside__item">
                                <div class="aside__title">
                                    Price Range
                                </div>
                                <form>
                                    <input type="text" class="js-range-slider" name="my_range" value="" />
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                            <div class="top-sellers aside__item">
                                <div class="aside__title">
                                    Top 10 Sellers
                                </div>
                                <div class="aside__product-inner">
                                    <div class="product__item">
                                        <a class="product__item-img"
                                            style="background-image: url(images/content/product-item.jpg);"
                                            href="product-page.php"></a>
                                        <div class="product__item-content">
                                            <div class="product__item-name">
                                                <a class="product__item-title" href="#">
                                                    Responsive Mobile APP
                                                </a>
                                                <a class="product__item-category" href="#">
                                                    Site Template
                                                </a>
                                            </div>
                                            <div class="product__item-price">
                                                $19
                                            </div>
                                        </div>
                                        <div class="product__item-info">
                                            <a class="product__item-author" href="#">
                                                <div class="avatar"
                                                    style="background-image: url(images/content/user.jpg);"></div>
                                                <span>Radiustheme</span>
                                            </a>
                                            <div class="product__item-star">
                                                <div class="rate-star"></div><span
                                                    class="product__item-starnum">(05)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <a class="product__item-img"
                                            style="background-image: url(images/content/product-item.jpg);"
                                            href="product-page.php"></a>
                                        <div class="product__item-content">
                                            <div class="product__item-name">
                                                <a class="product__item-title" href="#">
                                                    Responsive Mobile APP
                                                </a>
                                                <a class="product__item-category" href="#">
                                                    Site Template
                                                </a>
                                            </div>
                                            <div class="product__item-price">
                                                $19
                                            </div>
                                        </div>
                                        <div class="product__item-info">
                                            <a class="product__item-author" href="#">
                                                <div class="avatar"
                                                    style="background-image: url(images/content/user.jpg);"></div>
                                                <span>Radiustheme</span>
                                            </a>
                                            <div class="product__item-star">
                                                <div class="rate-star"></div><span
                                                    class="product__item-starnum">(05)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <a class="product__item-img"
                                            style="background-image: url(images/content/product-item.jpg);"
                                            href="product-page.php"></a>
                                        <div class="product__item-content">
                                            <div class="product__item-name">
                                                <a class="product__item-title" href="#">
                                                    Responsive Mobile APP
                                                </a>
                                                <a class="product__item-category" href="#">
                                                    Site Template
                                                </a>
                                            </div>
                                            <div class="product__item-price">
                                                $19
                                            </div>
                                        </div>
                                        <div class="product__item-info">
                                            <a class="product__item-author" href="#">
                                                <div class="avatar"
                                                    style="background-image: url(images/content/user.jpg);"></div>
                                                <span>Radiustheme</span>
                                            </a>
                                            <div class="product__item-star">
                                                <div class="rate-star"></div><span
                                                    class="product__item-starnum">(05)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="top-sellers__link">View All</a>
                            </div>
                        </aside>

                        <div class="product-page__content">
                            <div class="product-page__filter">
                                <div class="product-page__filter-sort">
                                    <button class="icon-sort-amount-desc"></button>Sort by: New Items<button
                                        class="icon-unsorted"></button>
                                </div>
                                <div>
                                    <button class="icon-th-large active"></button>
                                    <button class="icon-th-list"></button>
                                </div>
                            </div>
                            <div class="product-page__items">

                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__item product__items-list">
                                    <a class="product__item-img"
                                        style="background-image: url(images/content/product-item.jpg);" href="product-page.php"></a>
                                    <div class="product__item-content">
                                        <div class="product__item-name">
                                            <a class="product__item-title" href="#">
                                                Responsive Mobile APP
                                            </a>
                                            <a class="product__item-category" href="#">
                                                Site Template
                                            </a>
                                            <div class="product__item-text">
                                                Pimply dummy text of the printing and typesetting industry.
                                            </div>
                                        </div>
                                        <div class="product__item-price">
                                            $19
                                            <span>Sales ( 14 ) </span>
                                        </div>
                                    </div>
                                    <div class="product__item-info">
                                        <a class="product__item-author" href="#">
                                            <div class="avatar" style="background-image: url(images/content/user.jpg);">
                                            </div>
                                            <span>Radiustheme</span>
                                        </a>
                                        <div class="product__item-star">
                                            <div class="rate-star"></div>(<span>05</span>)
                                        </div>
                                        <div class="product__item-list">
                                            <a class="icon-comment-o" href="#">(<span>10</span>)</a>
                                            <div class="icon-heart-o">(<span>20</span>)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <ul class="pagination__list">
                                    <li><span class="active" href="#">1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
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