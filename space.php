<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0"/>
<title>Global Exhibition on Services</title>
<meta name="keywords" content="Global Exhibition on Services" />
<meta name="description" content="Global Exhibition on Services" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="http://gesdelhi.in//app/webroot/favicon.ico" type="image/x-icon" rel="icon" />
<link href="http://gesdelhi.in//app/webroot/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="/css/frontend/main.css" />
<link rel="stylesheet" type="text/css" href="/css/frontend/mega-menu.css" />
<link rel="stylesheet" type="text/css" href="/css/frontend/component.css" />
<link rel="stylesheet" type="text/css" href="/css/frontend/main-menu.css" />
<link rel="stylesheet" type="text/css" href="/css/frontend/banner.css" />
<link rel="stylesheet" type="text/css" href="/css/frontend/mm-menu.css" />
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min" />
<link rel="stylesheet" type="text/css" href="/css/frontend/resposive.css" />
<script type="text/javascript" src="/js/frontend/html5.js"></script>
<script type="text/javascript" src="/js/frontend/jquery.js"></script>
<script type="text/javascript" src="/js/frontend/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/frontend/jquery.dlmenu.js"></script>
<script type="text/javascript" src="/js/frontend/jquery.slides.min.js"></script>

<link rel="stylesheet" type="text/css" href="/css/frontend/jquery.bxslider.css" />
<script type="text/javascript" src="/js/frontend/jquery.bxslider.js"></script>


<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<script>
        $(document).ready(function(){
                $('p').each(function() {
                          var $this = $(this);
                          if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
                              $this.remove();
                });
                
                $(".mobile-sec-nav a").click(function(){
                    $(".mm-menu-wrap").toggle(700);
                });
                
				$(".mob-search a").click(function(){
                    $(".mob-search-area").slideToggle();
                });
				
				$('#slider1').bxSlider({
  				mode: 'fade',
 				 auto: true,
  				autoControls: false,
  				pause: 6000
				});
				
				
				$('#slider2').bxSlider({
  				auto: true,
  				autoControls: false,
  				pause: 3000,
  				slideMargin: 0
				});

                
                $(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { in : 'dl-animate-in-5', out : 'dl-animate-out-5' }
				});
			});
           });
           jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
          });
        </script>
<!-- This is responsible for Google Trainslator -->
<meta name="google" content="edde4ad75590b75f-5da17f491eb3a72c-g477dbe0b91bb69f0-18" />
</head>
<body>
<!--Header section start-->
<p>
  <header>
  <!--Header top section start-->
<div class="header-top-wrap">
  <div class="center-wrap">
    <div class="top-cii-logo"><a target="_blank" href="http://www.cii.in/"><img alt="" src="/img/header-logo/cii.png" /></a></div>
    <div class="top-scpc-logo"><a href="#"><img  alt="" src="/img/header-logo/sepc.png" /></a></div>
    <div class="top-gov-in"><a target="_blank" href="http://www.commerce.nic.in/MOC/index.asp"><img  alt="" src="/img/header-logo/gov-india.png" /></a></div>
  </div>
</div>
<!--Header top section end-->
<!--Header top section start-->
<div class="header-logo-sec">
  <div class="center-wrap">
    <div class="logo"><a href="/">Logo</a></div>
    <div class="date">23 - 25 April 2015         Pragati Maidan          New Delhi, India</div>
    <div class="header-rt">
      <div class="top-follow">
        <ul>
          <li><a href="https://www.facebook.com/pages/Global-Exhibition-on-Services/701067990013341" target="_blank" class="fb">
            <!--test comment-->
            </a></li>
          <li><a href="#" class="in">
            <!--test comment-->
            </a></li>
          <li><a href="https://twitter.com/GESDelhi" target="_blank" class="tw">
            <!--test comment-->
            </a></li>
          <li><a href="https://www.youtube.com/channel/UCM49H152WbLYlLIAFAhJewA" target="_blank" class="youtube">
            <!--test comment-->
            </a></li>
          <li><a href="#" class="gpuls">
            <!--test comment-->
            </a></li>
        </ul>
      </div>
      <script type="text/javascript">
    $(document).ready(function(){
        $('.search_button').click(function(){
            var sb=$('.searchfield').val();
           
            window.location.href ='/search.html/'+sb;
        });
    });
