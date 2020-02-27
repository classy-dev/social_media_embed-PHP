<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cars and Staffs</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/calendar.css">

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script src="js/calendar.js"></script>

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
    <style type="text/css">

        .gradient-border0 {
            border-image: linear-gradient(to left, #A8F4CA, #66EFA3, #15FC7C) 25 25 round !important;
            border-image-slice: 1 !important;
            border: 6px solid;
        }

        .gradient-border1 {
            border-image: linear-gradient(to left, #707DE0, #4155F2, #0925F8) !important;
            border-image-slice: 1 !important;
            border: 6px solid;
        }

        .gradient-border2 {
            border-image: linear-gradient(to left, #F5F809, #F809F5, #F80909) !important;
            border-image-slice: 1 !important;
            border: 6px solid;
        }
        .gradient-border3 {
            border-image: linear-gradient(to left, #F8EDED, #FB8383, #FB0404) !important;
            border-image-slice: 1 !important;
            border: 6px solid;
        }
        .gradient-border4 {
            border-image: linear-gradient(to left, #D2EAFA, #6DC3F9, #437AA0) !important;
            border-image-slice: 1 !important;
            border: 6px solid;
        }

        .zoom {
          transition: transform .2s;
        }

        .zoom:hover {
          -ms-transform: scale(1.2); /* IE 9 */
          -webkit-transform: scale(1.2); /* Safari 3-8 */
          transform: scale(1.2); 
        }

        @media screen and (min-width: 1200px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: calc(50% - 21em);
                top: calc(50% - 27em);
                width: 50%;
                height: 58%;
                overflow: scroll;
            }
            /*.inner {
                left: 24%;
                top: 10%;
                display: none;
                position: absolute;
            }*/
        }

        @media screen and (min-width: 992px) and  (max-width: 1200px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: calc(50% - 24em);
                top: calc(50% - 22em);
                width: 70%;
                height: 58%;
                overflow: scroll;
            }
        }

        @media screen and (min-width: 767px) and  (max-width: 992px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: calc(50% - 17em);
                top: calc(50% - 16em);
                width: 68%;
                height: 58%;
                overflow: scroll;
            }
        }

        @media screen and (min-width: 576px) and  (max-width: 767px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: calc(50% - 13em);
                top: calc(50% - 12em);
                width: 68%;
                height: 58%;
                overflow: scroll;
            }
        }

        @media screen and (min-width: 450px) and  (max-width: 576px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: 17%;
                top: 7%;
                width: 67%;
                height: 58%;
                overflow: scroll;
            }
        }

        @media screen and (min-width: 320px) and  (max-width: 450px) {
            .cover {
                position: absolute;
                /*background: green;*/
                left: 17%;
                top: 6%;
                width: 67%;
                height: 58%;
                overflow: scroll;
            }
        }

        /*@media only screen and (min-width: 792px) {

            .title {
               font-family: 'Vollkorn';text-align: center;color: yellow;font-size: 52px; 
            }
        }*/
        
        @media only screen and (max-width: 792px) {

            h3 {
                font-size: 20px;
            }
        }

        .same-day-div {
            display: flex;
            justify-content: center;
        }
        .same-day-img {
            width: 45px; height: 45px; padding-right: 10px;
        }

        h3 {
            color: white;
        }
    </style>
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
    
        <div class="main_menu" style="margin-top: 30px">
            <div class="container" style="background: white">
                <div class="row">
                    <div class="col-12 col-md-4" style="margin-top: 18px"">
                        <h4 style="color: #020a21;    margin: auto; text-align: center;"><?php echo date('h:i A l jS \ F Y');?></h4>
                    </div>
                    <div class="col-8 col-md-6">
                        <script async src="https://cse.google.com/cse.js?cx=006555456582180363385:zwln1fd2ufu">
                            
                        </script>
                        <div class="gcse-search"></div>
                        
                    </div>
                    <div class="col-4 col-md-2" style="margin-top: 18px">
                        <img src="https://www.google.com.hk/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png">
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

    <!--================ Start Social Area =================-->
    <section class="brands-area background_one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel brand-carousel">
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://facebook.com/" target="_blank"><img src="img/Facebook.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://instagram.com/" target="_blank"><img src="img/Instagram.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://linkedin.com/" target="_blank"><img src="img/Linkedin.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://youtube.com/" target="_blank"><img src="img/Youtube.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://twitter.com/" target="_blank"><img src="img/Twitter.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://vimeo.com/" target="_blank"><img src="img/Vimeo.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://whatsapp.com/" target="_blank"><img src="img/Whatsapp.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://reddit.com/" target="_blank"><img src="img/Reddit.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://messenger.com/" target="_blank"><img src="img/Messenger.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://slack.com/" target="_blank"><img src="img/Slack.png" alt=""></a>
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <a href="http://medium.com/" target="_blank"><img src="img/Medium.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ End Social Area =================-->
    

      <!--================ Social section start =================-->  
    <section class="area-padding social-section">
        <div class="container">
            <h1>Let's See Cars By Social Media!</h1>
            <div class="row justify-content-center">
                <div class="card card-feature text-center text-lg-left gradient-border0 zoom" id="calendar-btn" style="margin: auto;margin-bottom: 20px;">
                    <h3 class="card-feature__title" style="color: #15FC7C;">Calender</h3>
                </div>
            
                <div class="card card-feature text-center text-lg-left gradient-border1 zoom" id="facebook-btn" style="margin: auto;margin-bottom: 20px;">
                    <h3 class="card-feature__title" style="color: #0925F8;">Facebook</h3>
                </div>
                <div class="card card-feature text-center text-lg-left gradient-border2 zoom" id="instagram-btn" style="margin: auto;margin-bottom: 20px;">
                    <h3 class="card-feature__title" style="color: #F809F5;">Instagram</h3>
                </div>
                <div class="card card-feature text-center text-lg-left gradient-border3 zoom" id="youtube-btn" style="margin: auto;margin-bottom: 20px;">
                    <h3 class="card-feature__title" style="color: #F80909;">Youtube</h3>
                </div>
                <div class="card card-feature text-center text-lg-left gradient-border4 zoom" id="linkedin-btn" style="margin: auto;margin-bottom: 20px;">
                    <h3 class="card-feature__title" style="color: #437AA0;">Linkedin</h3>
                </div>
            </div>
            <div class="row" style="position: relative;">
                <div class="col-md-12" >
                    <img src="img/laptop-transprant.png" style="width: 100%">
                </div>

                <div class="cover" id="calendar-display" style="display: none;">
                    <div id="calendar"></div>
                </div>
                <!--facebook display media size-->
                <div id="facebook-display">
                    <!--screensize>1200-->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-1200" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: 6.5%;left: calc(50% - 16em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>

                     <!--screensize>992-->
                      <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-992" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: 6.5%;left: calc(50% - 16em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>

                     <!--screensize>767-->
                      <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-767" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="480" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: 6.5%;left: calc(50% - 16em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>

                      <!--screensize>576-->
                      <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-576" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="360" data-height="220" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: 6.5%;left: calc(50% - 12em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>

                     <!--screensize>450-->
                      <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-450" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="300" data-height="190" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: calc(50% - 9.5em);left: calc(50% - 10.5em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>

                      <!--screensize>320-->
                      <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
                     <div id="facebook-display-320" class="fb-page" data-href="https://www.facebook.com/adamscarsqld.com.au/" data-tabs="timeline" data-width="200" data-height="120" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" style="position: absolute;top: calc(50% - 6em);left: calc(50% - 7em); display: none;"><blockquote cite="https://www.facebook.com/adamscarsqld.com.au/" class="fb-xfbml-parse-ignore"></blockquote>
                     </div>
                </div>
            
                <div id="youtube-display">

                    <div id="youtube-display-1200" class="" style="left: calc(50% - 26em); ;position: absolute;top: 6%; display: none;">
                        <!-- <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe> -->
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="750" height="500" frameborder="0"></iframe>
                    </div>
                    <div id="youtube-display-992" class="" style="left: calc(50% - 21em); ;position: absolute;top: 7%; display: none;">
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="600" height="400" frameborder="0"></iframe>
                    </div>
                    <div id="youtube-display-767" class="" style="left: calc(50% - 17em); ;position: absolute;top: 7%; display: none;">
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="480" height="300" frameborder="0"></iframe>
                    </div>
                    <div id="youtube-display-576" class="" style="left: calc(50% - 12.7em); ;position: absolute;top: 7%; display: none;">
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="360" height="220" frameborder="0"></iframe>
                    </div>
                    <div id="youtube-display-450" class="" style="left: calc(50% - 10.4em); ;position: absolute;top: calc(50% - 10.2em); display: none;">
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="300" height="190" frameborder="0"></iframe>
                    </div>
                    <div id="youtube-display-320" class="" style="left: calc(50% - 7em);position: absolute;top: calc(50% - 6.5em);display: none;">
                        <iframe src="https://www.youtube.com/embed/QH2-TGUlwu4" width="200" height="120" frameborder="0"></iframe>
                    </div>

                </div>
                
                
                <div class="cover" id="instagram-display" style="display: none;">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BSy-EX0jZ8z/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BSy-EX0jZ8z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BSy-EX0jZ8z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by National Geographic (@natgeo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-04-12T19:05:44+00:00">Apr 12, 2017 at 12:05pm PDT</time></p></div></blockquote>
                    <script async src="https://www.instagram.com/embed.js"></script>
                </div>
            
                
                <div id="linkedin-display">
                    <div id="linkedin-display-1200" style="position: absolute;top: 6.5%;left: calc(50% - 17em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="500" width="500" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>
                    
                    <div id="linkedin-display-992" style="position: absolute;top: 6.5%;left: calc(50% - 17em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="400" width="500" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>

                    <div id="linkedin-display-767" style="position: absolute;top: 6.5%;left: calc(50% - 17em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="300" width="480" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>

                    <div id="linkedin-display-576" style="position: absolute;top: 6.5%;left: calc(50% - 12.5em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="220" width="360" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>

                    <div id="linkedin-display-450" style="position: absolute;top: calc(50% - 10em);left: calc(50% - 10.5em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="190" width="300" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>

                    <div id="linkedin-display-320" style="position: absolute;top: calc(50% - 6.5em);
                        left: calc(50% - 7em); display: none;">
                        <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6637779135055966209" height="120" width="200" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                    </div>
                </div>   
            </div>
            
        </div>
    </section>
    <!--================ Social section end =================--> 

    <!--================ Buy-Sell-Auction section start =================-->      
    <section class="feature-section">
        <div class="col-md-8">
        <div class="row">
            <div class="col-md-12" style="display: flex;margin-left: 45%">
                <div class="col-md-6">
                    <h1 style="font-family:'Vollkorn'; color: black; text-align: center; ">Are you Buying</h1>
                    <img src="img/1.png">
                </div>
                <div class="col-md-6">
                    <h1 style="font-family:'Vollkorn'; color: black; text-align: center; ">Auto Auctions</h1>
                    <img src="img/3.png">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12" style="display: flex;margin-left: 50%;margin-top: 50px">
                    <div class="col-md-6">
                        <h1 style="font-family:'Vollkorn'; color: black; text-align: center; ">Are you Selling</h1>
                        <img src="img/2.png">
                    </div>
                    <div class="col-md-6">
                        <h1 style="font-family:'Vollkorn'; color: black; text-align: center; ">Tenders</h1>
                        <img src="img/4.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Buy-Sell-Auction section end =================-->  

        
   

    

    <!-- start footer Area -->
    <footer class="footer-area">
        <div class="container">   
            <div class="row footer-bottom d-flex justify-content-between">
                <h5 class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <span><strong>Raffale</strong></span>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-sm-12 footer-social">
            <h4>(+01) – 256 567 550</h4>
        </div> -->
    </footer>

<input type="hidden" name="element" id="element" value="">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        var iw = $( window ).width();

        $('#facebook-btn').click(function(){
            $('#element').val('f');
            console.log("faceclick", iw)
            $('#facebook-display').show();
            if(iw>1200){
                $('#facebook-display-1200').show();
                $('#facebook-display-992').hide();
                $('#facebook-display-767').hide();
                $('#facebook-display-576').hide();
                $('#facebook-display-450').hide();
                $('#facebook-display-320').hide();
            }
            if(992<=iw && iw<1200){
                $('#facebook-display-992').show();

            }
            if(767<=iw && iw<992){
                
                $('#facebook-display-767').show();

            }
            if(576<=iw && iw<767){
                
                $('#facebook-display-576').show();
                
            }
            if(450<=iw && iw<576){
                
                $('#facebook-display-450').show();
    
            }
            if(iw<450){
                $('#facebook-display-320').show();
            }

            $('#calendar-display').css('display','none');
            $('#youtube-display').css('display','none');
            $('#instagram-display').css('display','none');
            $('#linkedin-display').css('display','none');

        });

        $('#youtube-btn').click(function(){
            $('#element').val('y');
            $('#facebook-display').css('display','none');
            $('#calendar-display').css('display','none');
            $('#youtube-display').show();
            console.log(iw);
            if(iw>1200){
                console.log("youclick",iw);

                $('#youtube-display-1200').show();
                // $('#youtube-display-992').hide();
                // $('#youtube-display-767').hide();
                // $('#youtube-display-576').hide();
                // $('#youtube-display-450').hide();
                // $('#youtube-display-320').hide();
            }
            if(992<=iw && iw<1200){
                $('#youtube-display-992').show();
            }
            if(767<=iw && iw<992){
                
                $('#youtube-display-767').show();

            }
            if(576<=iw && iw<767){
                
                $('#youtube-display-576').show();
                
            }
            if(450<=iw && iw<576){
                
                $('#youtube-display-450').show();
    
            }
            if(iw<450){
                $('#youtube-display-320').show();
            }
            $('#instagram-display').css('display','none');
            $('#linkedin-display').css('display','none');
        });
        $('#instagram-btn').click(function(){
            $('#element').val('i');
            $('#facebook-display').css('display','none');
            $('#calendar-display').css('display','none');
            $('#youtube-display').css('display','none');
            $('#instagram-display').css('display','block');
            $('#linkedin-display').css('display','none');
        });
        $('#linkedin-btn').click(function(){
            $('#element').val('l');
            $('#facebook-display').css('display','none');
            $('#calendar-display').css('display','none');
            $('#youtube-display').css('display','none');
            $('#instagram-display').css('display','none');
            $('#linkedin-display').show();
            
            if(iw>1200){
                $('#linkedin-display-1200').show();
                // $('#linkedin-display-992').hide();
                // $('#linkedin-display-767').hide();
                // $('#linkedin-display-576').hide();
                // $('#linkedin-display-450').hide();
                // $('#linkedin-display-320').hide();
            }
            if(992<=iw && iw<1200){
                $('#linkedin-display-992').show();
            }
            if(767<=iw && iw<992){
                
                $('#linkedin-display-767').show();

            }
            if(576<=iw && iw<767){
                
                $('#linkedin-display-576').show();
                
            }
            if(450<=iw && iw<576){
                
                $('#linkedin-display-450').show();
    
            }
            if(iw<450){
                $('#linkedin-display-320').show();
            }

        });
        $('#calendar-btn').click(function(){
            $('#element').val('c');
            $('#facebook-display').css('display','none');
            $('#calendar-display').css('display','block');
            $('#youtube-display').css('display','none');
            $('#instagram-display').css('display','none');
            $('#linkedin-display').css('display','none');
        });


        $( window ).resize(function() {
            let w = $( window ).width();
            if(w>1200){
                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').show();
                    $('#facebook-display-992').hide();
                    $('#facebook-display-767').hide();
                    $('#facebook-display-576').hide();
                    $('#facebook-display-450').hide();
                    $('#facebook-display-320').hide();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').show();
                    $('#youtube-display-992').hide();
                    $('#youtube-display-767').hide();
                    $('#youtube-display-576').hide();
                    $('#youtube-display-450').hide();
                    $('#youtube-display-320').hide();
                }
                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').show();
                    $('#linkedin-display-992').hide();
                    $('#linkedin-display-767').hide();
                    $('#linkedin-display-576').hide();
                    $('#linkedin-display-450').hide();
                    $('#linkedin-display-320').hide();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
                
            }

            if(992<=w && w<1200){
                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').hide();
                    $('#facebook-display-992').show();
                    $('#facebook-display-767').hide();
                    $('#facebook-display-576').hide();
                    $('#facebook-display-450').hide();
                    $('#facebook-display-320').hide();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').hide();
                    $('#youtube-display-992').show();
                    $('#youtube-display-767').hide();
                    $('#youtube-display-576').hide();
                    $('#youtube-display-450').hide();
                    $('#youtube-display-320').hide();
                }
                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').hide();
                    $('#linkedin-display-992').show();
                    $('#linkedin-display-767').hide();
                    $('#linkedin-display-576').hide();
                    $('#linkedin-display-450').hide();
                    $('#linkedin-display-320').hide();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
            }
            if(767<=w && w<992){
                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').hide();
                    $('#facebook-display-992').hide();
                    $('#facebook-display-767').show();
                    $('#facebook-display-576').hide();
                    $('#facebook-display-450').hide();
                    $('#facebook-display-320').hide();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').hide();
                    $('#youtube-display-992').hide();
                    $('#youtube-display-767').show();
                    $('#youtube-display-576').hide();
                    $('#youtube-display-450').hide();
                    $('#youtube-display-320').hide();
                }
                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').hide();
                    $('#linkedin-display-992').hide();
                    $('#linkedin-display-767').show();
                    $('#linkedin-display-576').hide();
                    $('#linkedin-display-450').hide();
                    $('#linkedin-display-320').hide();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
                
            }
            if(576<=w && w<767){

                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').hide();
                    $('#facebook-display-992').hide();
                    $('#facebook-display-767').hide();
                    $('#facebook-display-576').show();
                    $('#facebook-display-450').hide();
                    $('#facebook-display-320').hide();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').hide();
                    $('#youtube-display-992').hide();
                    $('#youtube-display-767').hide();
                    $('#youtube-display-576').show();
                    $('#youtube-display-450').hide();
                    $('#youtube-display-320').hide();
                }

                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').hide();
                    $('#linkedin-display-992').hide();
                    $('#linkedin-display-767').hide();
                    $('#linkedin-display-576').show();
                    $('#linkedin-display-450').hide();
                    $('#linkedin-display-320').hide();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
            }

            if(450<=w && w<576){

                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').hide();
                    $('#facebook-display-992').hide();
                    $('#facebook-display-767').hide();
                    $('#facebook-display-576').hide();
                    $('#facebook-display-450').show();
                    $('#facebook-display-320').hide();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').hide();
                    $('#youtube-display-992').hide();
                    $('#youtube-display-767').hide();
                    $('#youtube-display-576').hide();
                    $('#youtube-display-450').show();
                    $('#youtube-display-320').hide();
                }
                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').hide();
                    $('#linkedin-display-992').hide();
                    $('#linkedin-display-767').hide();
                    $('#linkedin-display-576').hide();
                    $('#linkedin-display-450').show();
                    $('#linkedin-display-320').hide();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
            }

            if(w<450){
                if($('#element').val() == 'f'){
                    $('#facebook-display-1200').hide();
                    $('#facebook-display-992').hide();
                    $('#facebook-display-767').hide();
                    $('#facebook-display-576').hide();
                    $('#facebook-display-450').hide();
                    $('#facebook-display-320').show();
                }
                if($('#element').val() == 'y'){
                    $('#youtube-display-1200').hide();
                    $('#youtube-display-992').hide();
                    $('#youtube-display-767').hide();
                    $('#youtube-display-576').hide();
                    $('#youtube-display-450').hide();
                    $('#youtube-display-320').show();
                }
                if($('#element').val() == 'l'){
                    $('#linkedin-display-1200').hide();
                    $('#linkedin-display-992').hide();
                    $('#linkedin-display-767').hide();
                    $('#linkedin-display-576').hide();
                    $('#linkedin-display-450').hide();
                    $('#linkedin-display-320').show();
                }
                if($('#element').val() == 'i'){

                    $('#instagram-display').show();
                }
                if($('#element').val() == 'c'){

                    $('#calendar-display').show();
                }
            }
        });
        
        // var observer = new MutationObserver( function( mutations ) {
        //     mutations.forEach( function( { type, target } ) {
        //     if ( type === 'attributes' && target.tagName.toLowerCase() === 'iframe' ) {

        //         console.log(target);
        //         console.log(target.style.height);
        //         console.log(target.height);

        //         target.style.height = '100px';
        //     }
        //   } );
        // } );

        // observer.observe( document.querySelector( '#instagram-display'), { attributes: true, childList: true, subtree: true } );

    });

    

</script>

<script>
    $(document).ready(function(e){
        calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Monday");
        calendar.funcPer = function(ev){
            console.log(ev)
        };
        calendar.diasResal = [4,15,26]
        calendar.createCalendar();
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>