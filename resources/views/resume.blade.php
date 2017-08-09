<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mohd Zafri Zulkipli</title>

    <!-- Bootstrap -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <!-- Material Design Icons -->
    <link href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    {{--<link href="css/owl.carousel.css" rel="stylesheet">--}}
    {{--<link href="css/owl.theme.default.css" rel="stylesheet">--}}
    <!-- Style.css -->
    {{--<link href="css/style.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Slide Out -->
<div class="slide-out-overlay"></div>
<div class="slide-out">
    <header class="slide-out-header clearfix">
        <div class="clearfix">
            <a href="" class="slide-out-close pull-left"><i class="md md-close"></i></a>
            <a href="" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
        </div> <!-- end .clearfix -->
        <!-- Popup -->
        <div class="slide-out-popup">
            <nav class="social-nav">
                <ul class="list-unstyled">
                    <li><a href="//www.facebook.com/ZaffJa" target="_blank">Facebook</a></li>
                    <li><a href="//twitter.com/ZafriZulkipli" target="_blank">Twitter</a></li>
                    <li><a href="//www.linkedin.com/in/mohd-zafri-zulkipli-02459411a/" target="_blank">Linkedin</a></li>
                </ul> <!-- end .list-unstyled -->
            </nav> <!-- end .social-nav -->
        </div> <!-- end .slide-out-popup -->
        <div class="image"><img src="images/zafri_profile.png" alt="alt text" class="img-responsive"></div>
        <div class="content">
            <h5>Mohd Zafri</h5>
            <span>Web & Mobile App Developer</span>
        </div> <!-- end .content -->
        <div class="text-right">
            <a href="Resume%20-MOHD%20ZAFRI.pdf" target="_blank" class="button link-button white icon-left"><i class="md md-file-download"></i>Download Resume</a>
        </div> <!-- end .text-right -->
    </header> <!-- end .slide-out-header -->
    <div class="slide-out-widgets">
        <div class="slide-out-widget">
            <h4>'Lepak' With Me Today</h4>
            <form action="{{ route('post.contact-us') }}" class="form-horizontal contact-form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="contact-name" name="contact-name" />
                    </div> <!-- end .col-sm-9 -->
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="contact-email" name="contact-email" />
                    </div> <!-- end .col-sm-9 -->
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Message</label>
                    <div class="col-sm-9">
                        <textarea name="contact-message" class="contact-message" rows="3"></textarea>
                    </div> <!-- end .col-sm-9 -->
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="button solid-button purple">Send Message</button>
                    </div> <!-- end .col-sm-9 -->
                </div> <!-- end .form-group -->
                <div class="contact-loading alert alert-info form-alert">
                    <span class="message">Sending...</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                </div>
                <div class="contact-success alert alert-success form-alert">
                    <span class="message">Success!</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                </div>
                <div class="contact-error alert alert-danger form-alert">
                    <span class="message">Error!</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
                </div>
            </form> <!-- end contact-form -->
        </div> <!-- end .slide-out-widget -->
    </div> <!-- end .slide-out-widgets -->
</div> <!-- end .slide-out -->

<!-- Header -->
<header class="header">
    <div class="top clearfix">
        <a href="#section7" class="available"><i class="ion-ios-email-outline"></i><span>Available For Freelance</span></a>
        <div class="right-icons">
            <a href="" class="open-search header-open-search"></a>
            <a href="/Resume%20-MOHD%20ZAFRI.pdf" target="_blank" class="download"><i class="md md-file-download"></i></a>
            <a href="" class="share"><i class="md md-more-vert"></i></a>
        </div> <!-- end .right-icons -->
        <!-- Popup -->
        <div class="popup">
            <nav class="social-nav">
                <ul class="list-unstyled">
                    <li><a href="//www.facebook.com/ZaffJa" target="_blank">Facebook</a></li>
                    <li><a href="//twitter.com/ZafriZulkipli" target="_blank">Twitter</a></li>
                    <li><a href="//www.linkedin.com/in/mohd-zafri-zulkipli-02459411a/" target="_blank">Linkedin</a></li>
                </ul> <!-- end .list-unstyled -->
            </nav> <!-- end .social-nav -->
        </div> <!-- end .popup -->
    </div> <!-- end .top -->
    <div class="bottom clearfix">
        <div class="title"><img src="/images/zaff_logo_name.png" style="height: 50px; width: 110px;" alt=""></div>
        <div class="header-action-button-wrapper">
            <a href="" class="header-action-button action-button"><i class="md md-add"></i></a>
        </div> <!-- end .header-action-button-wrapper -->
        <a href="" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
        <nav class="main-nav">
            <ul class="list-unstyled">
                <li class="active"><a href="#section1">Home</a></li>
                <li><a href="#section2">About</a></li>
                <li><a href="#section3">Skill</a></li>
                <li><a href="#section4">Experience</a></li>
                <li><a href="#section5">Education</a></li>
                <li><a href="#section6">Blog</a></li>
                <li><a href="#section7">Contact</a></li>
            </ul>
        </nav> <!-- end .main-nav -->
    </div> <!-- end .bottom -->
</header> <!-- end .header -->
<div class="responsive-menu">
    <a href="" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

<!-- Section Navigation -->
<div class="section-nav">
    <nav class="section1">
        <a href="#section2" class="forward"><i class="md md-chevron-right"></i></a>
        <a href="#section1" class="backward"><i class="md md-chevron-left"></i></a>
    </nav>
</div> <!-- end .section-nav -->

<!-- Sections -->
<div class="sections">
    <div class="sections-wrapper clearfix">

        <!-- Home -->
        <section id="section1" class="no-padding-bottom active">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 vertical-center padding-fix">
                        <h1>Develop<sup>+</sup> Design<sup>+</sup> Web<sup>+</sup>Mobile <sup>+</sup></h1>
                        <p>Hello, I’m Zafri. I Have 2 years of experience in Web Development. I worked whenever
                            there's work for me to do.</p>
                        <p class="button-row">
                            <a href="#section7" class="button solid-button white available">Hire Me Now</a>
                            <a href="/Resume%20-MOHD%20ZAFRI.pdf" target="_blank" class="button solid-button purple">Download CV</a></p>
                    </div> <!-- end .col-sm-7 -->
                    <div class="col-sm-5 vertical-center">
                        <img src="images/zafri_new.png" alt="man" class="img-responsive section-img">
                    </div> <!-- end .col-sm-5 -->
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- About -->
        <section id="section2">
            <div class="container">
                <h2>About Me</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="images/zafri.png" alt="man" class="img-responsive section-img">
                    </div> <!-- end .col-sm-3 -->
                    <div class="col-sm-9">
                        <h3 class="small-margin-bottom">Mohd Zafri Zulkipli</h3>
                        <h5>Web & App Developer</h5>
                        <div class="signature"></div>
                        <ul class="list-unstyled text-uppercase">
                            <li><b>Date Of Birth:</b> 17 Apr 1994</li>
                            <li><b>Phone:</b> 017-440 3225</li>
                            <li><b>Email:</b> <span style="text-transform: lowercase; color: #4BA84A">zafrizulkipli@gmail.com | zafri@kuhosu.com</span></li>
                        </ul> <!-- end .list-unstyled -->
                        <div class="spacer"></div>
                        <h3>What I'm Doing</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="service">
                                    <div class="icon"><i class="ion-monitor"></i></div>
                                    <h5>Web Development</h5>
                                </div> <!-- end .service -->
                            </div> <!-- end .col-sm-4 -->
                            <div class="col-sm-4">
                                <div class="service">
                                    <div class="icon"><i class="ion-iphone"></i></div>
                                    <h5>App Development</h5>
                                </div> <!-- end .service -->
                            </div> <!-- end .col-sm-4 -->
                            <!--<div class="col-sm-4">
                                <div class="service">
                                    <div class="icon"><i class="ion-trophy"></i></div>
                                    <h5>Marketing</h5>
                                </div>
                            </div> --> <!-- end .col-sm-4 -->
                        </div> <!-- end .row -->
                    </div> <!-- end .col-sm-9 -->
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- Skills -->
        <section id="section3">
            <div class="container">
                <h2>My Skills Values</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Technical Skills</h4>
                        <label class="progress-bar-label">Wordpress</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>60%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                        <label class="progress-bar-label">Photoshop</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>60%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                        <label class="progress-bar-label">HTML&amp;CSS</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>75%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                        <label class="progress-bar-label">Javascript</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>67%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                        <label class="progress-bar-label">Laravel Framework</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>80%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                        <label class="progress-bar-label">Ionic Framework</label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                 aria-valuemax="100">
                                <span>70%</span>
                            </div> <!-- end .progress-bar -->
                        </div> <!-- end .progress -->
                    </div> <!-- end .col-sm-6 -->
                    <div class="col-sm-6">
                        <h4>Knowledge</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-icons purple bold-list">
                                    <li><i class="md-arrow-forward"></i>Web Development</li>
                                    <li><i class="md-arrow-forward"></i>Mobile App Development</li>
                                    <li><i class="md-arrow-forward"></i>Graphical Design</li>
                                    <li><i class="md-arrow-forward"></i>User Training & Support</li>
                                    <li><i class="md-arrow-forward"></i>LEMP Server Deployment</li>
                                    <li><i class="md-arrow-forward"></i>Debugging & Troubleshooting</li>
                                    <li><i class="md-arrow-forward"></i>Software Documentation</li>
                                </ul>
                            </div> <!-- end .col-sm-6 -->
                        </div> <!-- end .row -->
                    </div> <!-- end .col-sm-6 -->
                </div> <!-- end .row -->
                <div class="spacer"></div>
                <h4>Language Skills</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="circle-progress-wrapper clearfix">
                            <div class="circle-progress">
                                <input type="text" class="dial" value="99" data-color="#4BA84A" data-from="0"
                                       data-to="99"/>
                            </div> <!-- end .circle-progress -->
                            <div class="circle-progress-label-wrapper"><label class="circle-progress-label">English
                                    Experienced</label></div>
                        </div> <!-- end .circle-progress-wrapper -->
                    </div> <!-- end .col-sm-4 -->
                    <div class="col-sm-6">
                        <div class="circle-progress-wrapper clearfix">
                            <div class="circle-progress">
                                <input type="text" class="dial" value="99" data-color="#4BA84A" data-from="0"
                                       data-to="99"/>
                            </div> <!-- end .circle-progress -->
                            <div class="circle-progress-label-wrapper"><label class="circle-progress-label">Malay
                                    Experienced</label></div>
                        </div> <!-- end .circle-progress-wrapper -->
                    </div> <!-- end .col-sm-4 -->

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- Experience -->
        <section id="section4">
            <div class="container">
                <h2>3 Years Experience</h2>
                <div class="experience-timeline">
                    <div class="experience-block clearfix">
                        <div class="meta">
                            <span class="year">2016 - Present</span>
                            <span class="company"><a href="http://www.eazycanner.com">EazyCanner</a></span>
                        </div> <!-- end .meta -->
                        <div class="content">
                            <h5>Web Master</h5>
                            <p>Maintain a wordpress site.</p>
                        </div> <!-- end .content -->
                        <div class="icon">
                            <i class="ion-android-desktop"></i>
                        </div> <!-- end .icon -->
                        <div class="line"></div>
                    </div> <!-- end .experience-block -->
                    <div class="experience-block clearfix">
                        <div class="meta">
                            <span class="year">2016 - Present</span>
                            <span class="company"><a href="http://kongsiberita.my">Kongsi Berita</a></span>
                        </div> <!-- end .meta -->
                        <div class="content">
                            <h5>Web Developer</h5>
                            <p>Handles backend and some frontend of the system. Kongsi Berita is a two part system one is the web app and the other is mobile app.</p>
                        </div> <!-- end .content -->
                        <div class="icon">
                            <i class="ion-android-desktop "></i>
                        </div> <!-- end .icon -->
                        <div class="line"></div>
                    </div> <!-- end .experience-block -->
                    <div class="experience-block clearfix">
                        <div class="meta">
                            <span class="year">2016 - 2017</span>
                            <span class="company">Car Ride or Rental</span>
                        </div> <!-- end .meta -->
                        <div class="content">
                            <h5>Web & Mobile App Developer</h5>
                            <p>My final year project involves web app for administration part and mobile app which is a combination of a strip down version of Uber and Car Rental</p>
                        </div> <!-- end .content -->
                        <div class="icon">
                            <i class="ion-android-desktop "></i>
                        </div> <!-- end .icon -->
                        <div class="line"></div>
                    </div> <!-- end .experience-block -->
                    <div class="experience-block clearfix">
                        <div class="meta">
                            <span class="year">2016 - 2017</span>
                            <span class="company"><a href="//eduhub.my">Eduhub</a></span>
                        </div> <!-- end .meta -->
                        <div class="content">
                            <h5>Web Developer</h5>
                            <p>Develop admin dashboards for eduhub systems as part of my internship work</p>
                        </div> <!-- end .content -->
                        <div class="icon">
                            <i class="ion-android-desktop "></i>
                        </div> <!-- end .icon -->
                        <div class="line"></div>
                    </div> <!-- end .experience-block -->
                    <div class="experience-block clearfix">
                        <div class="meta">
                            <span class="year">2015 - Present</span>
                            <span class="company"><a href="http://kuhosu.com">Kuhosu Studio</a></span>
                        </div> <!-- end .meta -->
                        <div class="content">
                            <h5>Backend Web Developer</h5>
                            <p>A startup company that I'm part of.</p>
                        </div> <!-- end .content -->
                        <div class="icon">
                            <i class="ion-android-desktop "></i>
                        </div> <!-- end .icon -->
                    </div> <!-- end .experience-block -->
                </div> <!-- end .experience-timeline -->
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- Education -->
        <section id="section5">
            <div class="container">
                <h2>Educational Value</h2>
                <div class="education clearfix">
                    <div class="item">
                        <div class="marker"></div>
                        <div class="content">
                            <span>Sekolah Menengah Kebangsaan Ibrahim</span>
                            <h4>SPM Cert</h4>
                        </div>
                        <div class="year">2007 - 2011</div>
                    </div> <!-- end item -->
                    <div class="item">
                        <div class="marker"></div>
                        <div class="content">
                            <span>Kolej Matrikulasi Kedah</span>
                            <h4>Matriculation Cert</h4>
                        </div>
                        <div class="year">2012 - 2013</div>
                    </div> <!-- end item -->
                    <div class="item">
                        <div class="marker"></div>
                        <div class="content">
                            <span>Universiti Teknologi Malaysia</span>
                            <h4>Bachelor of Science Computer</h4>
                        </div>
                        <div class="year">2013 - 2017</div>
                    </div> <!-- end item -->
                    <div class="line"></div>
                </div> <!-- end .education -->
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- Blog -->
        <section id="section6">
            <div class="container">
                <h1>Coming Soon</h1>
                <h2>In the meantime watch some <a href="https://www.youtube.com/user/TEDxTalks">videos</a> that will get you inspired.</h2>
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

        <!-- Contact -->
        <section id="section7">
            <div class="container">
                <h2>Get In Touch With Me</h2>
                <div class="row">
                    <div class="col-sm-5">
                        <h5>Contact Address</h5>
                        <ul class="list-icons list-unstyled">
                            <li><i class="ion-ios-location-outline"></i>N/A</li>
                            <li><i class="ion-iphone"></i>Phone: +60 17-440-3225</li>
                            <li><i class="ion-ios-email-outline"></i>Email: <strong style="color:#4BA84A;">zafrizulkipli@gmail.com</strong> | <strong style="color:#4BA84A;">zafri@kuhosu.com</strong>
                            </li>
                        </ul>
                        <div class="spacer"></div>
                        <div class="social-icons">
                            <a href="//www.facebook.com/ZaffJa" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
                            <a href="//twitter.com/ZafriZulkipli" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
                            <a href="//www.linkedin.com/in/mohd-zafri-zulkipli-02459411a/" target="_blank" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        </div> <!-- end .social-icons -->
                        <div class="spacer"></div>
                    </div>
                    <div class="col-sm-7">
                        <h5>Contact Form</h5>
                        <form action=" {{ route('post.contact-us') }}"
                              class="form-horizontal contact-form">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="contact-name" name="contact-name"/>
                                </div> <!-- end .col-sm-10 -->
                            </div> <!-- end .form-group -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="contact-email" name="contact-email"/>
                                </div> <!-- end .col-sm-10 -->
                            </div> <!-- end .form-group -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea name="contact-message" class="contact-message" rows="3"></textarea>
                                </div> <!-- end .col-sm-10 -->
                            </div> <!-- end .form-group -->
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="button solid-button purple">Send Message</button>
                                </div> <!-- end .col-sm-10 -->
                            </div> <!-- end .form-group -->
                            <div class="contact-loading alert alert-info form-alert">
                                <span class="message">Sending...</span>
                                <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                            class="fa fa-times"></i></button>
                            </div>
                            <div class="contact-success alert alert-success form-alert">
                                <span class="message">Success!</span>
                                <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                            class="fa fa-times"></i></button>
                            </div>
                            <div class="contact-error alert alert-danger form-alert">
                                <span class="message">Error!</span>
                                <button type="button" class="close" data-hide="alert" aria-label="Close"><i
                                            class="fa fa-times"></i></button>
                            </div>
                        </form> <!-- end contact-form -->
                    </div>
                </div>
            </div> <!-- end .container -->
        </section> <!-- end #section1 -->

    </div> <!-- end .sections-wrapper -->
</div> <!-- end .sections -->

<!-- Footer -->
<footer class="footer">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Address</h4>
                    <p>N/A</p>
                </div> <!-- end .col-sm-4 -->
                <div class="col-sm-4">
                    <h4>Connect</h4>
                    <div class="social-icons">
                        <a href="//www.facebook.com/ZaffJa" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="//twitter.com/ZafriZulkipli" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="//www.linkedin.com/in/mohd-zafri-zulkipli-02459411a/" target="_blank" class="social-icon"><i class="fa fa-linkedin"></i></a>
                    </div> <!-- end .social-icons -->
                </div> <!-- end .col-sm-4 -->
                <div class="col-sm-4">
                    <h4>Contact</h4>
                    <p>Tel: +60 17-440-3225<br/>Mail: zafrizulkipli@gmail.com | zafri@kuhosu.com</p>
                </div> <!-- end .col-sm-4 -->
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </div> <!-- end .footer -->
</footer> <!-- end .footer -->

{{--<!-- jQuery -->--}}
{{--<script src="js/jquery-1.11.2.min.js"></script>--}}
{{--<!-- Bootstrap -->--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<!-- Inview -->--}}
{{--<script src="js/jquery.inview.min.js"></script>--}}
{{--<!-- SmoothScroll -->--}}
{{--<script src="js/smoothscroll.js"></script>--}}
{{--<!-- jQuery Knob -->--}}
{{--<script src="js/jquery.knob.min.js"></script>--}}
{{--<!-- Owl Carousel -->--}}
{{--<script src="js/owl.carousel.min.js"></script>--}}
{{--<!-- Isotope -->--}}
{{--<script src="js/isotope.pkgd.min.js"></script>--}}
{{--<!-- Images Loaded -->--}}
{{--<script src="js/imagesloaded.pkgd.min.js"></script>--}}
{{--<!-- google maps -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>--}}
{{--<!-- Scripts.js -->--}}
{{--<script src="js/scripts.min.js"></script>--}}
@include('analytics')
<script src="js/all.js"></script>


</body>
</html>