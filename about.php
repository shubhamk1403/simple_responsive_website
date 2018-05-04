<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NPA Guru - Best Technology Solutions </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

</head>

<body>
    
    <?php
        session_start();
        if(isset($_SESSION["name"]) || isset($_SESSION["email"])){
            $session=TRUE;
            $name=$_SESSION["$name"];
            $email=$_SESSION["$email"];
        }
        else {
            $session=FALSE;
        }
    ?>
    
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Jascon Plaza X264, Siramtoli St, Ranchi </li>
              <li>Call us <i class="icon-phone"></i> (+91) 900 7890 234 - (+91) 985 557 8912</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Contact Us" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
		    <?php if (session_status() != PHP_SESSION_ACTIVE) { 
            ?>
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
        <?php }
			else{
        ?>
            <div class="headnav">
              <ul>
                <li><i class="icon-user"></i> Logged In</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
			<?php }?>
          </div>
        </div>
	
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1><br>Let us worry about technology</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="index.php">Home </a>
                    </li>
                    
					<li class="dropdown">
                      <a href="portfolio.php">Our Works</a>
                    </li>
					<li class="dropdown">
                      <li><a href="testimonials.php">Clients</a></li>
                    </li>
					<li class="dropdown">
					  <a href="ourservices.php">Our services</a>
					</li>
					<li  class="dropdown active">
					  <a href="about.php">About us</a>
					</li>
					<li class="dropdown">
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>About us</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">About us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>Welcome to <strong>NPA Guru</strong></h2>
            <p>
              We would be pleased to work with you to introduce you to the solutions available through us in the field of Information Technology. Established in 1996, NPG Solutions India Pvt Ltd is one of the pioneers in providing I.T. infrastructure and solutions on various platforms. NPG Solutions has been patronized by the corporate world since inception. Blending intuition and rigor with ground reality business acumen, NPG Solutions believes in going beyond the role of a mere solution provider to its clientele. NPG Solutions uses technology as a means to empower customers by providing them with user-friendly solutions that enhance their productivity.
			</p>
            <p>
              Whether you are a small and medium enterprise or a large corporate customer with dispersed nationwide networks, we understand that you require a high level of support at both pre-sales and post-sales levels which you can access through our certified engineers. You can be assured of a quality. At NPG Solutions we have envisioned a goal of becoming a major player and winning assignments from various corporate and government organizations. We are a team of hard-core professionals who are on the lookout for challenges with experience in working for various large corporate and multinational organizations.
            </p>
            <p>
              You can be assured of getting a good service and support from us. In order to keep ourselves updated and a step ahead of others, we keep going in for certifications like the ISO 9001:2008, Gold Certified Partner status from Microsoft, Platinum Partner Status from Symantec and Veritas just to name a few.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/full/image-01-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-02-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-03-full.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Talented peoples behind Flattern</h4>
          </div>
          <div class="span3">
            <img src="img/dummies/team1.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Ritesh Bhalla</strong>
              </p>
              <p>
                CEO - Founder
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="img/dummies/team2.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Shubham Kumar</strong>
              </p>
              <p>
                Lead designer
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="img/dummies/team3.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Jyoti Gupta</strong>
              </p>
              <p>
                Customer support
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="img/dummies/team4.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Anshu Singh</strong>
              </p>
              <p>
                Coffee maker
              </p>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span6">
            <h4>More about us</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. BRANDING AND IDENTITY </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      Located in the heart of Noida, NPG Solutions is an NASSCOM certified logo design service provider from India. Blessed with a team of 250+ experienced professionals having the rich experience, we offer best logo design services. Till today, we have completed 13200+ web projects for multiple businesses.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. WEB & UI DESIGN </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Looking for a reliable web design company! NPG Solutions is a trusted NASSCOM accredited to accomplish the custom website design requirements in 90+ countries. 
					  A greatly designed website is certainly the most important requisite for a business owner, who enters into the online business world and wants to offer 100% satisfaction to his customers.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. MOBILE APPS DEVELOPMENT SERVICES </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Are you one of the business owners, who are calling for a mobile apps development service provider from India! You have visited the right page as we, at NPG Solutions, meet the custom mobile app development requirements of our clients around the world.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. SEO SERVICES </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      NPG Solutions serving 90+ countries of the world, is one of the renowned SEO service providers from India. We started as NPG Technologies in 2007 and switched to NPG Solutions later in 2010. With a valuable experience, we render professional SEO service in India to offer website optimization to our huge client base across the world.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <h4>Our expertise</h4>
            <label>Web design:</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
            <label>Wordpress :</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 60%">
              </div>
            </div>
            <label>Photoshop :</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Ilustrator :</label>
            <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 40%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="about.php">About our company</a></li>
                <li><a href="ourservices.php">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="portfolio.php">Explore our portfolio</a></li>
                <li><a href="contact.php">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">NPA forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<strong>NPA Guru Studios Ltd</strong><br>
								 Jascon Plaza, Siramtoli St<br>
								 Shaheed Nagar 875322 India
					 		</address>
              <p>
                <i class="icon-phone"></i> (+91) 91-456-7890 - (+91) 98-555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; NPA Guru- All right reserved.</span>
                </p>
                <div class="credits">
                  Designed by <a href="www.arematechnologies">AremaTechnologies</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>