</script>
      <div class="header-search">
        <form action="/search.html" id="SearchesHomeForm" method="post" accept-charset="utf-8">
          <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
          </div>
          <input name="data[Searches][search]" class="searchfield" required="required" value="" type="text" id="SearchesSearch"/>
          <input type="image" class="search_button" src="/img/search-bt.png" name="" />
        </form>
      </div>
    </div>
    <div class="clearfix">
      <!--test comment-->
    </div>
  </div>
  <div class="clearfix">
    <!--test comment-->
  </div>
</div>
<!--Header top section end-->
<!--Menu section start-->
<div class="menu-sec">
  <div class="center-wrap">
    <!-- Mobile section start -->
    <div class="mobile-section-wrap">
      <aside class="lt-area">
        <div class="bck-to-hm"><a href="/">Home</a></div>
        <!-- <div class="mob-language"><span> <a href="#">Select Language</a> </span></div>-->
      </aside>
      <aside class="rt-area">
        <div class="mob-search"><a href="javascript:;"><img height="18" width="19" alt="image" src="/img/mob-search.png" /></a></div>
        <div class="pip-sec"><img height="19" width="1" alt="image" src="/img/header-pipe.png" /></div>
      </aside>
      <div class="clearfix">
        <!--test comment-->
      </div>
      <script type="text/javascript">
    $(document).ready(function(){
        $('.search_button').click(function(){
            var sb=$('.searchfield').val();
           
            window.location.href ='/search.html/'+sb;
        });
    });
</script>
      <div class="mob-search-area">
        <form action="/search.html" id="SearchesHomeForm" method="post" accept-charset="utf-8">
          <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
          </div>
          <input name="data[Searches][search]" class="searchfield" required="required" value="" placeholder="Search" type="text" id="SearchesSearch"/>
          <input type="image" alt="image" class="mob-sech-img" src="/img/mobile-search.png" name="" />
        </form>
      </div>
      <div class="dl-menuwrapper" id="dl-menu">
        <div class="mobile-sec-nav">Open Menu</div>
        <script>
	$(document).ready(function(){
  $(".link-to-page span").click(function(){
     
	  window.location.href=$(this).parent().attr("href");
 });
});
</script>
        <ul class="dl-menu">
          <li> <a href="/" id="home" class="">Home</a> </li>
          <li> <a href="/about-us.html" id="about-us" class="active">Exhibition</a>
            <ul class="dl-submenu">
              <li class="dl-back"><a href="#">back</a></li>
              <li><a class="link-to-page" href="/about-us.html"><span>About Us</span></a> </li>
            </ul>
          </li>
          <li> <a href="/seminars-1.html" id="seminars-1" class="active">Seminars</a>
            <ul class="dl-submenu">
              <li class="dl-back"><a href="#">back</a></li>
              <li><a class="link-to-page" href="/seminars-1.html"><span>Seminars</span></a> </li>
            </ul>
          </li>
          <li> <a href="/for-exhibitors.html" id="for-exhibitors" class="">For Exhibitors</a> </li>
          <li> <a href="/news.html" id="news" class="">News </a> </li>
          <li> <a href="/gallery.html" id="gallery" class="">Gallery</a> </li>
          <li> <a href="/contact.html" id="contact" class="">Contact </a> </li>
        </ul>
        <!--<script>
	$(document).ready(function(){
  $(".link-to-page span").click(function(){
     
	  window.location.href=$(this).parent().attr("href");
 });
});
</script>
<ul class="dl-menu">

              
         <li>

             <a href="/" id="home" class="">Home</a>   

         </li>  

    
         <li>

          <a href="/about-us.html" id="about-us" class="active">Exhibition</a><ul class="dl-submenu">  <li class="dl-back"><a href="#">back</a></li> 
                    <li><a class="link-to-page" href="/about-us.html"><span>About Us</span></a>

                    
                    </li>

                 
              </ul> 

            

                 

         </li>  

    
         <li>

          <a href="/seminars-1.html" id="seminars-1" class="active">Seminars</a><ul class="dl-submenu">  <li class="dl-back"><a href="#">back</a></li> 
                    <li><a class="link-to-page" href="/seminars-1.html"><span>Seminars</span></a>

                    
                    </li>

                 
              </ul> 

            

                 

         </li>  

    
         <li>

          <a href="/for-exhibitors.html" id="for-exhibitors" class="">For Exhibitors</a>   

         </li>  

    
         <li>

          <a href="/news.html" id="news" class="">News </a>   

         </li>  

    
         <li>

          <a href="/gallery.html" id="gallery" class="">Gallery</a>   

         </li>  

    
         <li>

          <a href="/contact.html" id="contact" class="">Contact </a>   

         </li>  

     

         

          </ul>



 -->
      </div>
      <!-- Mobile section end -->
    </div>
    <nav>
      <div class="select-language">
        <div id="google_translate_element"></div>
        <script type="text/javascript">
      function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,de,es,ar,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
  </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      </div>
      <div id="menu">
        <ul>
          <li> <a href="/" id="home" class="">Home</a> </li>
          <li> <a href="/about-us.html" id="about-us" class="active">Exhibition</a>
            <ul>
              <li class=""> <a href="/about-us.html">About Us</a>
                <ul class="sub-menu">
                </ul>
              </li>
            </ul>
          </li>
          <li> <a href="/seminars-1.html" id="seminars-1" class="active">Seminars</a>
            <ul>
              <li class=""> <a href="/seminars-1.html">Seminars</a>
                <ul class="sub-menu">
                </ul>
              </li>
            </ul>
          </li>
          <li> <a href="/for-exhibitors.html" id="for-exhibitors" class="">For Exhibitors</a> </li>
          <li> <a href="/news.html" id="news" class="">News </a> </li>
          <li> <a href="/gallery.html" id="gallery" class="">Gallery</a> </li>
          <li> <a href="/contact.html" id="contact" class="">Contact </a> </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<!--Menu section end-->
