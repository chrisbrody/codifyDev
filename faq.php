  <?php  include('head.php');  ?> 
  
<body class="successstories">  
  <!-- social media link -->
  <?php  include('social.php');  ?> 
  <!-- Header / Nav -->
  <?php  include('header.php');  ?> 

  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 h1course">Frequently Asked Questions</h1>
            </div>
        </div>
    </div>
  </div>

<!--   <div class=" row rowwidth">
    <div class="col-lg-2 col-lg-offset-1">
        <div class="circleimage">
          <img src="demos/sam.jpg" class="img-circle" style="height:116px" "width:116px"/>
        </div>
    </div>
    <div class="col-lg-9">
      <h2>Have any other questions?<h2>
      <h3>Call Sam, <a href="tel:5185214189">(518) 521-4189</a></h3>
    </div>
  </div>
  <br>
  <hr> -->

  <div class="container section-grey">
    <div class="row rowwidth">
      <div class="col-lg-12 columns font-size-150-percent">

        <h4 class="text-center"><strong>Requirements</strong></h4>

        <br>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Do I need a technical background to take the course?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                No, there are no technical qualifications. As long as you know what a computer is, you're qualified to take our course.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  What do you look for in a new Student?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                  Someone with the drive to better themselves on a daily basis.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Do I need my own laptop?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Yes, you'll need to bring your own laptop to class. You don't need the best laptop to work on front-end development, but you'll need to be able to access the internet at a reasonable speed.
              </div>
            </div>
          </div>
        </div>

        <br>

        <h4 class="text-center"><strong>The Admissions Process</strong></h4>
        <div class="panel-group" id="accordion2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                  How can I apply?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse in">
              <div class="panel-body">
                All you have to do is <a href="apply.php" title="Apply to Codify Academy" >Apply </a> and choose which class dates works for you. We'll call you and ask a few questions to get started.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
                  How often does a new class start?
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                A new class starts every four weeks in each city.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">
                  How soon should I apply to get into a particular class?
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                We accept applicants on a first come first serve basis, so the sooner you apply, the more likely you are to get accepted into an earlier class.

              </div>
            </div>
          </div>
        </div>

        <br>

        <h4 class="text-center"><strong>Tuition</strong></h4>

        <div class="panel-group" id="accordion4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion4" href="#collapseNine">
                  How much is tuition?
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse in">
              <div class="panel-body">
                Tuition is currently $5000.
              </div>
            </div>
          </div>          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion4" href="#collapseEleven">
                  Do you have payment plans?
                </a>
              </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
              <div class="panel-body">
                We no longer offer payment plans. We recently partnered with <a href="https://lendlayer.com/" target="_blank">LendLayer</a> to provide a financing options
                <br>
                <br>
                This option requires a downpayemt and 12 monthly payments <a href="tuition.php">More Details on Financing</a>

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion4" href="#collapseTen">
                  Do you offer other financing?
                </a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
              <div class="panel-body">
                We have recently partnered with <a href="https://lendlayer.com/" target="_blank">LendLayer</a> to provide <a href="tuition.php">financing</a> to our students!
              </div>
            </div>
          </div>
        </div>

     
        <br>
        <br>
    </div>
  </div>
  </div>

  <?php include('footer.php');?>
    
</body>
</html>