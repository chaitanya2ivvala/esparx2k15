<?php
include_once("php_includes/check_login_status.php");
include("php_includes/connect.php");
$f = "";
$sex = "Male";
$joindate = "";
$lastsession = "";
if(isset($_SESSION['userid']))
{
                $sql = "select fname from users where id='".$_SESSION['userid']."'"; 
		$query = mysqli_query($db_conx, $sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$f = preg_replace('#[^a-z0-9]#i', '', $row['fname']);
}
else
{
    header("location: http://www.esparx2k16.com");
    exit();	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Esparx2k16 | Home :: </title>
<link rel="icon" href="images/logo123.png" type="image/x-icon">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Esparx2K16 is a 2-day national level technical fest hosted by ECE Department of JNTUK Kakinada. The fest has a great reputation and attracts several thousands of students to participate in the events" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,800' rel='stylesheet' type='text/css'>-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.9.1.min.js"></script>
<!--hover-effect-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/hover_pack.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
</head>
<body>
<!--start header-->
<div class="header">
  <div class="header-top">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt=""/></a> </div>
      <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
        <ul class="nav" id="nav">
         <!-- <li><a href="#home" class="scroll">Welcome!</a></li>-->
          <li><a href="#Events" class="scroll">Events</a></li>
           <li><a  href="#"  data-toggle="modal" data-target="#myupdate">Online Events</a></li>
          <li><a href="#Initiatives" class="scroll">Initiative</a></li>
          <li><a href="#" data-toggle="modal" data-target="#myModalGuestLectures" style="background-color:#C3F; border-radius:10px;"><p style="color:#FF0">Startup India</p></a></li>
          <li><a href="#Partnership" class="scroll" style="background-color:#CF6; border-radius:10px;"><p style="color:#C0F">Partnership</p></a></li>
          <li><a href="#hospitality" class="scroll">Hospitality</a></li>
        <li><a  href="#"  data-toggle="modal" data-target="#myupdate">Organising Committee</a></li>
          <li><a href="#contact" class="scroll">Contact</a></li>
		  <li>hi <?php echo $f; ?></li>
		  <li><a href="logout.php">logout</a></li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>
      <script type="text/javascript" src="js/responsive-nav.js"></script>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>


    </div>

  </div>

 

</div>

<!--end header-->









<!--start Partnership-->

<div class="twitter" id="Partnershipd" style="background-color: #fff">

  <div class="container" style="background-color:#fff;margin-top: 40px;border: 1px solid #DDDDDD">

    <div class="twitter_left2"></br>

      <center><h3 class="m_21" style="color: #fff;font-family: verdana;text-transform: none;background-color: #4BCAFF;padding: 10px;">Limit Exceed</h3></center>

      

    </div>

   <br><br>

   <div class="twitter_left2" style="text-align:center">

	<p>

	<?php if(isset($m))

	{

	echo $m;

	}

	?></p>

	</div></br>

<form>

	<div class="twitter_left2" style="text-align:center">

	<p><span style=color:red;>Sorry, you can not save the data, Our Limit of Circuitrix things is reached upto its limit<br> Please contact website Administrator.</span></p><br>

</div>

<br><br>

</form>



  </div>

</div>





<!--start contact-->

<div class="contact" id="contact">

  <div class="container">

    <div class="row">

      <h3 class="m_3">Contact</h3>

      <div class="m_4"><span class="bottom_line"> </span></div>

    <!--  <form method="post" action="contact-post.html">

        <div class="col-md-6 commentform">

          <p class="comment-form-author">

            <label for="author">Name</label>

            <input id="author" name="author" type="text" value="" size="30" aria-required="true">

          </p>

          <p>

            <label for="author">Email</label>

            <input id="author" name="author" type="text" value="" size="30" aria-required="true">

          </p>

        </div>

        <div class="col-md-6 commentform_desc">

          <!--<p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>-->

         <div class="address">

            

			 <p>Email: <span>esparx2k16@gmail.com</span></p>

            <p>Phone:</p>

			<p>GVS Karthik - +91 86886 52554</p>

			<p>T Sai Kiran - +91 73825 04890</p>

            <p> Vaseem Shaik - +91 85200 34225</p>

             <p>   Manjish Adhikari - +91 81435 80064</p>

           

           

            <p>Follow on:<a href="https://www.facebook.com/Esparx2k16/?fref=ts"><i class="fa fa-facebook fa-5x"></i></a></p>

          </div>

        </div>

   <!--     <div class="clear"></div>

        <div class="contactform_bottom"> <span>

          <label>Subject</label>

          </span> <span>

          <textarea name="userMsg"> </textarea>

          </span>

          <input name="submit" type="submit" id="submit" value="Message">

        </div>

        <!--<div class="col-md-6 commentform_desc1">

          <p class="m_13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.</p>

          <div class="address">

            <p>500 Lorem Ipsum Dolor Sit,</p>

            <p>Phone:(00) 222 666 444</p>

            <p>Fax: (000) 000 00 00 0</p>

            <p>Email: <span>support[at]snow.com</span></p>

            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>

          </div>

        </div>-->

      </form>-->

    </div>

  </div>

</div>

<div class="footer-bottom">

  <div class="container">

    <ul class="footer-nav">

      <li><a href="#">Home</a></li>

      |

      <li><a href="#">Events</a></li>

      |

      <li><a href="#">Initiative</a></li>

      |

      <li><a href="#">Startup India</a></li>

    </ul>

    <div class="copy">

      <p>© Esparx2k16 All rights reserved</p> <P>any technical queries contact: I V S K Chaitanya</P>

	                                                              <p>email address: chaitu.dominator@gmail.com</p>

    </div>

    <div class="clear"></div>

  </div>

</div>



<!-- Modal Popups-->

<!-- Modal Paper Presentation-->

<div class="modal fade" id="myModalPresentation" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Paper Presentation</h4>

      </div>

      

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#Presentationmenu1">About</a></li>

          <li><a data-toggle="tab" href="#Presentationmenu2">Rules</a></li>

          <li><a data-toggle="tab" href="#Presentationmenu3">Fee details </a></li>

          <li><a data-toggle="tab" href="#Presentationmenu4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="Presentationmenu1" class="tab-pane fade in active">

            <hr>

            <h3>Important points to note</h3>

              <p>Paper has to be from the following streams:</p>

        <ol type="1">

          <li>VLSI and NANO Technology</li>

          <li>Antennas and Microwave Engineering</li>

          <li>Signal and Image Processing</li>

          <li> Wireless and Mobile Communications</li>

          <li> Embedded System</li>

          <li> Satellite and Optical Communications</li>

        </ol>

       

          </div>

          <div id="Presentationmenu2" class="tab-pane fade">

            <hr>

            <h3>Rules</h3>

          <ol type="1">

          <li> A team should have a maximum of 2 members</li>

          <li> The paper should be in "pdf" or "doc" format</li>

          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD</li>

          <li> Time duration is 7+2 min including queries</li>

          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE format</li>

          <li> Please mention your Esparx ID and Stream at the top-right of your abstract </li>

          <li> Last Date for submission of papers is 15/02/2016</li>

        </ol>

          </div>

          <div id="Presentationmenu3" class="tab-pane fade">

            <hr>

            <h3>Fee Details</h3>

            <ol type="1">

            <li> You can upload your abstract for free(*besides the registration fee)</li>

            <li> Only one participant need to pay the registration fee, team member can be added under his name</li>

            <li> If your abstract gets selected, each participant should pay 300 INR</li>

            <li> You must not upload the same abstract for other events</li>

            <li> Please login to upload the Abstract</li>

            </ol>

          </div>

          <div id="Presentationmenu4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>GVS Karthik </b> | Phone: +91 86886 52554</p>

              <p><b>Vamsi Krishna Guduru </b>  | Phone: +91 94917 17456</p>

              <p><b>M Sai Kiran  </b>  | Phone: +91 90142 22380</p>

              <p><b>Nageena</b> | Email: <a href="mailto:nageena@esparx.in">nageena@esparx.in</a></p>

              <p><b>Soundarya  </b> | Email:  <a href="mailto:soundarya@esparx.in">soundarya@esparx.in</a></p>

              <p><b>Anusha R </b> | Email:  <a href="mailto:anusha@esparx.in">anusha@esparx.in</a> </p>

              

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal Paper Presentation-->



<!-- Modal Poster Presentation-->

<div class="modal fade" id="myModalPresentation2" role="dialog">

  <div class="modal-dialog modal-lg">

  

  <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Poster Presentation</h4>

      </div>

      

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#myModalPaper1">About</a></li>

          <li><a data-toggle="tab" href="#myModalPaper2">Rules</a></li>

          <li><a data-toggle="tab" href="#myModalPaper3">Fee details </a></li>

          <li><a data-toggle="tab" href="#myModalPaper4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="myModalPaper1" class="tab-pane fade in active">

            <hr>

            <h3>Important points to note</h3>

                <p>Paper has to be from the following streams:</p>

        <ol type="1">

          <li>VLSI and NANO Technology</li>

          <li>Antennas and Microwave Engineering</li>

          <li>Signal and Image Processing</li>

          <li> Wireless and Mobile Communications</li>

          <li> Embedded System</li>

          <li> Satellite and Optical Communications</li>

        </ol>

        <hr>



          </div>

          <div id="myModalPaper2" class="tab-pane fade">

            <hr>

            <h3>Rules</h3>

             <ol type="1">

          <li>A team should have a maximum of two members</li>

          <li>The paper should be in "pdf" or "doc" format</li>

          <li> Team should bring 3 Hard copies of paper and soft copy of ppt in a pen drive or CD</li>

          <li> Time duration is 7+2 min including queries</li>

          <li> Paper should contain max of 8 pages and should strictly follow standard IEEE format</li>

          <li> Please mention your Esparx ID and Stream at the top-right corner of the abstract</li>

          <li> Last Date for submission of papers is 15/02/2016</li>

        </ol>

          </div>

          <div id="myModalPaper3" class="tab-pane fade">

            <hr>

            <h3>Fee Details</h3>

            <ol type="1">

            <li> You can upload your abstract for free(*besides the registration fee)</li>

            <li> If your abstract gets selected, each participant should pay 300 INR</li>

            <li> Only one participant need to pay the registration fee, team member can be added under his name</li>

            <li> You must not upload the same abstract for other events</li>

            <li> Please login to upload the Abstract</li>

          </div>

          <div id="myModalPaper4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>GVS Karthik </b> | Phone: +91 86886 52554</p>

              <p><b>Vamsi Krishna Guduru </b>  | Phone: +91 94917 17456</p>

              <p><b>M Sai Kiran  </b>  | Phone: +91 90142 22380</p>

              <p><b>Nageena</b> | Email: <a href="mailto:nageena@esparx.in">nageena@esparx.in</a></p>

              <p><b>Soundarya  </b> | Email:  <a href="mailto:soundarya@esparx.in">soundarya@esparx.in</a></p>

              <p><b>Anusha R </b> | Email:  <a href="mailto:anusha@esparx.in">anusha@esparx.in</a> </p>

              

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

    

  </div>

</div>

<!-- /.modal Poster Presentation-->



<!-- Modal PCB -->

<div class="modal fade" id="myModalWorkshops" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">PCB Workshop</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#PCBmenu1">About</a></li>

          <li><a data-toggle="tab" href="#PCBmenu2">Content</a></li>

          <li><a data-toggle="tab" href="#PCBmenu3">Fee details </a></li>

          <li><a data-toggle="tab" href="#PCBmenu4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="PCBmenu1" class="tab-pane fade in active">

            <hr>

            <p>In the PCB workshop, you will learn about the following topics: </p>

             <ol type="a">

              <li>Basics of different circuit functional blocks</li>

              <li>Developing Projects by combining and Linking different functional circuit blocks</li>

              <li>Developing the Schematic Diagram using actual component specifications</li>

              <li>Circuit designing in ISIS Professional Software</li>

              <li>Circuit simulation in Real-time using circuit simulation Software</li>

              <li>Techniques for Debugging the Schematic</li>

              <li>Designing of PCB layout in ARES Professional Software</li>

              <li>Techniques for miniaturizing the PCB Layout</li>

                 <li>Designing of Single side and Double sided PCB</li>

                 <li>Designing Surface Mount Technology(SMT) type PCB</li>

                 <li>Ground and Power Plane Creation, Techniques & Tips</li>

            </ol>

          </div>

          <div id="PCBmenu2" class="tab-pane fade">

            <hr>

            <h3>Content</h3>

            <h4>The maximum allowed members per team is 4</h4>

            <p>The kit contains the following </p>

            <ol type="a">

            <li>Copper Clad </li>

 <li>Ferrous Chloride Powder</li>

 <li> Electronic Component kit</li>

 <li> Printed Trace Stencil for PCB Imprint 3 PCB</li>

 <li> Soldering Iron(Only during workshop)</li>

 <li> Soldering Wire</li>

 <li> Hand Drilling Machine(Only during workshop)</li>

 <li>Drilling Bits(Only during workshop)</li>

 <li> Battery connector</li>

 <li> Battery</li>

 <li>Multimeter(Only during workshop)</li>

            </ol>

          </div>

          <div id="PCBmenu3" class="tab-pane fade">

            <hr>

            <h3>Fee details</h3>

            <p>1) A maximum of 4 members allowed per team<br>

               2) The registration fee for PCB workshop is 4000 INR<br> 

               3) Please log in to your account to register for workshop<br>

               4) Only the team leader needs to register by paying 200 INR. The team members can be added under his name</p>

          </div>

          <div id="PCBmenu4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>

              <p><b>Phanindra</b>  | Phone: +91 9441862795</p>

              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>

              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>

              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>

              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal PCB-->