</header>
</p>
<!--Header section end-->
<div class="clearfix"></div>
<!--Home banner section start-->
<div class="home-banner-sec">
  
  <div class="slider-area">
    <div class="callbacks_container topimgnocontrol">      
	  <ul id="slider2">
 	 	<li><img src="/img/sector-topbanner/it.jpg" alt="" /></li>  		
		</ul>
    </div>
  </div>
  
  
</div>
<div class="clearfix">
  <!--test application -->
</div>
<!--Home banner section end-->
<!--Body section start-->
<div class="hm-body">
  <div class="center-wrap">
    <!--Welcome section start-->
    <div class="welcome-sec">
      <h1 class="largeheadings">IT, ITES and Telecom</h1>
      <p>India is the world's second-largest telecommunication market, with around 970 million subscribers by the end of 2014. India's internet users totaled over 300, with close to 60% of them accessing the net from a mobile connection.</p>
	  <p>Telecommunication services are globally recognised as one of the driving forces for overall economic development in a nation. India recognises this fact and hence, has taken several major initiatives to provide  business friendly environment for companies in this sector.</p>
	  <p>Driven by 3G and 4G services, it is expected that there will be huge machine-to-machine (M2M) growth in India in 2016-17, according to UST Global. There is  also a lot of scope for growth of M2M services in the government's ambitious Rs 7,000 crore (US$ 1.1 billion) 'Smart City' program.</p>
	  <p>The rapid strides in the telecom sector have been facilitated by liberal policies of India that provide easy market access for telecom equipment and a fair regulatory framework for offering telecom services at affordable prices. According to a study by GSMA, it has been expected that smartphones will account for two out of every three mobile connections globally by 2020 and India is all set to become the fourth largest smartphone market.</p>
	  <p>Recognizing the need for greater penetration of IT services domestically, Digital India has been envisioned as an ambitious umbrella program to prepare India for knowledge-based transformation. This would ensure broadband connectivity at village level, improved access to services through IT-enabled platforms, greater transparency in government processes and increased indigenous production of IT hardware and software. </p>
	  <p>One of the important components of this program is people?s empowerment through availability of entitlements on the cloud, coupled with Aadhaar  Authentication Platform.  Recognizing the importance of IT, the government?s Make in
