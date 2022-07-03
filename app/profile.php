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
                            <li><span>Profile</span></li> 
                        </ul>
                    </div>
                </div>
            </div>

            <section class="profile">
                <div class="container">
                    <div class="profile__inner">

                        <div class="profile__aside">
                            <div class="aside__item">
                                <div class="aside__title text__head">Product Author</div>
                                <div class="product-author__box">
                                    <div class="product-author__avatar" style="background-image: url(images/content/avatar.jpg);"></div>
                                    <div class="product-author__info">
                                        <div class="product-author__name">PsdBoss</div>
                                        <div class="profile-status profile-on">Online</div>
                                    </div>
                                </div>
                                <ul class="author__awards-list">
                                    <li class="icon-meh-o"></li>
                                    <li class="icon-pagelines"></li>
                                    <li class="icon-bolt"></li>
                                    <li class="icon-foursquare"></li>
                                    <li class="icon-yen"></li>
                                </ul>
                            </div>
                            <ul class="footer__social-link">
                                <li><a class="link-facebook" href="#"></a></li>
                                <li><a class="link-twitter" href="#"></a></li>
                                <li><a class="link-youtube" href="#"></a></li>
                                <li><a class="link-linledin" href="#"></a></li>
                            </ul>
                            <div class="profile__aside-btn">
                                <a class="profile__aside-message btn-effect" href="#">Send Message</a>
                                <a class="profile__aside-follow btn-effect" href="#">Following</a>
                            </div>
                        </div>

                        <div class="profile__content">
                            <div class="profile__banner">
                                <div class="profile__banner-imegas" style="background-image: url(images/content/banner.jpg);"></div>
                            </div>
                            <div class="profile__items">
                                <div class="profile__item">
                                    <div class="profile__item-title">Country:</div>
                                    <div class="profile__item-content">England</div>
                                </div>
                                <div class="profile__item">
                                    <div class="profile__item-title">Member Since:</div>
                                    <div class="profile__item-content">December 26, 2014</div>
                                </div>
                                <div class="profile__item">
                                    <div class="profile__item-title">Author Rating:</div>
                                    <div class="profile__item-content">
                                        <div class="rate-star"></div><span class="product__item-starnum">(05)</span>
                                    </div>
                                </div>
                                <div class="profile__item">
                                    <div class="profile__item-title">Total Sales:</div>
                                    <div class="profile__item-content profile__item-sales">$ 5,030</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="setiings profile-settings">
                <div class="container">
                    <div class="product-one__tubs setiings__tubs">
                        <div class="tabs">
                                <span class="tab icon-user active" data-id="1" >About Me</span>
                                <span class="tab icon-briefcase" data-id="2">Products ( 10 )</span>
                                <span class="tab icon-envelope-o" data-id="3">Message Box</span>
                                <span class="tab icon-comments-o" data-id="4">Customer Reviews ( 20 )</span>
                                <span class="tab icon-group" data-id="5">Followers (100 )</span>
                        </div>
                        <div class="tab_content">
                            <div class="tab-item active-tab" id="1">
                                <div class="personal__box">
                                    <div class="personal__box-title">About Me:</div>
                                    <div class="personal__box-text">
                                        <p>
                                          Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.  
                                        </p>
                                    </div>
                                    <div class="personal__box-title">Skills:</div>
                                    <div class="personal__box-items">
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Graphic Design</div> 
                                                <div class="personal__box-item-number">80%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 80%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">WordPress</div> 
                                                <div class="personal__box-item-number">70%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 70%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Joomla</div> 
                                                <div class="personal__box-item-number">90%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 90%;" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item" id="2">
                                <div class="personal__box">
                                    <div class="personal__box-title">About Me:</div>
                                    <div class="personal__box-text">
                                        <p>
                                          Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.  
                                        </p>
                                    </div>
                                    <div class="personal__box-title">Skills:</div>
                                    <div class="personal__box-items">
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Graphic Design</div> 
                                                <div class="personal__box-item-number">80%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 80%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">WordPress</div> 
                                                <div class="personal__box-item-number">70%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 70%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Joomla</div> 
                                                <div class="personal__box-item-number">90%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 90%;" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item" id="3">
                                <div class="personal__box">
                                    <div class="personal__box-title">About Me:</div>
                                    <div class="personal__box-text">
                                        <p>
                                          Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.  
                                        </p>
                                    </div>
                                    <div class="personal__box-title">Skills:</div>
                                    <div class="personal__box-items">
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Graphic Design</div> 
                                                <div class="personal__box-item-number">80%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 80%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">WordPress</div> 
                                                <div class="personal__box-item-number">70%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 70%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Joomla</div> 
                                                <div class="personal__box-item-number">90%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 90%;" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item" id="4">
                                <div class="personal__box">
                                    <div class="personal__box-title">About Me:</div>
                                    <div class="personal__box-text">
                                        <p>
                                          Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.  
                                        </p>
                                    </div>
                                    <div class="personal__box-title">Skills:</div>
                                    <div class="personal__box-items">
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Graphic Design</div> 
                                                <div class="personal__box-item-number">80%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 80%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">WordPress</div> 
                                                <div class="personal__box-item-number">70%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 70%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Joomla</div> 
                                                <div class="personal__box-item-number">90%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 90%;" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item" id="5">
                                <div class="personal__box">
                                    <div class="personal__box-title">About Me:</div>
                                    <div class="personal__box-text">
                                        <p>
                                          Bimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.  
                                        </p>
                                    </div>
                                    <div class="personal__box-title">Skills:</div>
                                    <div class="personal__box-items">
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Graphic Design</div> 
                                                <div class="personal__box-item-number">80%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 80%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">WordPress</div> 
                                                <div class="personal__box-item-number">70%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 70%;" ></span>
                                            </div>
                                        </div>
                                        <div class="personal__box-item">
                                            <div class="personal__box-item-head">
                                                <div class="personal__box-item-name">Joomla</div> 
                                                <div class="personal__box-item-number">90%</div>
                                            </div>
                                            <div class="personal__box-item-line">
                                                <span style="max-width: 90%;" ></span>
                                            </div>
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