<!-- Modal Sixth Sense Robotics: -->

<div class="modal fade" id="myModalSixthSense" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Sixth Sense Robotics</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#SixthSensemenu1">About</a></li>

          <li><a data-toggle="tab" href="#SixthSensemenu2">Content</a></li>

          <li><a data-toggle="tab" href="#SixthSensemenu3">Fee details </a></li>

          <li><a data-toggle="tab" href="#SixthSensemenu4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="SixthSensemenu1" class="tab-pane fade in active">

           <hr>

            <h3>About</h3>

            <p style="white-space: break-word;">This workshop interfaces the digital world with physical world. You will learn about the following topics

</p>

 <ol type="1">

            <li>Color Recognition application </li>

 <li>Ball following Robot</li>

 <li>Gesture controlled windows media player</li>

 <li>Gesture controlled media player</li>

  </ol>

          </div>

          <div id="SixthSensemenu2" class="tab-pane fade">

            <hr>

            <h3>Content</h3>

             <p>The maximum allowed members per team is 5</p>

            <p>The kit contains the following</p>

            <hr>

            <ol>

<li>ARDUINO circuit board</li>

<li>USB powered plug and play external webcam</li>

<li>Robot Chassis</li>

<li>Wheels</li>

<li>Motors</li>

<li>Castor Wheel</li>