India mission has included IT and BPM among the 25 focus sectors.</p>
<p>The app market is expected to expand at a CAGR of 70.4 per cent to US$ 100 billion during 2012-15. The segment's growth is expected to  be driven by increasing mobile connections and availability of low-cost smartphones.</p>
<p>IT, ITES and Telecom companies will be housed in Hall No 14. Top telecom service providers including SMEs, start-ups and innovators in the space would be the participants. A large number of IoT, Big Data and Cloud Computing companies would be exhibitors and visitors in this section.</p>
      
	 
	  <p>To be an exhibitor in the IT, ITES and Telecom sector mail to : <a href="mailto:aakanksha.kumar@cii.in">aakanksha.kumar@cii.in</a></p>
    </div>
    <!--Welcome section end-->
  
	
	<!--Boxes section start-->
		<div class="higlights-sec"><article>
<div class="colorboxes purple">
<h2><a href="#">VISITOR REGISTRATION</a></h2>
<p>GES will offer a one-stop-shop for meetings, networking  and collaboration in the services space</p>
</div>
</article> 	  <article>
<div class="colorboxes orange">
<h2><a href="#">EXHIBIT SPACE</a></h2>
<p>Interested in exhibiting in the 2015 GES Show? We will get in touch with you to complete the process</p>
</div>
</article> 	  <article>
<div class="colorboxes green">
<h2><a href="#">ASK ANY QUESTION ON GES</a></h2>
<p>We will be most happy to answer any of your queries with regard to attend or exhibit at the GES Show</p>
</div>
</article></div>
	<!--Boxes section end--> 	 	
	<!--Boxes section start-->
		<div class="higlights-sec"><article>
<div class="colorboxes blue">
<h2><a href="#">INTERNATIONAL VISITORS</a></h2>
<p>Getting ready for GES? Here's all you want to know about travelling to GES outside of India and applying visa online</p>
</div>
</article> 	  <article>
<div class="colorboxes yellow">
<h2><a href="#">B2B MEETINGS</a></h2>
<p>Once you have completed your registration, you will receive username and password for you to pre-fix B2B meetings during GES</p>
</div>
</article> 	  <article>
<div class="colorboxes darkpurple">
<h2><a href="#">Exhibitors List</a></h2>
<p>Here's the list of confirmed exhibitors and partners at the GES Show. This page will constantly get updated.</p>
</div>
</article></div>
	<!--Boxes section end-->
  </div>
  	<div class="clearfix">
    <!--test comment-->
  	</div>
	
	<!-- Quotes starts here -->
	<div class="sector-section focous nocontrol"> 
  <div class="center-wrap">
      <h1 class="largeheadings">Quotes</h1>
	  <ul id="slider1">
  		<li><img title="" src="/img/arunjaitley.jpg" border="0" class="quotesimg">India could develop itself as a regional educational hub, and attract students from other developing countries for higher studies. Besides, India can also emerge as a strong player in the healthcare sector by providing affordable healthcare services to patients from developing countries. - <strong>Mr Arun Jaitley</strong>, Minister of Finance, Corporate Affairs, and Information & Broadcasting</li>
  		<li><img title="" src="/img/nirmala.jpg" border="0" class="quotesimg">The main objective of the GES is to create a global platform for increased trade in services and it will be an annual event. This will enhance strategic cooperation and develop synergies to strengthen multi-lateral relationship between all stakeholders, tap the potential for services' exports and increase FDI flow in the services sector. - <strong>Ms Nirmala Sitharaman</strong>, Minister of State for Commerce & Industry</li>
  		
	  </ul>  
