<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$body='';
	$body.="<div style='text-align:left;border: 1px solid #000; width:80%'>
	<p><img src='http://4bdev.com/design/saleem/fourbends/html/images/fourbends_logo.png'></p>
	<p>Dear Admin,<br><br>
	New Enquiry Recieved from fourbends. The details as follows<br><br>
	<P><b>Name:  </b>$Name</p>
	<P><b>Email: </b>$Email</p>
	<P><b>Phone: </b>$Phone</p>
	<P><b>Subject: </b>$Subject</p>
	<P><b>Message: </b>".nl2br($Message)."</p>
	<p><br>With Regards,<br>FourBends Team<br>www.fourbends.com</p>
	</div>";
	$to='praburaj@fourbends.com';
	$subject="Enquiry recieved from $Email on ".date('M d,Y');
	// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From: $Name <$Email>" . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
$res=mail($to, $subject, $body, $headers);
if($res)
$Formresponse='<span style="color:green">Your Message send succuesfully</span>';
else
$Formresponse='<span style="color:red">Your query not send, try again later</span>';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FourBends: IT Services, Consulting and Business Solutions</title>

<!--Page Keyword and Description Individual Each Page-->
<meta name="keywords" content="IT Services, Consulting, Business Solutions, Four Bends" />
<meta name="description" content="Our goal at FourBends is to provide effective solutions designed to boost your business, be it small or a large organization.Our consultants design solutions tailored specifically to the needs of your business in order to ensure you achieve your dreams of success." />
<meta name="robots" content="index, follow" />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Testimonials Style -->
<link rel="stylesheet" href="t_css/reset.css">
<link rel="stylesheet" href="t_css/style.css">

<!-- Testimonials Style -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- Banner style -->
<link rel="stylesheet" href="css/banner.css" />

<!-- Form style -->
<link href="css/formstyle.css" rel="stylesheet">

<!-- Main Style -->
<link href="css/style.css" rel="stylesheet">

<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Google Web Font -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<!-- Modernizr -->
<script src="js/modernizr.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('images/facebook_top_hover.png','images/twitter_top_hover.png','images/gplus_top_hover.png','images/linkedin_top_hover.png','images/skype_hover.png')">

<!-- Begin Header Section -->
<header> 
  
  <!-- Begin Top Section -->
  <div class="topsection">
    <div class="wrapper">
      <div class="topleftsection">
        <div class="socialmediaimage"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/facebook_top_hover.png',1)"><img src="images/facebook_top.png" alt="Facebook" width="18" height="18" id="Image2" border="0" title="Facebook"></a></div>
        <div class="socialmediaimage"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/twitter_top_hover.png',1)"><img src="images/twitter_top.png" alt="Twitter" width="18" height="18" id="Image3" border="0" title="Twitter"></a></div>
        <div class="socialmediaimage"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/gplus_top_hover.png',1)"><img src="images/gplus_top.png" alt="Gplus" width="18" height="18" id="Image4" border="0" title="Gplus"></a></div>
        <div class="socialmediaimage"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/linkedin_top_hover.png',1)"><img src="images/linkedin_top.png" alt="Linkedin" width="18" height="18" id="Image5" border="0" title="Linkedin"></a></div>
        <div class="socialmediaimage"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/skype_hover.png',1)"><img src="images/skype.png" alt="Skype" width="18" height="18" id="Image6" border="0" title="FourBends"></a></div>
      </div>
      <div class="toprightsection">
        <div class="emailsection">
          <div class="email">Email :</div>
          <div class="contacus"><a href="mailto:contactus@fourbends.com">contactus@fourbends.com</a></div>
        </div>
        <div class="countrysection">
          <select name="Country" class="countrylist">
            <option>India</option>
            <option>USA</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- End Top Section --> 
  
  <!-- Begin Logo Section -->
  
  <div class="logosection">
    <div class="wrapper">
      <div class="logo"><a href="index.html"><img src="images/fourbends_logo.png" border="0" alt="FourBends" title="FourBends"></a></div>
      <div class="menu">
        <nav id="menu-wrap">
          <ul id="menu">
            <li><a href="aboutus.html">About Us</a></li>
            <li> <a href="services.html">Services</a>
              <ul>
                <li> <a href="supportservices.html">Support Services</a> </li>
                <li> <a href="managementconsulting.html">Management Consulting</a> </li>
                <li> <a href="itstaffing.html">IT Staffing</a> </li>
                <li> <a href="itconsulting.html">IT Consulting</a> </li>
                <li> <a href="aemconsulting.html">AEM Consulting</a> </li>
                <li> <a href="applicationintegration.html">Application Integration</a> </li>
                <li> <a href="webapplicationsdevelopment.html">Web Apps Development</a> </li>
              </ul>
            </li>
            <li> <a href="products.html">Products</a> </li>
            <li> <a href="industries.html">Industries</a>
              <ul>
                <li> <a href="education.html">Education</a> </li>
                <li> <a href="media.html">Media</a> </li>
                <li> <a href="finance.html">Finance</a> </li>
                <li> <a href="manufacturingandretail.html">Manufacturing & Retail</a> </li>
              </ul>
            </li>
            <li><a href="careers.html">Careers</a></li>
            <li class="menuactive">Connect</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  
  <!-- End Logo Section --> 
  
  <!-- Begin Banner Section --> 
  
  <!-- banner -->
  
  <div class="innerpagebannersection">
    <div class="connectbanner"></div>
  </div>
  
  <!-- banner --> 
  
  <!-- End Banner Section --> 
  
</header>

<!-- End Header Section --> 