<li>Battery(9V)</li>

<li>USB Cable for Programming</li>

<li>Connecting Wires</li>

<li>Screws</li>

<li>Screw Driver</li>

<li>Wire cutter/Plier</li>

<li>Battery snaps</li>

<li>CD containing Course Material (Codes, Softwares, videos etc.)</li>

<li>Motor Driver Circuit Breakout (L293)</li>

            </ol>

          </div>

          <div id="SixthSensemenu3" class="tab-pane fade">

            <hr>

            <h3>Fee details</h3>

            <p>1) A maximum of 5 members allowed per team<br>

               2) The registration fee for Sixth Sense Robotics workshop is Rs. 6000/-<br>

               3) Please log in to your account to register for workshop<br>

               4) Only the team leader needs to register by paying 200 INR. The team members can be added under his name

</p>

          </div>

          <div id="SixthSensemenu4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Vaseem Shaik </b> | Phone: +91 85200 34225 </p>

              <p><b>Bhanu Krishna Dev</b>  | Phone: +91 81214 39065</p>

              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>

              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>

              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>

              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal End Sixth Sense Robotics:-->



<!-- Modal Internet of Things(IOT): -->

<div class="modal fade" id="myModalIOT" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Internet of Things(IOT):</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#IOTmenu1">About</a></li>

          <li><a data-toggle="tab" href="#IOTmenu2">Content</a></li>

          <li><a data-toggle="tab" href="#IOTmenu3">Fee details </a></li>

          <li><a data-toggle="tab" href="#IOTmenu4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="IOTmenu1" class="tab-pane fade in active">

           <hr>

            <h3>About</h3>

            <p style="white-space: break-word;">The highlights of the IOT workshop are as follows