<div class="clearfix"><!--test comment--></div>
  </div>
  </div>
	<!-- Quotes starts here -->
	<div class="clearfix">
    <!--test comment-->
  	</div>
	
	<!-- News and Video starts here -->
	<div class="sector-section news greybg ">
	 <div class="center-wrap">
	<div class="video-sec">
      <h1 class="largeheadings">videos</h1>
      <div class="landingvideoblocks">
	<p><a class="various fancybox.iframe" href="//www.youtube.com/embed/QMri9kQSWRs"><img src="/img/galleries/images/thumb/Video_01-0.jpg"> </a></p>
	<p class="introtxt">GES Video - AV 02</p>
	</div>
	  <div class="landingvideoblocks">
	<p><a class="various fancybox.iframe" href="//www.youtube.com/embed/XVQDq6UN7LM"><img src="/img/galleries/images/thumb/Makeinindia.jpg"></a></p>
	<p class="introtxt">Make in India, Made for the World</p>
	</div>
	  <div class="landingvideoblocks">
	<p><a class="various fancybox.iframe" href="//www.youtube.com/embed/zwGW7pIH49k"><img src="/img/galleries/images/thumb/Bobby.jpg"></a></p>
	<p class="introtxt">Bobby Bedi on Entertainment Service Exports from India</p>
	</div>
	  <div class="landingvideoblocks">
	<p><a class="various fancybox.iframe" href="//www.youtube.com/embed/t2jiiPEPdeo"><img src="/img/galleries/images/thumb/Edu_Services.jpg"></a></p>
	<p class="introtxt">Potential of Indian Education Services</p>
	</div>
	  <div class="landingvideoblocks">
	<p><a class="various fancybox.iframe" href="//www.youtube.com/embed/pqYcoyg1clw"><img src="/img/galleries/images/thumb/PM.jpg"></a></p>
	<p class="introtxt">Ease of Doing Business in India</p>
	</div>
    </div>
	
	
	</div>
	</div>
	<div class="clearfix">
    <!--test comment-->
  	</div>
	<!-- News and Video starts here -->
	
  <!-- Sectors starts here -->
  <div class="sector-section focous">
  <div class="center-wrap">
      <h1 class="largeheadings">Focus Sector</h1>
	  <p>The First Global Exhibition on Services will be a global platform to showcase the inherent strength of services sector in India with focus on the following Sectors:</p>
	  
	  <ul>
    <li class="first"><a href="http://www.gesdelhi.in/it.html">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/telecome.png'" onMouseOver="this.src='/img/icon/it_and_telicom_hover.png'" alt="" src="/img/icon/telecome.png"></div>
    <span>IT and Telecom </span></a></li>
    <li><a href="http://www.gesdelhi.in/tourism.html">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/tourism.png'" onMouseOver="this.src='/img/icon/toursim_hover.png'" alt="" src="/img/icon/tourism.png"></div>
    <span>Tourism </span></a></li>
    <li class="mobile-hoz-img-margin"><a href="http://www.gesdelhi.in/media-ent.html">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/media.png'" onMouseOver="this.src='/img/icon/median_and_ent_hover.png'" alt="" src="/img/icon/media.png"></div>
    <span>Media &amp; Entertainment</span></a></li>
    <li><a href="http://www.gesdelhi.in/healthcare.html">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/health-care.png'" onMouseOver="this.src='/img/icon/healthcare_hover.png'" alt="" src="/img/icon/health-care.png"></div>
    <span>Healthcare</span></a></li>
    <li class="tab-focus-img-no-margin"><a href="/pdf/about_pdf/logistics.pdf" target="_blank">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/logistic.png'" onMouseOver="this.src='/img/icon/logistics_hover.png'" alt="" src="/img/icon/logistic.png"></div>
    <span>Logistics</span></a></li>
    <li class="first tab-focus-img-margin"><a href="/pdf/about_pdf/professional_services.pdf" target="_blank">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/services.png'" onMouseOver="this.src='/img/icon/professional_services_hover.png'" alt="" src="/img/icon/services.png"></div>
    <span>Professional Services</span></a></li>
    <li class="mobile-hoz-img-margin"><a href="/pdf/about_pdf/education.pdf" target="_blank">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/education.png'" onMouseOver="this.src='/img/icon/education_hover.png'" alt="" src="/img/icon/education.png"></div>
    <span>Education</span></a></li>
    <li><a href="/pdf/about_pdf/sme.pdf" target="_blank">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/msme.png'" onMouseOver="this.src='/img/icon/sme_in_hover.png'" alt="" src="/img/icon/msme.png"></div>
    <span>SME in Services</span></a></li>
    <li class="tab-focus-img-no-margin"><a href="http://www.gesdelhi.in/rd.html">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/rd.png'" onMouseOver="this.src='/img/icon/r_and_d_hover.png'" alt="" src="/img/icon/rd.png"></div>
    <span>R&amp;D </span></a></li>
    <li><a href="#">
    <div class="img-sec"><img width="75" height="73" onMouseOut="this.src='/img/icon/space.png'" onMouseOver="this.src='/img/icon/space_hover.png'" alt="" src="/img/icon/space.png"></div>
    <span>Space</span></a></li>
