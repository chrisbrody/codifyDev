  <?php  include('head.php');  ?> 
  
<body>  
  <!-- social media link -->
  <?php  include('social.php');  ?> 
  <!-- Header / Nav -->
  <?php  include('header.php');  ?> 

	<section class="slideshow-wrapper">
		<div id="slider-wrapper">
			<div id="layerslider" style="width:100%;height:550px;">
				<div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">
          <img src="demos/codeup.jpg" class="ls-bg" alt="Slide background"/>

          <p class="ls-l" style="
          top:140px;
          left:100px;
          font-weight: 700;
          height:40px;
          padding: 5px 14px 10px;
          font-size:34px;
          line-height:52px;
          color:#ffffff;
          background:#1abc9c;
          border-radius:0;
          white-space: nowrap;" 
          data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
          BECOME A DEVELOPER IN 16 WEEKS
          </p>
          
          <p class="ls-l" style="
          top:220px;
          left:100px;
          font-size:23px;
					font-weight: 300;
					background: #2e3236;
					color:#ffffff;
          border-left:5px solid #1abc9c;
					padding:10px 10px 6px 10px;
          white-space: nowrap;" 
          data-ls="offsetxin:0;durationin:1500;delayin:700;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
          GET HIRED WITH THE HELP OF A MENTOR
          </p>

          <a href="apply.php" class="button large ls-l" style="
          top:320px;
          left:100px;
          font-size:30px;
          font-weight: bold !important;
          padding:12px 10px 5px 10px;" 
          data-ls="offsetxin:0;durationin:1500;delayin:1100;rotateyin:180;skewxin:60;transformoriginin:25% 50% 0;offsetxout:180;durationout:750;skewxout:60;">
          APPLY NOW
          </a>
				</div><!-- end first slide -->
			</div><!-- layer slider -->
		</div><!-- slider wrapper -->
	</section><!-- end slideshow-wrapper -->

    
  <section class="section1">
	  <div class="container">           
    	<div class="col-sm-4 col-sm-offset-2">
				<div class="servicebox text-center">
					<div class="service-icon">
						<div class="dm-icon-effect-1" data-effect="slide-left">
							<h3 style="text-align:left; line-height:35px;font-size:20px">Our part-time program allows you to keep working while you're heading for that new developer job.<br><br>Our industry mentors guide you through the job hunting process and show you how to land your dream job.<br><br>Codify Academy teaches the skills needed to get hired as a full-time web developer in only 16 weeks.</h3>
						</div>
						
					</div><!-- service-icon -->
				</div><!-- servicebox -->
    	</div><!-- large-4 -->
        
    	<div class="col-sm-3 col-sm-offset-1">
				<div class="servicebox text-center">
					<div class="service-icon">
						<div class="dm-icon-effect-1" data-effect="slide-right">
              <form id="homeform" method="post" action="https://formkeep.com/f/2bcf6d08341c">
                <div class="row">
                  <h2 id="basicinfo">Apply Now</h2>
                  <input placeholder="Full Name" required type="text" name="fullname" class="formfield form-control homepage"><br>
                  <input placeholder="Email" required type="email" name="email" class="formfield form-control homepage"><br>
                  <input placeholder="Phone Number" required type="text" name="phonenumber"class="formfield form-control homepage"><br>
                  <select name="location" id="homeselect" class="form-control">
                    <option value="manhattan app" name="city">Manhattan</option>
                    <option value="san francisco app" name="city">San Francisco</option>
                    <option value="san diego app" name="city">San Diego - Coming Soon</option>
                  </select>
                  <input type="hidden" name="utf8" value="✓">
                </div>
                <div class="applybutton">
                  <button id="submithome" name="Apply" type="submit" class="button large">Submit for Info</button>
                </div>
              </form>
						</div>
						</div>
					</div><!-- service-icon -->
				</div><!-- servicebox -->
        	</div><!-- large-4 -->
    </div><!-- end container -->
	</section><!-- end section -->
    
  <section class="section5">
  	<div class="container">
    	<div class="col-lg-6 col-md-6 col-sm-12 columns textconsole">
        <div class="widget" data-effect="slide-left">
          <div class="text-editor-wrap">
            <div class="title-bar"><span class="title">What will you learn in 16 weeks?<span class="terminal-height"></span></span></div>
            <div class="type-wrap">
                <span id="typed"></span><span id="typed-cursor"></span>
            </div>
          </div>
        </div><!-- end widget -->
      </div><!-- large-6 -->
    	<div class="col-lg-6 col-md-6 col-sm-12 columns">
        <div class="widget clearfix">
        	<div class="services_lists">
          	<div class="services_lists_boxes clearfix">
            	<div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                  <a href="#section5" class=""> <i class="active dm-icon-medium fa fa-clock-o fa-2x"></i> </a>
                </div>
              </div>
            	<div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                    <h4>Fits your busy schedule</h4>
                    <hr>
                </div>
                <p>We currently offer weekend classes, so you can still work full time while learning how to program and planning your next big career move.</p>
              </div>
            </div><!-- services_lists_boxes -->                    
          	<div class="services_lists_boxes clearfix">
            	<div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon" data-effect="slide-bottom">
                  <a href="#section5" class=""> <i class="active dm-icon-medium fa fa-briefcase fa-2x"></i> </a>
                </div>
              </div>
            	<div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                  <h4>Kickstart your portfolio</h4>
                  <hr>
                </div>
                <p>During the 16 week course, you'll be building a complete portfolio that will give your resume a huge boost when your job searching.</p>
              </div>
            </div><!-- services_lists_boxes -->                                     
          	<div class="services_lists_boxes clearfix">
            	<div class="col-lg-3 col-md-3 col-sm-12">
                <div class="services_lists_boxes_icon_none" data-effect="slide-bottom">
                  <a href="#section5" class=""> <i class="active dm-icon-medium fa fa-usd fa-2x"></i> </a>
                </div>
              </div>
            	<div class="col-lg-9 col-md-9 col-sm-9">
                <div class="servicetitle">
                  <h4>Expand your career options</h4>
                  <hr>
                </div>
                <p>The tech industry isn't the only one that needs front end developers. After the course, you'll be able to find a job in nearly any industry that uses websites in their business.</p>
              </div>
            </div><!-- services_lists_boxes -->
          </div><!-- services_lists -->
        </div><!-- end widget -->
      </div><!-- large-6 -->
  	</div><!-- end container -->
  </section><!-- end section2 -->

  <!-- <section class="section4 text-center" style="background-image:url('demos/brooklyn2.jpg'); background-size:cover;">
      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
  	   <div class="general-title text-center">
          <h3>Created by the guys who Founded <a href="http://codeyonkers.com" title="Code Yonkers - Teaching Kids the Future Now!" target="_blank"><span id="codeyonkers">CodeYonkers</span></a></h3>
          <br>   
        </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 first">
              <div class="testimonial">
                  <img data-effect="slide-bottom" class="alignleft img-circle" src="demos/sam.jpg" alt="">
                  <p>A serial entrepreneur who learned to code out of necessity for his businesses. He now heads the back end, but don't let that fool you. He started as a front end developer and still uses those skills daily.</p>
                  <div class="testimonial-meta">
                  <h4>Sam Brody <small>
                  <a href="mailto:sambrody@codifyacademy.com">sambrody@codifyacademy.com</a></small></h4>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 second">
              <div class="testimonial">
                  <img data-effect="slide-bottom" class="alignleft img-circle" src="demos/matt.jpg" alt="">
                  <p>Our go to designer for everything front end. Matt tries to stay in front of trends find ways to make new ones. front end development was a way to bring his design visions to life in a whole new way.</p>
                  <div class="testimonial-meta">
                  <h4>Matt Brody <small><a href="mailto:mattbrody@codifyacademy.com">mattbrody@codifyacademy.com</a></small></h4>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 last">
              <div class="testimonial">
                  <img data-effect="slide-bottom" class="alignleft img-circle" src="demos/chris.jpg" alt="">
                  <p>Our front end king and leader of the pack on all of our layout work. Chris combines form and functionality to create the pages of his dreams. Lucky for us, his dreams are all about business...and travel.</p>
                  <div class="testimonial-meta">
                  <h4>Chris Brody <small><a href="mailto:chrisbrody@codifyacademy.com">chrisbrody@codifyacademy.com</a></small></h4>
                  </div>
              </div>
          </div>
      </div>	                   
  </section> -->

  <section class="section2">
    <div class="container">
      <div class="message text-center">
        <h2 class="big-title">Learn to build AMAZING <span>websites</span> & <span>web apps</span>!</h2>
        <p class="small-title">The part time program that teaches you how to become a front end developer in 16 weeks</p>
        <a class="button large" href="apply.php">Apply Now</a>
      </div><!-- end message -->
    </div><!-- end container -->
  </section><!-- end section2 -->
   
  <!-- <footer class="footer">
        <div class="container">
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">About us</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s..</p>
                <a class="button small" href="#">read more</a>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Recent Posts</h4>
				<ul class="recent_posts">
					<li>
                    	<a href="home1.html#">
						<img src="demos/recent_post_01.png" alt="" />Our New Dashboard Is Here
                        </a>
						<a class="readmore" href="#">read more</a>
					</li>
					<li>
                    	<a href="home1.html#">
						<img src="demos/recent_post_02.png" alt="" />Design Is In The Air
                        </a>
						<a class="readmore" href="#">read more</a>
					</li>
				</ul>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Get In Touch</h4>
                <ul class="contact_details">
                	<li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
                	<li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
                	<li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
                	<li><a href="#"><i class="fa fa-map-marker"></i> View large map</a></li>
                </ul>
            </div>
            <div class="widget col-lg-3 col-md-3 col-sm-12">
            <h4 class="title">Flickr Stream</h4>
				<ul class="flickr">
					<li><a href="#"><img alt="" src="demos/flickr_01.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_02.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_03.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_04.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_05.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_06.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_07.jpg"></a></li>
					<li><a href="#"><img alt="" src="demos/flickr_08.jpg"></a></li>
				</ul>
            </div>
        </div>
  </footer> -->
        
  <div class="copyrights">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-12 columns">
        <p>Copyright © <script>document.write(new Date().getFullYear());</script> - All rights reserved <a title="Codify Academy" href="http://codifyacademy.com">Codify Academy</a></p>
      </div><!-- end widget -->
      <div class="col-lg-6 col-md-6 col-sm-12 columns text-right">
        <div class="footer-menu right">
          <ul class="menu">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="thecourse.php">The Course</a>
            </li>
            <li>
              <a href="tuition.php">Tuition</a>
            </li>
            <li>
              <a href="apply.php">Apply</a>
            </li>
            <li>
              <a href="faq.php">Faq</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div><!-- end large-6 -->   
    </div><!-- end container -->
  </div><!-- end copyrights -->
    

  <!-- Main Scripts-->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
	<script src="js/jquery.hoverdir.js"></script>
  <script src="js/owl.carousel.js"></script>	
  <script src="js/jetmenu.js"></script>	
	<script src="js/jquery.hoverex.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<!-- LayerSlider script files -->
	<script src="layerslider/js/greensock.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<!-- Initializing the slider -->
	<script>
		jQuery("#layerslider").layerSlider({
			pauseOnHover: false,
			autoPlayVideos: false,
			responsive: false,
			responsiveUnder: 1280,
			layersContainer: 1280,
			skin: 'v5',
			skinsPath: 'layerslider/skins/'
		});
	</script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/typed.js" type="text/javascript"></script>
  <script>
    $(function(){
      var options = {
          strings: ["Everything you need to know to become a front end developer.", "First, you'll learn HTML. The building blocks of every web page on the internet.", "Second, we'll cover CSS. Which makes every website on the interent look pretty...or ugly, depending on your taste.", "Then, we'll move on to website functionality. Teaching you Javascript, jQuery, and AJAX, so your websites can interact with other tools online.", "It's easier than it sounds and a whole lot of fun!"],
          typeSpeed: 0,
          backSpeed: -30,
          backDelay: 3000,
          startDelay: 2000
      }
      $(".section5").mouseover(function(){
          $("#typed").typed(options);
      });
    });
  </script>
  <!-- Google Code for Remarketing Tag -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 909855431;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/909855431/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
  <!-- Facebook code for Remarketing Tag -->
  <script>
    (function() {
      var _fbq = window._fbq || (window._fbq = []);
      if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
      }
      _fbq.push(['addPixelId', '313066122236538']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript>
      <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=313066122236538&amp;ev=PixelInitialized" />
    </noscript>
	</body>
</html>