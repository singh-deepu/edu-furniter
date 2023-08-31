<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Home|| Edu Furniture </title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/apple-touch-icon.png" >
    <link rel="icon" type="image/png" href="images/favicon/apple-touch-icon.png">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

        <div class="preloader"></div>

        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>We have Answers</p>
                    <ul>
                        <li> +91 9999577712 ,9911927777 </li>
                        <li>furnituresedu@gmail.com</li>
                    </ul>
					
                </div>
									 <ul class="header-social-links-style1 float-right">
                                    <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                <!--<div class="top-style2-right">
                    <ul class="top-right-menu">
                        <li><a href="#">Become Partners</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>-->
            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index.php">
                        <img src="images/resources/logo.png" alt="Awesome Logo" width="221px" >
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
								<li><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="company_profile.php">COMPANY PROFILE</a></li>
                                        <li><a href="clients.php">CLIENTS</a></li>
                                        <li><a href="infrastructure.php">INFRASTRUCTURE</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">PRODUCTS </a>
                                    <ul>
                                        <li><a href="kindertan_garten.php">KINDERGARTEN FURNITURE </a></li>
                                        <li><a href="school-furniture.php">SCHOOL FURNITURE</a></li>
                                        <li><a href="lab-furniture.php">LAB FURNITURE </a></li>
                                        <li><a href="college-furniture.php">COLLEGE FURNITURE </a></li>
                                        <li><a href="playground-equipment.php">PLAYGROUND EQUIPMENT</a></li>
                                    </ul>
                                </li>
								<li><a href="portfolio.php">PROJECTS</a></li>
								<li><a href="designing_assistance.php">DESIGNING ASSISTANCE</a></li>
								<li><a href="http://schoolcollegefurnituresindia.blogspot.com/">BLOG</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        <div class="button">
                            <a class="btn-one" href="EDU_Brochure.pdf">Download Brochure<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->
        <style>
    		.sidebar-contact{
    		  position:fixed;
    		  top:65%;
    		  left:-350px;
    		  transform:translateY(-50%);
    		  width:350px;
    		  height:auto;
    		  padding:40px;
    		  background:#fff;
    		  box-shadow: 0 20px 50px rgba(0,0,0,.5);
    		  box-sizing:border-box;
    		  transition:0.5s;
    		  z-index: 999;
    		  
    		}
    		.sidebar-contact.active{
    		  left:0;
    		  z-index: 999;
    		}
    		.sidebar-contact input,
    		.sidebar-contact textarea{
    		  width:100%;
    		  height:36px;
    		  padding:5px;
    		  margin-bottom:10px;
    		  box-sizing:border-box;
    		  border:1px solid rgba(0,0,0,.5);
    		  outline:none;
    		}
    		.sidebar-contact h2{
    		  margin:0 0 20px;
    		  padding:0;
    		}
    		.sidebar-contact textarea{
    		  height:60px;
    		  resize:none;
    		}
    		.sidebar-contact input[type="submit"]{
    		  background:#00bcd4;
    		  color:#fff;
    		  cursor:pointer;
    		  border:none;
    		  font-size:18px;
    		}
    		.toggle{
    		  position:absolute;
    		  height:48px;
    		  width:48px;
    		  text-align:center;
    		  cursor:pointer;
    		  background:#38afdd;
    		  top:0;
    		  right:-48px;
    		  line-height:48px;
    		}
    		.toggle:before{
    		  content:'\f003';
    		  font-family:fontAwesome;
    		  font-size:18px;
    		  color:#fff;
    		}
    		.toggle.active:before{
    		  content:'\f00d';
    		}
    		@media(max-width:768px)
    		{
    		  .sidebar-contact{
    			width:100%;
    			height:100%;
    			left:-100%;
    		  }
    		  .sidebar-contact .toggle{
    			top:50%;
    			transform:translateY(-50%);
    			transition:0.5s;
    		  }
    		  .sidebar-contact.active .toggle
    		  {
    			top:0;
    			right:0;
    			transform:translateY(0);
    		  }
    		  .scroll{
    			width:100%;
    			height:100%;
    			overflow-y:auto;
    		  }
    		  .content{
    			padding:50px 50px;
    		  }
    		}
      </style>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script>
    	$(document).ready(function(){
    	  $('.toggle').click(function(){
    		$('.sidebar-contact').toggleClass('active')
    		$('.toggle').toggleClass('active')
    	  })
    	})
      </script>
        <div class="sidebar-contact">
            <div class="toggle"></div>
            <h6>Please share your details for any queries</h6>
            <div class="scroll">
                <form>
                  <input type="text" name="" placeholder="Name">
                  <input type="email" name="" placeholder="Email">
                  <input type="rel" name="" placeholder="Phone Number">
                  <textarea placeholder="Message here.."></textarea>
                  <input type="submit" name="" value="send">
                </form>
            </div>
        </div>
        <!--Main Slider-->