</p>

 <ol type="1">

<li>What is Internet of Things and introduction to open Cloud Computing platforms</li>

<li>Introduction to Arduino IDE and its use in Home Automation</li>

<li>How to connect Arduino to Internet and various Cloud services</li>

<li>How to send sensor data to cloud services in real time</li>

<li>Control LED's, motors and various electronic components via a webpage</li>

<li>Send tweets and update Cloud based services</li>

<li>Control electronic devices using Android Smartphone</li>

<li>Upload sensor data on Twitter using Cloud services</li>



  </ol>

          </div>

          <div id="IOTmenu2" class="tab-pane fade">

            <hr>

            <h3>Content</h3>

             <p>Maximum members allowed per team is 5</p>

 <ul>

<li> ARDUINO circuit board    </li>

<li> Motor Driver  </li>

<li> DC Motor  </li>

<li> Light Sensor  </li>

<li> LM 35  </li>

<li> Potentiometer  </li>

<li> LDR  </li>

<li> Small Buzzer  </li>

<li> Battery  </li>

<li> LED  </li>

<li> USB Wires  </li>

<li> ESP8266  </li>

<li> ESP8266 breakout board  </li>

<li> Battery Snipper(2pin_Connector)  </li>

<li> Normal Battery Snipper(Without 2 pin Connector)  </li>