</ul>
<div class="clearfix"><!--test comment--></div>
  </div>
  </div>
  <!-- Sectors starts here -->
  
  
  
  
  <!--Information section start-->
  <div class="information-section">
    <div class="center-wrap">
      <h1>Download GES Flyers</h1>
      <ul>
        <li><a target="_blank" href="/pdf/home/GES_Flyer_Korean.pdf"><img height="111" width="185" alt="" src="/img/home-flier/korean.jpg" /> <span>Korean</span> </a></li>
        <li><a target="_blank" href="/pdf/home/homeMandarin Flyer.pdf"><img height="111" width="185" alt="" src="/img/home-flier/mandarin.jpg" /> <span>Mandarin</span> </a></li>
        <li><a target="_blank" href="/pdf/home/Portuguese Flyer-Low.pdf"><img height="111" width="186" src="/img/home-flier/portuguese.jpg" alt="" /> <span>Portuguese</span> </a></li>
        <li><a target="_blank" href="/pdf/home/Russian Flyer-High.pdf"><img height="111" width="185" alt="" src="/img/home-flier/russian.jpg" /> <span>Russian</span> </a></li>
        <li><a target="_blank" href="/pdf/home/Spanish Flyer.pdf"><img height="111" width="185" alt="" src="/img/home-flier/spanish.jpg" /> <span>Spanish</span> </a></li>
      </ul>
      <div class="clearfix">
        <!--test comment-->
      </div>
    </div>
    <div class="clearfix">
      <!--test comment-->
    </div>
  </div>
  <!--Information section end-->
  <div class="clearfix">
    <!--test comment-->
  </div>
  <!--Services section start-->
  <div class="services-section">
    <div class="center-wrap">
      <h1>Information &amp; Services</h1>
      <ul>
        <li>
          <div class="view view-first"><a href="/ppt/ges_presentation.pptx"> <img alt="" src="/img/services/register.jpg" />
            <div class="content">
              <p><span>FAQ's</span></p>
            </div>
            </a></div>
        </li>
        <!--<li>
    <div class="view view-first"><a href="#"> <img alt="" src="/img/services/map.jpg" />
    <div class="content">
    <p><span>Maps</span></p>
    </div>
    </a></div>
    </li>-->
        <li>
          <div class="view view-first"><a href="http://www.events.iceindia.in/ges2015delhi/accommodation.html"> <img height="111" width="186" alt="" src="/app/webroot/img/userfiles/Accomodation.jpg" />
            <div class="content">
              <p><span>Accommodation</span></p>
            </div>
            </a></div>
        </li>
        <li>
          <div class="view view-first"><a href="#"> <img alt="" src="/img/services/press.jpg" />
            <div class="content">
              <p><span>Press</span></p>
            </div>
            </a></div>
        </li>
        <li>
          <div class="view view-first"><a href="#"> <img alt="" src="/img/services/exhibitor.jpg" />
            <div class="content">
              <p><span>Videos</span></p>
            </div>
            </a></div>
        </li>
        <li>
          <div class="view view-first"><a href="http://www.incredibleindia.org/en/" target="_blank"> <img alt="" src="/img/services/incredible-india.jpg" />
            <div class="content">
              <p><span>Incredible India</span></p>
            </div>
            </a></div>
        </li>
      </ul>
      <div class="clearfix">
        <!--test comment-->
      </div>
    </div>
    <div class="clearfix">
      <!--test comment-->
    </div>
  </div>
  <!--Services section end-->
  <div class="clearfix">
    <!--test comment-->
  </div>
</div>
</div

  
        >
