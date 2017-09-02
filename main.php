<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Weezykon | Get to know me</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" href="img/fav.png" sizes="16x16" type="image/png">
    <!-- All CSS file included here -->
    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Change ProfileImg -->
    <script type="text/javascript">
        window.onload = function () {
            // Profile
            var proCycle=['img/profile.jpg','img/profile2.jpg','img/profile3.jpg'];

            var randomNumber = Math.floor(Math.random() * proCycle.length);
            var classpro = proCycle[randomNumber];
            var a = document.getElementById('profileImg').getAttribute("src");
            var ab = document.getElementById('profileImg').setAttribute("src", classpro);
            // console.log(a);

            // Header
            var classCycle=['one-area','two-area','three-area','four-area','five-area','six-area','seven-area','eight-area','nine-area','ten-area','eleven-area','lastly-area'];

            var randomNumber = Math.floor(Math.random() * classCycle.length);
            var classToAdd = classCycle[randomNumber];
        
            $('#home').addClass(classToAdd);
            // console.log(classToAdd);
        };
        setInterval(function(){
            var proCycle=['img/profile.jpg','img/profile2.jpg','img/profile3.jpg'];

            var randomNumber = Math.floor(Math.random() * proCycle.length);
            var classpro = proCycle[randomNumber];
            var a = document.getElementById('profileImg').getAttribute("src");
            var ab = document.getElementById('profileImg').setAttribute("src", classpro);
            // console.log(a);
        }, 3000);
        setInterval(function(){
            var classCycle=['one-area','two-area','three-area','four-area','five-area','six-area','seven-area','eight-area','nine-area','ten-area','eleven-area','lastly-area'];

            var randomNumber = Math.floor(Math.random() * classCycle.length);
            var classToAdd = classCycle[randomNumber];
        
            $('#home').addClass(classToAdd);
            // console.log(classToAdd);
        }, 3000);
    </script>
</head>

