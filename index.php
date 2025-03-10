<?php



include 'includes/header.php';




?>
<!--====== End - Main Header ======-->


<!--====== App Content ======-->
<div class="app-content">

    <!--====== Primary Slider ======-->
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1" id="hero-slider">
            <?php
            $slider = mysqli_query($conn, "select * from slider");



            while ($row = mysqli_fetch_array($slider)) {




            ?>
                <div class="hero-slide hero-slide--1" style=" background-image: url('dashboard/admin/<?php echo $row['slimg']; ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-secondary">Latest Update Stock</span>

                                    <span class="content-span-2 u-c-secondary">30% Off On organic products</span>

                                    <span class="content-span-3 u-c-secondary">Find organic products with the best market prices</span>



                                    <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <!--====== End - Primary Slider ======-->



    <!--====== Section 1 ======-->
   
    <!--====== End - Section 1 ======-->

    <!--====== Section 4 ======-->
    <?php
            $categories = mysqli_query($conn, "select * from product_category");



            while ($row = mysqli_fetch_array($categories)) {




            ?>
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12"><?php echo $row['cat_name'];?></h1>

                            <span class="section__span u-c-silver"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="slider-fouc">
                    <div class="owl-carousel product-slider" data-item="4">
                    <?php
                                $products = $conn->query("select * from products where catnameid=".$row['cat_id']." order by id desc");


                                while($res = $products->fetch_assoc())
                                {
                                ?>
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail-affiliate.php?prod=<?php echo $res['id'];?>">

                                        <img class="aspect__img" src="dashboard/admin/<?php echo $res['pimg'];?>" alt=""></a>
                                    <div class="product-o__action-wrap">
                                        <ul class="product-o__action-list">
                                            
                                            <li>

                                                <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="add_cart.php?id=<?php echo $res['id'];?>"><i class="fas fa-plus-circle" ></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart" href="add_wish.php?id=<?php echo $res['id'];?>"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                <?php $cat = $conn->query("select * from product_category where cat_id=" . $res['catnameid'] . "")->fetch_assoc();
                                                            echo $cat['cat_name']; ?>
                                                            </span>

                                    
                                <span class="product-o__name">

                                    <a href="product-detail-affiliate.php?prod=<?php echo $res['id'];?>"><?php echo $res['pname'];?></a></span>
                                <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                    <span class="product-o__review">(0)</span>
                                </div>

                                <span class="product-o__price">Ksh <?php echo $res['pprice'];?>

                                    <span class="product-o__discount">Ksh 

                                    <?php if ($res['discount'] == 0) { 
                                        echo "00";
                                    }else{
                                        $tp = $res['pprice'];
                                        $dis = 100 - $res['discount']; 
                                        $total = 100 * ($tp/$dis);

                                        $p = round($total, 0);
                                        
                                        echo $p;
                                    }
                                        ?>
                                    </span></span>
                            </div>
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <?php } ?>
    <!--====== End - Section 4 ======-->


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

                            <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                promotions, new arrivals, discount and coupons.</span>
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


<!--====== Quick Look Modal ======-->
<div class="modal fade" id="quick-look">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal--shadow">

            <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.hml">Home</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">Electronics</a>
                                </li>
                                <li class="has-separator">

                                    <a href="shop-side-version-2.html">DSLR Cameras</a>
                                </li>
                                <li class="is-marked">

                                    <a href="shop-side-version-2.html">Nikon Cameras</a>
                                </li>
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="pd-wrap">
                                <div id="js-product-detail-modal">
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-t-15">
                                <div id="js-product-detail-modal-thumbnail">
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div>

                                        <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span>
                            </div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price">$6.99</span>

                                    <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a href="product-detail.html">23 Reviews</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__stock">200 in stock</span>

                                    <span class="pd-detail__left">Only 2 left</span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book.</span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                        <a href="signin.html">Add to Wishlist</a>

                                        <span class="pd-detail__click-count">(222)</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                        <a href="signin.html">Email me When the price drops</a>

                                        <span class="pd-detail__click-count">(20)</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <ul class="pd-social-list">
                                    <li>

                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="u-s-m-b-15">
                                <form class="pd-detail__form">
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                <span class="input-counter__plus fas fa-plus"></span>
                                            </div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Add to
                                                Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your order.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Quick Look Modal ======-->


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

                                <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                    CART</a>

                                <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO
                                    CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Add to Cart Modal ======-->


<!--====== Newsletter Subscribe Modal ======-->
<div class="modal fade new-l" id="newsletter-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal--shadow">

            <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
            <div class="modal-body">
                <div class="row u-s-m-x-0">
                    <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                        <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                            <img class="u-img-fluid u-d-block" src="images/newsletter/newsletter.jpg" alt=""></a>
                    </div>
                    <div class="col-lg-6 new-l__col-2">
                        <div class="new-l__section u-s-m-t-30">
                            <div class="u-s-m-b-8 new-l--center">
                                <h3 class="new-l__h3">Newsletter</h3>
                            </div>
                            <div class="u-s-m-b-30 new-l--center">
                                <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals,
                                    special sales and more.</p>
                            </div>
                            <form class="new-l__form">
                                <div class="u-s-m-b-15">

                                    <input class="news-l__input" type="text" placeholder="E-mail Address">
                                </div>
                                <div class="u-s-m-b-15">

                                    <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button>
                                </div>
                            </form>
                            <div class="u-s-m-b-15 new-l--center">
                                <p class="new-l__p2">By Signing up, you agree to receive Reshop
                                    offers,<br />promotions and other commercial messages. You may unsubscribe
                                    at any time.</p>
                            </div>
                            <div class="u-s-m-b-15 new-l--center">

                                <a class="new-l__link" data-dismiss="modal">No Thanks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Newsletter Subscribe Modal ======-->
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

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                            JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>
</body>

</html>