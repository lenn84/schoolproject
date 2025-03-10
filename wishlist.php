<?php



include 'includes/header.php';




?>
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="is-marked">

                                        <a href="wishlist.php">Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">Wishlist</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <?php

                                //create array of initail qty which is 1
                                $index = 0;
                                if (!isset($_SESSION['qty_array'])) {
                                    $_SESSION['qty_array'] = array_fill(0, count($_SESSION['wish']), 1);
                                }
                                $sql = "SELECT * FROM products WHERE id IN (" . implode(',', $_SESSION['wish']) . ")";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                ?>

                                    <!--====== Wishlist Product ======-->
                                    <div class="w-r u-s-m-b-30">
                                        <div class="w-r__container">
                                            <div class="w-r__wrap-1">
                                                <div class="w-r__img-wrap">

                                                <img class="aspect__img" src="dashboard/admin/<?php echo $res['pimg'];?>" alt="">
                                                </div>
                                                <div class="w-r__info">

                                                    <span class="w-r__name">

                                                    <a href="product-detail-affiliate.php?prod=<?php echo $res['id'];?>"><?php echo $res['pname'];?></a>
                                                </span>

                                                    <span class="w-r__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                                    <span class="w-r__price">$125.00

                                                        <span class="w-r__discount">$160.00</span></span>
                                                </div>
                                            </div>
                                            <div class="w-r__wrap-2">

                                                <a class="w-r__link btn--e-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart">ADD TO CART</a>

                                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="product-detail.html">VIEW</a>

                                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="#">REMOVE</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                                <!--====== End - Wishlist Product ======-->


                                <!--====== Wishlist Product ======-->
                                <div class="w-r u-s-m-b-30">
                                    <div class="w-r__container">
                                        <div class="w-r__wrap-1">
                                            <div class="w-r__img-wrap">

                                                <img class="u-img-fluid" src="images/product/women/product8.jpg" alt="">
                                            </div>
                                            <div class="w-r__info">

                                                <span class="w-r__name">

                                                    <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                <span class="w-r__category">

                                                    <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                <span class="w-r__price">$125.00

                                                    <span class="w-r__discount">$160.00</span></span>
                                            </div>
                                        </div>
                                        <div class="w-r__wrap-2">

                                            <a class="w-r__link btn--e-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart">ADD TO CART</a>

                                            <a class="w-r__link btn--e-transparent-platinum-b-2" href="product-detail.html">VIEW</a>

                                            <a class="w-r__link btn--e-transparent-platinum-b-2" href="#">REMOVE</a>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Wishlist Product ======-->


                                <!--====== Wishlist Product ======-->
                                <div class="w-r u-s-m-b-30">
                                    <div class="w-r__container">
                                        <div class="w-r__wrap-1">
                                            <div class="w-r__img-wrap">

                                                <img class="u-img-fluid" src="images/product/men/product8.jpg" alt="">
                                            </div>
                                            <div class="w-r__info">

                                                <span class="w-r__name">

                                                    <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                <span class="w-r__category">

                                                    <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                <span class="w-r__price">$125.00

                                                    <span class="w-r__discount">$160.00</span></span>
                                            </div>
                                        </div>
                                        <div class="w-r__wrap-2">

                                            <a class="w-r__link btn--e-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart">ADD TO CART</a>

                                            <a class="w-r__link btn--e-transparent-platinum-b-2" href="product-detail.html">VIEW</a>

                                            <a class="w-r__link btn--e-transparent-platinum-b-2" href="#">REMOVE</a>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Wishlist Product ======-->
                            </div>
                            <div class="col-lg-12">
                                <div class="route-box">
                                    <div class="route-box__g">

                                        <a class="route-box__link" href="shop-side-version-2.html"><i class="fas fa-long-arrow-alt-left"></i>

                                            <span>CONTINUE SHOPPING</span></a>
                                    </div>
                                    <div class="route-box__g">

                                        <a class="route-box__link" href="wishlist.html"><i class="fas fa-trash"></i>

                                            <span>CLEAR WISHLIST</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>4247 Ashford Drive Virginia VA-20006 USA</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 900 901 904</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>contact@domain.com</span>
                                </div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>

                                                    <a href="dashboard.html">Account</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Manufacturer</a>
                                                </li>
                                                <li>

                                                    <a href="dash-payment-option.html">Finance</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Shop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="about.html">About us</a>
                                                </li>
                                                <li>

                                                    <a href="contact.html">Contact Us</a>
                                                </li>
                                                <li>

                                                    <a href="index.html">Sitemap</a>
                                                </li>
                                                <li>

                                                    <a href="dash-my-order.html">Delivery</a>
                                                </li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Store</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                                    </div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2018</span>

                                    <a href="index.html">Reshop</a>

                                    <span>All Right Reserved</span>
                                </div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span>
                                    </div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt="">
                                    </div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>

</html>