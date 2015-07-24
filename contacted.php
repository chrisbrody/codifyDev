  <?php  include('head.php');  ?> 
  
<body>  
  <!-- Header / Nav -->
  <?php  include('header.php');  ?> 

  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 contact">Contact us</h1>
            </div>
        </div>
    </div>
  </div>
  <div class="container">
  	<h1 style="text-align:center;">Your Message Has Been Sent!<h1>
  </div>
<div class="container contactfooter">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="well well-sm">
                <form method="post" action="mail.php">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input name="contactname" type="text" class="form-control" id="name" placeholder="Enter Name" required="required" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input name="contactemail" type="email" class="form-control" id="email" placeholder="Enter Email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="name">
                                  Type Your Message</label>
                              <textarea style="padding:5px;" name="contactmessage" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="What's on your mind Now?"></textarea>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <button type="submit" name="submit" class="button large ls-l btn-group-justified" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
          <form>
            <legend style="color:#1abc9c;"><span class="glyphicon glyphicon-globe"></span> Our Offices</legend>
            <address>
                25 Broadway<br>
                Manhattan, NY 10004<br>
                <a href="tel:5185214189"><i class="fa fa-phone"></i> (518) 521-4189</a>      
            </address>
            <address>
                156 2nd St<br>
                San Francisco, CA 94105 <br>
                <a href="tel:9258763287"><i class="fa fa-phone"></i> (925) 876-3287</a>
            </address>
            <address>
                San Diego, CA <br>
                <a href="tel:9258763287"><i class="fa fa-phone"></i> (925) 876-3287</a>
            </address>
            <address>
                <strong>Admissions</strong><br>
                <a href="mailto:admissions@codifyacademy.com">admissions@codifyacademy.com</a>
            </address>    
            <address>
                <strong>Sam Brody - Industry Mentor</strong><br>
                <a href="mailto:sambrody@codifyacademy.com">sambrody@codifyacademy.com</a>
            </address>            
            <address>
                <strong>Matt Brody - Student Mentor</strong><br>
                <a href="mailto:mattbrody@codifyacademy.com">mattbrody@codifyacademy.com</a>
            </address>
            <address>
                <strong>Chris Brody - Student Mentor</strong><br>
                <a href="mailto:chrisbrody@codifyacademy.com">chrisbrody@codifyacademy.com</a>
            </address>
            <div class="contactSocial">
              <a href="https://www.facebook.com/codifyacad" target="_blank" title="Codify Academy - Facebook">
                <i class="fa fa-facebook-square fa-3x"></i>
              </a>
              <a href="https://twitter.com/CodifyAcad" target="_blank" title="Codify Academy - Twitter">
                <i class="fa fa-twitter fa-3x"></i>
              </a>
            </div>            
          </form>
        </div>
    </div>
</div>

  <?php include('footer.php');?>

</body>
</html>