<!-- Begin Article Section -->
<article>
  <div class="articlesection">
    <div class="wrapper">
      <div class="servicespagetitle">Connect</div>
      <div class="innerpagecontentoutter">FourBends LLC, a Global technology company with portfolio covering Product Development, Consultancy Services and Managed Support services,backed up with the over 30 years of experience of serving our customers all across the globe in Media, Finance, Retail, Travel, Education domains for past several years.<br>
        <br>
        We’re an energetic, flexible, and open-minded team ready to work hard for our clients. If you’re interested in working with us, please contact us to know how we can help you in growing your business !!
        <div class="connectoutter">
          <div class="connectleft">
            <p><?php echo $Formresponse;?></p>
            <!-- Form -->
            <form id="contact-form" action="" method="post">
              <div>
                <label> <span>Name: (required)</span>
                  <input name="Name" placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
                </label>
              </div>
              <div>
                <label> <span>Email: (required)</span>
                  <input name="Email" placeholder="Please enter your email address" type="email" tabindex="2" required>
                </label>
              </div>
              <div>
                <label> <span>Phone No: (required)</span>
                  <input name="Phone" placeholder="Please enter your number" type="tel" tabindex="3" required>
                </label>
              </div>
              <div>
                <label> <span>Subject: (required)</span>
                  <input name="Subject" placeholder="Please enter your subject" type="text" tabindex="4" required>
                </label>
              </div>
              <div>
                <label> <span>Message: (required)</span>
                  <textarea name="Message" placeholder="Please enter your message" tabindex="5" required></textarea>
                </label>
              </div>
              <div>
                <button name="submit" type="submit" id="contact-submit">SEND</button>
              </div>
            </form>
            <!-- /Form --> 
            
          </div>
          <div class="connectright">
            <div class="addressoutter">
              <div class="addresstitle">Corporate Office</div>
              <div class="addresstitle2">Four Bends LLC</div>
              <div class="addresstitle3">199 Buckingham Way, <br>
                Somerset, NJ 08873,<br>
                USA.</div>
            </div>
            <div class="addressoutter">
              <div class="addresstitle">Madurai Office</div>
              <div class="addresstitle2">Four Bends Pvt Ltd</div>
              <div class="addresstitle3">1st Floor, No 3, <br>
                Chinnasamy Pillai St,
                Bethaniyapuram, <br>
                Madurai - 620 016, <br>
                Tamilnadu, INDIA.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

<!-- End Article Section --> 

<!-- Begin Footer Section -->

<footer>
  <div class="footerbottomsection">
    <div class="wrapper">
      <div class="footeroutter">
        <div class="footertitle">Services</div>
        <div class="footermenu">
          <ul>
            <li><a href="supportservices.html">Support Services</a></li>
            <li><a href="managementconsulting.html">Management Consulting</a></li>
            <li><a href="itstaffing.html">IT Staffing</a></li>
            <li><a href="itconsulting.html">IT Consulting</a></li>
            <li><a href="aemconsulting.html">AEM Consulting</a></li>
            <li><a href="applicationintegration.html">Application Integration</a></li>
            <li><a href="webapplicationsdevelopment.html">Web Applications Development</a></li>
          </ul>
        </div>
      </div>
      <div class="footeroutter">
        <div class="footertitle">Industries</div>
        <div class="footermenu">
          <ul>
            <li><a href="finance.html">Finance</a></li>
            <li><a href="media.html">Media</a></li>
            <li><a href="education.html">Education</a></li>
            <li><a href="manufacturingandretail.html">Manufaturing & Retail</a></li>
          </ul>
        </div>
      </div>
      <div class="footeroutter">
        <div class="footertitle">Development</div>
        <div class="footermenu">
          <ul>
            <li><a href="customapplication.html">Custom Application</a></li>
            <li><a href="mobileapplication.html">Mobile Application</a></li>
            <li><a href="cloudapplication.html">Cloud Application</a></li>
            <li><a href="uiandmultimedia.html">UI & Multimedia</a></li>
          </ul>
        </div>
      </div>
      <div class="footeroutter">
        <div class="footertitle">FourBends</div>
        <div class="footermenu">
          <ul>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="newsandevents.html">News & Events</a></li>
            <li><a href="insights.html">Insights</a></li>
            <li><a href="managementteam.html">Management Team</a></li>
            <li><a href="careers.html">Careers</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li class="footermenuactive"><a href="connect.php">Connect</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footerbottomsection2">
    <div class="wrapper">
      <div class="copyrights">© FourBends, LLC. All rights reserved.</div>
      <div class="bottomsocialmedia">
        <div class="letsconnect">Let’s Connect :</div>
        <div class="bottomsocialmediaimages">
          <div class="bottommediaimages"><a href="#"><img src="images/facebook.jpg" border="0" alt="Facebook" title="Facebook"></a></div>
          <div class="bottommediaimages"><a href="#"><img src="images/linkedin.jpg" border="0" alt="Linkedin" title="Linkedin"></a></div>
          <div class="bottommediaimages"><a href="#"><img src="images/twitter.jpg" border="0" alt="Twitter" title="Twitter"></a></div>
          <div class="bottommediaimages"><a href="#"><img src="images/gplus.jpg" border="0" alt="Gplus" title="Gplus"></a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer Section --> 

<script src="t_js/jquery-2.1.1.js"></script> 
<script src="t_js/masonry.pkgd.min.js"></script> 
<script src="t_js/jquery.flexslider-min.js"></script> 
<script src="t_js/main.js"></script> <!-- Resource jQuery --> 

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');		
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script> 
<script src="js/jquery.banner.js"></script> 
<script>
$(window).load(function() {
	$('.banner').banner();
});
</script> 
<script src="js/scripts.js"></script>
</body>
</html>