<!--Body section end-->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <footer>
<div class="top-footer">
<div class="center-wrap">
<div class="footer-logo"><img width="167" height="91" src="/img/footer-logo.png" alt="" /></div>
<div class="footer-follow">
  <div class="top-follow">
    <ul>
      <li><a target="_blank" href="https://www.facebook.com/pages/Global-Exhibition-on-Services/701067990013341" class="fb">
        <!--test comment-->
        </a></li>
      <li><a href="#" class="in">
        <!--test comment-->
        </a></li>
      <li><a target="_blank" href="https://twitter.com/GESDelhi" class="tw">
        <!--test comment-->
        </a></li>
      <li><a target="_blank" href="https://www.youtube.com/channel/UCM49H152WbLYlLIAFAhJewA" class="youtube">
        <!--test comment-->
        </a></li>
      <li><a href="#" class="gpuls">
        <!--test comment-->
        </a></li>
    </ul>
  </div>
</div>
<div class="sign-up">
<h2>Sign up for GES Newsletter</h2>
<script type="text/javascript" src="/js/frontend/popup.js"></script>
<link rel="stylesheet" type="text/css" href="/css/frontend/popup.css" />
<script>
function ValidateEmail(uemail)  
{  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(uemail.match(mailformat))  
    {  
        return true;  
    }  
    else  
    {  
         
        return false;  
    }  
} 
    $(document).ready(function(){
        $("#go").click(function(){
           var error=1;
           var flage=1;
          if($("#PageEmail").val().length==0)
          {
              openPopup("Enter your email address");
              
              //enter your email address
          }
          else if(ValidateEmail($("#PageEmail").val())==false)
          {
              openPopup("Enter your valid email address");
            
              //you have enterred invalid email addrsss
          }else{
               $("#error"+error).hide();
              error++;flage++;}
            
            if(flage==2)
            {
                $.ajax({
                  url: $("#formID_subs").attr("action"),
                  data:$("#formID_subs").serialize(), 
                  type:'post',
                   success: function(data) {
                      openPopup(data);
                      $("#PageEmail").val("");
                      return false;  
                }
               });
                
            }  
            return false;  
        });
        
    });
</script>
<div class="form-sec">
<form action="/pages/subscribe_data" controller="pages" id="formID_subs" method="post" accept-charset="utf-8">
<div style="display:none;">
  <input type="hidden" name="_method" value="POST"/>
</div>
<!-- popUp  -->
<div  id="backgroundPopup"></div>
<div style="display:none" id="Popup">
  <div class="close"></div>
  <div id="popup_content"></div>
</div>
<!-- /popUp  -->
<div class="subscribe-sec">
  <input type="hidden" name="data[Page][active]" value="1" id="PageActive"/>
  <input name="data[Page][email]" type="text" id="PageEmail"/>
  <input type="image" id="go" src="/img/go.png" name="" />
</div>
</div>
</div>
</div>
<div class="clearfix">
  <!--test comment-->
</div>
</div>
<div class="clearfix">
  <!--test comment-->
</div>
<!--Footer Bottom section start-->
<div class="footer-bottom">
  <div class="center-wrap">
    <div class="footer-contact-info">
      <h2>For more information, please contact</h2>
      <p><span>Anjula Singh Solanky</span> | <a href="mailto:anjula.solanky@cii.in">anjula.solanky@cii.in</a>, <span>Atreyee Talapatra</span> | <a href="mailto:atreyee.talapatra@cii.in">atreyee.talapatra@cii.in</a></p>
      <p>The Mantosh Sondhi Centre, 23, Institutional Area, Lodi Road, New Delhi &ndash; 110 003, India P: +91 (11) 4577 1015, 4577 1053 F: +91 (11) 2462 6149</p>
    </div>
  </div>
</div>
<!--Footer Bottom section end-->
<div class="clearfix">
  <!--test comment-->
</div>
<!--Copy right section start-->
<div class="copy-right">
  <div class="center-wrap">
    <ul class="footer-link">
      <li><a href="sitemap.html">Sitemap</a> <a href="privacy-policy.html">Privacy Policy</a> <a href="terms-conditions.html">Terms and Conditions </a> <a href="faqs.html">FAQs</a></li>
    </ul>
    <h1>&copy; 2015 GES. All rights reserved. Designed by <a target="_blank" href="http://www.cybergraff.com/">Cybergraff</a>.</h1>
    <div class="clearfix">
      <!--test comment-->
    </div>
  </div>
</div>
<!--Copy right section end-->
<div class="back-to-top"><a href="#"><img src="/img/back-to-top.jpg" alt="image" /></a></div>
</footer>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