<li> Screw Driver  </li>

<li> Female to Female wires  </li>

</ul>

          

          </div>

          <div id="IOTmenu3" class="tab-pane fade">

            <hr>

            <h3>Fee details</h3>

            <p>1) A maximum of 5 members allowed per team<br>

               2) The registration fee for Sixth Internet of things workshop is 6000 INR<br> 

               3) Please log in to your account to register for workshop<br>

               4) Only the team leader needs to register by paying 200 INR. The team members can be added under his name</p>

          </div>

          <div id="IOTmenu4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Karunakar Reddy </b> | Phone: +91 89772 09054 </p>

              <p><b>Govind Rajulu</b>  | Phone: +91 94902 37983</p>

              <p><b>Deepthi</b> | Email: <a href="mailto:deepti@esparx.in">deepti@esparx.in</a></p>

              <p><b>Aparna </b> | Email:  <a href="mailto:aparna@esparx.in">aparna@esparx.in</a></p>

              <p><b>Mounika</b> | Email:  <a href="mailto:mounika@esparx.in">mounika@esparx.in</a> </p>

              <p><b>Akhila V</b> | Email: <a href="mailto:v_akhila@esparx.in">v_akhila@esparx.in</a></p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal End Internet of Things(IOT):-->



<!-- Modal will be updated soon.... coding -->

<div class="modal fade" id="myupdate" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h1>Please check back soon!</h1>

      </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- Modal signup coding -->

<div class="modal fade" id="signup" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

       <h1>signup</h1>

      </div>

       <div class="modal-body">

       <?php include_once("root/signup.php"); ?>

	   </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- Modal Learn coding -->