<body id="top">
    <!-- Main wrapper start -->
    <div class="wrapper">
        <!-- Header area start -->
        <header id="header-area" class="header-area" data-spy="affix" data-offset-top="1">
            <nav class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navbar-inner">
                                <div class="logo">
                                    <a href="index.html#"><img src="img/log.png" alt="" /></a>
                                </div>
                                <div class="main-menu-wrapper" id="navigation">
                                    <ul class="nav navbar-nav navbar-right" id="main-menu">
                                        <li><a href="index.html#home">Home</a></li>
                                        <li><a href="index.html#about">About</a></li>
                                        <li><a href="index.html#service">Service</a></li>
                                        <li><a href="index.html#resume">Resume</a></li>
                                        <li><a href="index.html#works">Works</a></li>
                                        <li><a href="index.html#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="expand-menu-open">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header area end -->
        <!-- Slide menu start -->
        <div class="mainmenu-expand">
            <div class="close-menu">
                <i class="ti-close"></i>
            </div>
            <div class="menu-logo">
                <a href="index.html"><img src="img/log.png" alt=""></a>
            </div>
            <nav class="navbar">
                <div class="mainmenu-box" id="navigation-2">
                    <ul class="nav navbar-nav" id="slide-nav">
                        <li><a href="index.html#home">Home</a></li>
                        <li><a href="index.html#about">About</a></li>
                        <li><a href="index.html#service">Service</a></li>
                        <li><a href="index.html#resume">Resume</a></li>
                        <li><a href="index.html#works">Works</a></li>
                        <li><a href="index.html#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="sidebar-bookmark-area">
                <p>My Social Life:</p>
                <ul class="expand-social social-bookmark">
                    <li>
                        <a href="https://instagram.com/iamweezykon" target="_blank"><i class="ti-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/weezykon" target="_blank"><i class="ti-github"></i></a>
                    </li>
                    <li>
                        <a href="https://medium.com/@weezykon" target="_blank"><i class="fa fa-medium"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/weezykon" target="_blank"><i class="ti-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <p class="expand-copyright">Copyright @ 2017 <a href="#">Weezykon</a></p>
        </div>
        <!-- Slide menu end -->
        <!-- Content area start  -->
        <div class="content">
            <!-- Slider area start -->
            <div class="slider-area" id="home">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-content-wrapper">
                                <div class="slider-content text-center">
                                    <h3>Howdy,</h3>
                                    <h1 class="cd-headline clip is-full-width" style="color:#AE0D7E !important">
                                        <span>I am</span>
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Weezykon</b>
                                            <b>A Graphics Designer</b>
                                            <b>A Web Designer</b>
                                            <b>A Full Stack Developer</b>
                                        </span>
                                    </h1>
                                    <h1 class="mobile-slider-title">I am Weezykon</h1>
                                    <ul class="profile-description">
                                        <li>GRAPHICS</li>
                                        <li>DESIGNER</li>
                                        <li>FULL STACK DEV</li>
                                    </ul>
                                </div>
                                <div class="header-social social-bookmark">
                                    <ul>
                                        <li>
                                            <a href="https://instagram.com/iamweezykon" target="_blank"><i class="ti-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/weezykon" target="_blank"><i class="ti-github"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://medium.com/@weezykon" target="_blank"><i class="fa fa-medium"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/weezykon" target="_blank"><i class="ti-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/in/akinbode-akinlolu-weezykon-5b005068/" target="_blank"><i class="ti-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider area end -->
            <!-- About area start -->
            <div class="about-area white-bg pt-110" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="profile-image">
                                <img src="" alt="" id="profileImg">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
                            <div class="profile-wrapper pt-115">
                                <div class="section-title">
                                    <h1>Info</h1>
                                </div>
                                <div class="profile-details">
                                    <p>I'm Akinbode Akinlolu, Handle across all social media is <span style="color:#B41F88;">@Weezykon</span>, I am a Full Stack Web Developer. I love everything that has to do with Tech, Graphic design, Training, Content writing and a true feeling for typography. I am a Nigerian  born in Lagos, an origin of Ogun state</p>
                                    <p>Most recently, my responsibilities as a Full Stack Web Developer at Pinfoot Inc has made me known more languages, like AngularJs, Worked on Codeigniter, Webtask.io and much more.I love working with people, especially if they have the same passion I have for what they do.</p>
                                </div>
                                <div class="profile-action-btn">
                                    <a class="button" href="index.html#">HIRE ME</a>
                                    <!-- <a class="button button-white" href="cv.pdf" target="_blank">CV</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About area end -->
            <!-- Skill area start -->
            <div class="skill-area white-bg pt-100 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>My Skills</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="progress-wrapper">
                                <div class="single-progressbar">
                                    <h6>Photoshop</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay=".5s" data-wow-duration="0.5s">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Illustrator</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay=".6s" data-wow-duration="0.6s">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Php/Mysql</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;" data-wow-delay=".5s" data-wow-duration="0.5s">
                                            <span>93%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Html/Css</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;" data-wow-delay=".6s" data-wow-duration="0.6s">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Wordpress</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay=".6s" data-wow-duration="0.6s">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress-wrapper">
                                <div class="single-progressbar">
                                    <h6>Jquery</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" data-wow-delay=".7s" data-wow-duration="0.7s">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>AngularJs</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-wow-delay=".8s" data-wow-duration="0.8s">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Bootstrap</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay=".7s" data-wow-duration="0.7s">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>Php Framework</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;" data-wow-delay=".8s" data-wow-duration="0.8s">
                                            <span>83%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-progressbar">
                                    <h6>JS(generally)</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" data-wow-delay=".8s" data-wow-duration="0.8s">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skill area end -->
            <!-- Service area start -->
            <div class="service-area gray-bg pt-110 pb-80" id="service">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>My Specialities</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-slider-wrapper">
                                <div class="service-slider">
                                    <div class="single-service">
                                        <div class="service-content text-center">
                                            <i class="ti-palette"></i>
                                            <h5>Illustrators</h5>
                                        </div>
                                    </div>
                                    <div class="single-service">
                                        <div class="service-content text-center">
                                            <i class="ti-tablet"></i>
                                            <h5>UI/UX DESIGN</h5>
                                        </div>
                                    </div>
                                    <div class="single-service">
                                        <div class="service-content text-center">
                                            <i class="ti-server"></i>
                                            <h5>SOFTWARE DEVELOPMENT</h5>
                                        </div>
                                    </div>
                                    <div class="single-service">
                                        <div class="service-content text-center">
                                            <i class="ti-blackboard"></i>
                                            <h5>TRAINING</h5>
                                        </div>
                                    </div>
                                    <div class="single-service">
                                        <div class="service-content text-center">
                                            <i class="ti-desktop"></i>
                                            <h5>WEB DESIGN</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service area end -->
            <!-- Resume area start -->
            <div class="resume-area pt-110 pb-80 gray-bg" id="resume">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h1>Resume</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="resume-wrapper left">
                                <div class="resume-title">
                                    <h2> <span style="color:#B5288A;"><i class="ti-cup"></i></span>Education:</h2>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">2013.</p>
                                    <h4><span><img src="img/others/nh.png" alt=""></span>Diploma in Adv Web</h4>
                                    <p>Php, Mysql, Fireworks, Illustrator.</p>
                                    <h5>New Horizons Computer Training & Certification</h5>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">2013.</p>
                                    <h4><span><img src="img/others/nh.png" alt=""></span>Diploma in Web Design</h4>
                                    <p>Photoshop, Dreamweaver, Html5, Css3, Adobe Flash.</p>
                                    <h5>New Horizons Computer Training & Certification</h5>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">2007 - 2009.</p>
                                    <h4>Senior Secondary School Certificate</h4>
                                    <p>Waec</p>
                                    <h5>Sma College & Wisdom Spring School</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="resume-wrapper right">
                                <div class="resume-title">
                                    <h2> <span style="color:#B5288A;"><i class="ti-bag"></i></span>Experience:</h2>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">March 2017- Present</p>
                                    <h4><span><i class="fa fa-briefcase"></i></span>Firstlincoln Technologies</h4>
                                    <p>Worked on the sites below with the crew:<br/>seftonfross.com<br/>brandparliament.com<br/>nimn.com.ng<br/>imember.nimn.com.ng</p>
                                    <h5>Full Stack Developer</h5>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">March 2016- Present</p>
                                    <h4><span><i class="fa fa-briefcase"></i></span>Pinfoot</h4>
                                    <p>A Football Social Media Company</p>
                                    <h5>Full Stack Developer</h5>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">2015 September.</p>
                                    <h4><span><i class="fa fa-briefcase"></i></span>Softinvent Solutions</h4>
                                    <p>Among the crew who created the websites below:<br/> superproperty.com.ng</p>
                                    <h5>Web Developer (Freelance)</h5>
                                </div>
                                <div class="single-resume">
                                    <p class="work-duration">2012- 2014.</p>
                                    <h4><span><i class="fa fa-briefcase"></i></span>AGL Technologies</h4>
                                    <p>Among the crew who created the websites below: <br/>Cadanaija.com <br/>Furqancoutures.com <br/>Cygnushospitality.com</p>
                                    <h5>Web Developer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Resume area end -->
            <!-- Testimonial area start -->
            <div class="testimonial-area white-bg pt-110 pb-150" id="works">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h1>Personal Projects</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testimonial-wrapper">
                                <div class="testimonial-slider">
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>A Dynamic Hotel Management Portal</h4>
                                                <h6>Buchy Hotel App</h6>
                                                <p>Features: - Book Online - Attend To Guest Online, Add Rooms, Add Meals. -Account Credibility - Permission - Generate Staff Password (Then Send To mail).- Monitory Of Sales Daily.</p><p>
                                                <a href='http://hotel.penherz.com/admin' target="_blank" class="button">Demo</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>A Dynamic Cuisine Management Portal</h4>
                                                <h6>Kuche Cafe App</h6>
                                                <p>Features: - Order Meal Online - Add Meals. - Permission - Generate Staff Password (Then Send To mail). - Monitory Of Sales Daily -A Backend to frontend Web App.</p><p>
                                                <a href='http://kuche.penherz.com' target="_blank" class="button">Demo</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>A complete payroll system</h4>
                                                <h6>Crawford Payroll System</h6>
                                                <p>Features:- Add staff- Record staff payment.</p><p>
                                                <a href='https://github.com/weezykon/payroll' target="_blank" class="button">Source Code</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>Food Ordering Within Campus</h4>
                                                <h6>Cette Cuisine</h6>
                                                <p>Features:- Add meals, edit meals. - Order mealfrom hostel. - Print Invoice.
                                                </p><p>
                                                <a href='https://github.com/weezykon/cafe' target="_blank" class="button">Source Code</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>A Network Checker</h4>
                                                <h6>Net</h6>
                                                <p>All you have to do is just insert your digits either, +234, 080, 070, 90,234. it accepts all, then tells you which network that digits belong to</p><p>
                                                <a href='https://github.com/weezykon/network' target="_blank" class="button">Source Code</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial">
                                        <div class="testimonial-content-wrapper">
                                            <div class="testimonial-content text-center">
                                                <h4>Todo WebApp</h4>
                                                <h6>Todo</h6>
                                                <p>A well styled todo list.</p><p>
                                                <a href='https://github.com/weezykon/todoList' target="_blank" class="button">Source Code</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial area end -->
            <!-- Client logo area start -->
            <div class="client-logo-area gray-bg pt-110 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h1>Web Technologies</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="client-logo-slider">
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/1.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/2.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/3.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/4.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/5.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/6.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/7.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/8.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/9.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/10.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/11.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/12.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/13.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/14.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/15.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-brand-logo">
                                    <div class="client-logo-wrapper text-center">
                                        <div class="client-logo-inner">
                                            <img src="img/web/dark/16.png" style="width:110px !important;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client logo area end -->
            <!-- Blog area start -->
            <!-- <div class="blog-area white-bg pt-110 pb-80" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h1>Blog Post</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <article class="blog-post">
                                <div class="blog-post-inner">
                                    <div class="post-thumbnail">
                                        <a href="index.html#"><img class="img-responsive" src="img/blog/1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-content-inner text-center">
                                            <h3><a href="index.html#">Design is not just what it looks like</a></h3>
                                            <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta dolore magna aliqualy eminem faenimveni[...]</p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="read-more-btn">
                                                <a href="index.html#" class="">read more</a>
                                            </div>
                                            <ul class="post-social-share">
                                                <li>
                                                    <a href="index.html#"><i class="ti-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="ti-twitter-alt"></i></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="ti-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="index.html#"><i class="ti-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">
                                    <article class="blog-post horizontal">
                                        <div class="post-thumbnail">
                                            <a href="index.html#"><img class="img-responsive" src="img/blog/2.jpg" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-content-inner">
                                                <h3><a href="index.html#">Beautiful Place for Journey</a></h3>
                                                <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta dolore magna aliqualy eminem faenimveni[...]</p>
                                            </div>
                                            <div class="post-footer">
                                                <div class="read-more-btn">
                                                    <a href="index.html#" class="">read more</a>
                                                </div>
                                                <ul class="post-social-share">
                                                    <li>
                                                        <a href="index.html#"><i class="ti-facebook"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html#"><i class="ti-twitter-alt"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html#"><i class="ti-pinterest"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html#"><i class="ti-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <article class="blog-post horizontal">
                                        <div class="blog-post-inner">
                                            <div class="post-thumbnail">
                                                <a href="index.html#"><img class="img-responsive" src="img/blog/3.jpg" alt=""></a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-content-inner">
                                                    <h3><a href="index.html#">Beautiful Place for Journey</a></h3>
                                                    <p>Lorem dolor sit amet, consectetur floralm adipisicing elit, sed do eiusmod tem aincididunt elauta labore eta dolore magna aliqualy eminem faenimveni[...]</p>
                                                </div>
                                                <div class="post-footer">
                                                    <div class="read-more-btn">
                                                        <a href="index.html#" class="">read more</a>
                                                    </div>
                                                    <ul class="post-social-share">
                                                        <li>
                                                            <a href="index.html#"><i class="ti-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"><i class="ti-twitter-alt"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"><i class="ti-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html#"><i class="ti-linkedin"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Blog area end -->
            <!-- Call to action start -->
            <div class="call-to-action white-bg pt-100 pb-110" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="call-to-text text-center">
                                <h1>Do you Have a Great Idea<i style="color: #AE0D7E;" class="fa fa-lightbulb-o"></i></h1>
                                <p>Tell me about your project, would love to work with you.</p>
                                <a class="button large" href="#">Start Project</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="call-to-text text-center">
                                <h1>Do you want to create something?</h1>
                                <p>Is it a web application, mobile application, ecommerce, or a website??. Don't worry my fees are affordable.</p>
                                <a class="button large" href="#">Tell Me About It.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to action end -->
            <!-- Contact area start -->
            <div class="contact-area white-bg pb-110">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="contact-address text-center">
                                    <i class="ti-headphone-alt"></i>
                                    <h4>
                                        +234 8141160412<br>
                                        +234 8073917870
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="contact-address text-center">
                                    <i class="ti-map-alt"></i>
                                    <h4>
                                        <a href="http://weezykon.penherz.com">www.weezykon.penherz.com</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="contact-address text-center">
                                    <i class="ti-email"></i>
                                    <h4>
                                        <a href="index.html#">weezykon@penherz.com</a> <br>
                                        <a href="index.html#">weezykon@gmail.com</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p id="message"></p>
                            <form method="post" id="sendMsg">
                                <div class="form-inner">
                                    <div class="col-md-5 col-sm-6">
                                        <div class="input-box">
                                            <input placeholder="To: Weezykon" type="text" class="disabled-input" disabled="disabled">
                                            <input name="fullname" placeholder="Your FullName" type="text" required="required">
                                            <input name="email" placeholder="Your Email" type="email" required="required">
                                            <input name="bots" placeholder="Love Machines?" type="hidden">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-6">
                                        <div class="message-box">
                                            <textarea name="message" cols="30" rows="2" placeholder="Drop Your Message Here" required="required"></textarea>
                                            <input name="mycopy" type="checkbox" style="margin: 0px 10px;" />Send me a Copy
                                            <input class="button" name="ConMsg" type="submit" value="SEND">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact area end -->
            <!-- Footer area start -->
            <footer class="footer-area white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="social-bookmark footer-social text-center">
                                <ul>
                                    <li>
                                        <a href="https://instagram.com/iamweezykon" target="_blank"><i class="ti-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/weezykon" target="_blank"><i class="ti-github"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://medium.com/@weezykon" target="_blank"><i class="fa fa-medium"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/weezykon" target="_blank"><i class="ti-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://linkedin.com/in/akinbode-akinlolu-weezykon-5b005068/" target="_blank"><i class="ti-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="copyright text-center">
                                <p>Copyright @ 2017 <a href="#">Weezykon</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer area end -->
        </div>
        <!-- Content area end  -->
    </div>
    <!-- Main wrapper end -->
    <!-- All JS file included here -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Mail Login
            $('#sendMsg').submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: "mail.php",
                    method: "post",
                    data: $('form').serialize(),
                    dataType: "text",
                    success: function(strMessage){
                        $('#message').html(strMessage);
                        $('#sendMsg')[0].reset();
                    }
                })
            })
        });
    </script>
</body>

</html>
