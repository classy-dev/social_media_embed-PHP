<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Cars ans Stuffs Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css"> -->
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
        /*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
    </style>
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    
    <div class="main_menu" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-4" style="margin-top: 2%">
                    <h4><?php echo date('h:i A l jS \ F Y');?></h4>
                </div>
                <div class="col-6">
                    <script async src="https://cse.google.com/cse.js?cx=006555456582180363385:zwln1fd2ufu">
                        
                    </script>
                    <div class="gcse-search"></div>
                    
                </div>
                <div class="col-2" style="margin-top: 1.5%">
                    <img src="https://www.google.com.hk/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" style="height: 60%">
                    <!-- <form method="get" action="http://www.google.com/search" class="form-inline">
                        <div class="form-group">
                            <div class="col-8"><input type="text"   name="q" size="25" class="form-control" 
                             maxlength="255" value="" /></div>
                            
                             <div class="col-4"><input type="submit" value="Google Search" /></div>
                            
                        </div>
                    </form> -->
                </div>
                
        
            </div>
        </div>
    </div>
</header>
<!--================Header Menu Area =================-->

<section class="brands-area background_one">
    <div class="container">
      <!-- Top content -->
        <div class="top-content">
            <div class="container-fluid">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="img/Facebook.png" class="img-fluid mx-auto d-block" alt="img1">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Instagram.png" class="img-fluid mx-auto d-block" alt="img2">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Youtube.png" class="img-fluid mx-auto d-block" alt="img3">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Linkedin.png" class="img-fluid mx-auto d-block" alt="img4">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Twitter.png" class="img-fluid mx-auto d-block" alt="img5">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Vimeo.png" class="img-fluid mx-auto d-block" alt="img6">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Whatsapp.png" class="img-fluid mx-auto d-block" alt="img7">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Messenger.png" class="img-fluid mx-auto d-block" alt="img8">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Reddit.png" class="img-fluid mx-auto d-block" alt="img8">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Slack.png" class="img-fluid mx-auto d-block" alt="img8">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/Medium.png" class="img-fluid mx-auto d-block" alt="img8">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div
            class="banner_content d-md-flex justify-content-between align-items-center"
            >
            <div class="mb-3 mb-md-0">
                <h2>Blog Details</h2>
                <p>Belding years moveth earth green behold wherein</p>
            </div>
            <div class="page_link">
                <a href="index.html">Home</a>
                <a href="contact.html">Blog Details</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->


<!--================Blog Area =================-->
<section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt="">
                    </div>

<div class="blog_details">
    <h2>Second divided from form fish beast made every of seas
    all gathered us saying he our</h2>
    <ul class="blog-info-link mt-3 mb-4">
        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
    </ul>
    <p class="excert">
        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower

    </p>
    <p>
        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually 
    </p>
    <div class="quote-wrapper">
        <div class="quotes">
            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
        </div>
    </div>


    <p>
        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower

    </p>
    <p>
        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually 
    </p>
</div>
</div>
<div class="navigation-top">
    <div class="d-sm-flex justify-content-between text-center">
        <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4 people like this</p>
        <div class="col-sm-4 text-center my-2 my-sm-0">
            <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p>
        </div>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fab fa-behance"></i></a></li>
        </ul>
    </div>

    <div class="navigation-area">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                <div class="thumb">
                    <a href="#">
                        <img class="img-fluid" src="img/blog/prev.jpg" alt="">
                    </a>
                </div>
                <div class="arrow">
                    <a href="#">
                        <span class="lnr text-white lnr-arrow-left"></span>
                    </a>
                </div>
                <div class="detials">
                    <p>Prev Post</p>
                    <a href="#">
                        <h4>Space The Final Frontier</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                <div class="detials">
                    <p>Next Post</p>
                    <a href="#">
                        <h4>Telescopes 101</h4>
                    </a>
                </div>
                <div class="arrow">
                    <a href="#">
                        <span class="lnr text-white lnr-arrow-right"></span>
                    </a>
                </div>
                <div class="thumb">
                    <a href="#">
                        <img class="img-fluid" src="img/blog/next.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-author">
    <div class="media align-items-center">
        <img src="img/blog/author.png" alt="">
        <div class="media-body">
            <a href="#">
                <h4>Harvard milan</h4>
            </a>
            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
        </div>
    </div>
</div>

<div class="comments-area">
    <h4>05 Comments</h4>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="img/blog/c1.png" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                    </p>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">Emilly Blunt</a>
                            </h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                        </div>

                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="img/blog/c2.png" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                    </p>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">Emilly Blunt</a>
                            </h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                        </div>

                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="img/blog/c3.png" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser 
                    </p>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">Emilly Blunt</a>
                            </h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                        </div>

                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="#" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm">Send Message</button>
        </div>
    </form>
</div>
</div>
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Keyword">
                        <div class="input-group-append">
                            <button class="btn" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
            </form>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">
                <li>
                    <a href="#" class="d-flex">
                        <p>Resaurant food</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Travel news</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Modern technology</p>
                        <p>(03)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Product</p>
                        <p>(11)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Inspiration</p>
                        <p>(21)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Health Care</p>
                        <p>(21)</p>
                    </a>
                </li>
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            <div class="media post_item">
                <img src="img/blog/popular-post/post1.jpg" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>From life was you fish...</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>The Amazing Hubble</h3>
                    </a>
                    <p>02 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post3.jpg" alt="post">                              
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Astronomy Or Astrology</h3>
                    </a>
                    <p>03 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="img/blog/popular-post/post4.jpg" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Asteroids telescope</h3>
                    </a>
                    <p>01 Hours ago</p>
                </div>
            </div>
        </aside>
        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                <li>
                    <a href="#">project</a>
                </li>
                <li>
                    <a href="#">love</a>
                </li>
                <li>
                    <a href="#">technology</a>
                </li>
                <li>
                    <a href="#">travel</a>
                </li>
                <li>
                    <a href="#">restaurant</a>
                </li>
                <li>
                    <a href="#">life style</a>
                </li>
                <li>
                    <a href="#">design</a>
                </li>
                <li>
                    <a href="#">illustration</a>
                </li>
            </ul>
        </aside>


        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                    </a>
                </li>
            </ul>
        </aside>


        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>

            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email" required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
            </form>
        </aside>
    </div>
</div>
</div>
</div>
</section>
<!--================Blog Area end =================-->



        <!--================ Start Brands Area =================-->
        <section class="brands-area background_one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="owl-carousel brand-carousel">
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/1.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/2.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/3.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/4.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/5.png" alt="">
                                </div>
                            </div>
                            <!-- single-brand -->
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell">
                                    <img src="img/brand/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Brands Area =================-->
<!-- start footer Area -->
        <footer class="footer-area area-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6 single-footer-widget">
                        <h4>Top Products</h4>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>You can trust us. we only send promo offers,</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                            required="" type="email" />
                            <button class="click-btn btn btn-default">
                                <i class="ti-arrow-right"></i>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- <script src="js/popper.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/stellar.js"></script> -->
    <!-- <script src="vendors/owl-carousel/owl.carousel.min.js"></script> -->
    <!-- <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script> -->
    <script type="text/javascript">
        /*
            Carousel
        */
        $('#carousel-example').on('slide.bs.carousel', function (e) {
            /*
                CC 2.0 License Iatek LLC 2018 - Attribution required
            */
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 2;
            var totalItems = $('.carousel-item').length;
         
            if (idx >= totalItems-(itemsPerSlide-1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i=0; i<it; i++) {
                    // append slides to end
                    if (e.direction=="left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    }
                    else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });
    </script>
</body>
</html>