<div class="modal fade" id="myModalCoding" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">MATLAB Workshop</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#Coding1">About</a></li>

          <li><a data-toggle="tab" href="#Coding2">Agenda</a></li>

          <li><a data-toggle="tab" href="#Coding3">Fee details </a></li>

           <li><a data-toggle="tab" href="#Coding4">Contact us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="Coding1" class="tab-pane fade in active">

            <hr>

            <p>Today's world isn't all about Hardware, software isn't far behind as it's gaining pace by the day!<br>

              We teach you how to program and give an opportunity to compete<br> 

              Welcome to MATLAB Coding Workshop! </p>

          </div>

          <div id="Coding2" class="tab-pane fade">

            <hr>

            <h3>Agenda</h3>

            <p>Day-1: MATLAB basics lecture - mini competition<br>

               Day-2: Implementation of Image Processing using MATLAB - final competition<br><br>

            </p>

          </div>

          <div id="Coding3" class="tab-pane fade">

            <hr>

            <h3>Fee details</h3>

            <p>1) A maximum of 2 members are allowed per team<br>

               2) The registration fee for MATLAB workshop is 1200 INR<br> 

               3) Please log in to register for workshop<br>

               4) Only the team leader needs to register by paying 200 INR. The team member can be added under his name</p>

          </div>

          <div id="Coding4" class="tab-pane fade">

            <hr>

            <h3>Contact us</h3>

           <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Manjish Adhikari </b> | Phone: +91 81435 80064 </p>

              <p><b>Phanindra</b>  | Phone: +91 94418 62795</p>        

              <p><b>Lavanya</b> | Email: <a href="mailto:lavanya@esparx.in">lavanya@esparx.in</a></p>

              <p><b>Anusha D</b> | Email: <a href="mailto:d_anusha@esparx.in">d_anusha@esparx.in</a></p>

              <p><b>Shalini</b> | Email:  <a href="mailto:shalini@esparx.in">shalini@esparx.in</a></p>

            </div>

          </div>

          

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- Modal Robo Display -->

<div class="modal fade" id="myModalRobo" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Robot Competition</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#Robo1">About</a></li>

          <li><a data-toggle="tab" href="#Robo2">Rules</a></li>

          <li><a data-toggle="tab" href="#Robo3">Fee details </a></li>

          <li><a data-toggle="tab" href="#Robo4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="Robo1" class="tab-pane fade in active">

            <hr>

            <h3>About</h3>

           <p> There are two types of Robot competitions<br>

           1. Adventure Robot<br>

           2. Line Follower Robot<br> 

           Make your Robot strong enough to beat our spine-chilling track

           </p>

          </div>

          <div id="Robo2" class="tab-pane fade">

            <hr>

            <h3>Content</h3> 

            <p> <b>Line follower Robot:</b><br>

            There are no specific dimension requirement for Line follower Robots but every participant must upload the dimensions of their Robots and several details related to it <br><br>

            <b>Adventure Robot:</b><br>

            We welcome stronger Robots that could beat out any terrible path with a greater speed. <br>

			<i>Track:</i>

            <img src="Project hurdle.JPG"></p>

          </div>

          <div id="Robo3" class="tab-pane fade">

            <hr>

            <h3>Fee Details</h3>

            <p> <b> Adventure Robot </b><br>

			A maximum of four members allowed per team <br>

            The fee for participating in the competition is 1200 INR<br><br>

<b> Line Follower Robot</b><br>

A maximum of 3 members allowed per team <br>

