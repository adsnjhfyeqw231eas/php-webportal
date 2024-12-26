<?php include("db/db.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>kosipratishthan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
   <!-- //Custom Theme files -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	 <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
        <style type="text/css">
        
        .img-fluid{
            max-width: 100%;
          /*  height: 100%;*/
            display: block;
        }
        a.navbar-brand.text-white img {
    height: 4rem !important;
}

    </style>
</head>
<body>
        <!-- header -->
         <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                   <a class="navbar-brand text-white" href="index.php">
                      <img  id="logo" src="images/logo.png"> 
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="trustee.php">Trustees</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="events.php">Events</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="Survey.php">Survey Reports</a>
                        </li>
                        
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="service.php">Publication</a>
                        </li>
                       <!--  <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="about.html">About</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="typo.html">Typography</a>
                            </div>
                        </li> -->
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="feedback.php">Feedback</a>
                        </li>
                     
                    </ul>
                </div>
            </nav>
        </header>
 <!-- main image slider container -->
        <div class="inner-banner">
         </div> 
    <!-- end of main image slider container -->
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
        </ol>
    </nav>
	 <!-- services -->
    <div class="agileits-about py-lg-5">
		<div class="container py-4">
			 <div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub">Feedback</h3>
				
			</div>

        </div>
    </div>
    <div class="container">
         
    <h1 style="margin-top: 20px; color: #2118b4;font-weight: bolder;">Feedback</h1><br>
 <form method="post" action="">
 <input type="text" name="name" placeholder="Enter your name" class="form-control"><br>
 <textarea name="message" placeholder="Message" class="form-control"></textarea><br>
 <input type="submit" name="submit" value="submit">
 </form>


    </div>
    <div class="container">
 <div class="row" style="background-color:#00806e; color: white; font-weight: bold; padding-bottom: 15px; margin-top: 19px; margin-bottom: 30px;">
   <?php
  $query="select *from feedback_ins"; 
$run = mysqli_query($con,$query);
    
    while ($row= mysqli_fetch_array($run)){
        
        $id =$row['id'];
        $name=$row['name'];     
        $message=$row['message']; 
        echo "<pre>";
        print_r ($row);
        echo "</pre>";
    ?> 
    <table cellpadding="2" cellspacing="2" border="1px solid red;">
        <tr><th>Feedback</th><th>Name</th></tr>
        <tr><td><p style="color: white;"><?php echo $message; ?></p></td><td><p style="color: red; font-weight: normal;"><b><?php echo $name; ?></b></p></td></tr>
    </table> 
     
     
     <?php }?>
 </div>
</div>
<!-- footer -->
	<?php include('includes/footer.php'); ?>
	<!-- //footer -->
  <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<script src="js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar -->

	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

    <!-- script for password match -->

    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    
    $message= $_POST['message'];
    
    
    if ($name=="" or $message==""){
        
        
        
        echo"<script language='javascript'>alert('Please Fill All The Fields!')</script>";
        exit();
    }
    
    {
        
    
    
    }
    
    
    $insert_images ="insert into feedback_ins(name,message) values ('$name','$message')";
    
    
        
        $run_images = mysqli_query($con, $insert_images);
        if($run_images){
            
            
            echo"<script language='javascript'>alert(' successfilly Changed')</script>";
        }
        
        
    
    
    
    
}


?>