The fee for participating in the competition is 1000 INR<br>

          </p></div>

          <div id="Robo4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

           <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Vaseem </b> | Phone: +91 85200 34225 </p>

              <p><b>T Sai Kiran</b>  | Phone: +91 73825 04890 </p>

              <p><b>Lehya</b> | Email: <a href="mailto:lehya@esparx.in">lehya@esparx.in</a></p>

              <p><b>Mehtab Bhanu </b> | Email: <a href="mailto:mehtab@esparx.in">mehtab@esparx.in</a></p>

              <p><b>Bindu  </b> | Email:  <a href="mailto:bindu@esparx.in">bindu@esparx.in</a></p>

              <p><b>Sahaja </b> | Email:  <a href="mailto:sahaja@esparx.in">sahaja@esparx.in</a> </p>

              <p><b>Akhila D </b> | Email: <a href="mailto:d_akhila@esparx.in">d_akhila@esparx.in</a></p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal Robo Display-->





<!-- Modal project -->

<div class="modal fade" id="myModalProjects" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Projects</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#Projects1">About</a></li>

          <li><a data-toggle="tab" href="#Projects2">Rules</a></li>

          <li><a data-toggle="tab" href="#Projects3">Fee details </a></li>

          <li><a data-toggle="tab" href="#Projects4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">

    

 

      <p><img src="images/Circuitrix.jpg" class="img-responsive"></p>

    </div>-->

          <div id="Projects1" class="tab-pane fade in active">

            <hr>

            <h1>About</h1>

            <p>It's time to showcase your talent with your innovative project<br>

            The most creative project will be rewarded 4,000 INR<br>

            Get Ready to compete!</p>

            </div>

          <div id="Projects2" class="tab-pane fade">

            <hr>

            <h3>Rules</h3>

            <ol type="1">

              <li> Participants need to provide a detailed description of project/module</li>

              <li> The Abstract file should be uploaded in the "pdf" or "doc" format</li>

              <li> A Project team can have a maximum of 4 members</li>

              <li> The team must bring their respective Project/model and a hard copy of abstract on the day of the event</li>

              <li> Please mention your Esparx ID at the top-right corner of the Abstract</li>

              <li> Last Date for submission of abstracts is 15/02/2016</li>

            </ol>

          </div>

          <div id="Projects3" class="tab-pane fade">

            <hr>

            <h3>Fee Details</h3>

            <ol>

            <li> You can upload your abstract for free(*besides registration fee)</li>

            <li> If your abstract gets selected, the team should pay 1200 INR</li>

            <li> Only the team leader needs to register by paying 200 INR. The team member can be added under his name</li>

          </div>

          <div id="Projects4" class="tab-pane fade">

            <hr>

            <h3>Contact</h3>

            <div class="address" style="background:#ff9900; padding:5px;">

              <p><b>Vaseem  </b> | Phone: +91 85200 34225 </p>

              <p><b>Edison </b>  | Phone: +91 72078 07930 </p>

              <p><b>Lehya </b> | Email: <a href="mailto:lehya@esparx.in">lehya@esparx.in</a></p>             

              <p><b>Mehtab Bhanu </b> | Email: <a href="mailto:mehtab@esparx.in">mehtab@esparx.in</a></p>

              <p><b>Bindu  </b> | Email:  <a href="mailto:bindu@esparx.in">bindu@esparx.in</a></p>

              <p><b>Sahaja </b> | Email:  <a href="mailto:sahaja@esparx.in">sahaja@esparx.in</a> </p>

              <p><b>Akhila D</b> | Email: <a href="mailto:d_akhila@esparx.in">d_akhila@esparx.in</a></p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- /.modal project-->





<!-- Modal Circuitrix -->

<div class="modal fade" id="myModalCircuitrix" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">CIRCUITRIX</h4>

      </div>

      <div class="modal-body">

        <ul class="nav nav-tabs">

          <!-- <li><a data-toggle="tab" href="#home">Home</a></li>-->

          <li  class="active"><a data-toggle="tab" href="#Circuitrix1">About</a></li>

          <li><a data-toggle="tab" href="#Circuitrix2">Rules</a></li>

          <li><a data-toggle="tab" href="#Circuitrix3">Fee details </a></li>

          <li><a data-toggle="tab" href="#Circuitrix4">Contact Us</a></li>

        </ul>

        <div class="tab-content">

          <!--<div id="home" class="tab-pane fade in active">