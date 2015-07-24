  <?php  include('head.php');  ?> 
  
<body class="successstories">  
  <!-- Header / Nav -->
  <?php  include('header.php');  ?> 
    	<section id="tuition">
	    	<div class="jumbotron jumbotron-sm">
			    <div class="container">
			        <div class="row">
			            <div class="col-sm-12 col-lg-12">
			                <h1 class="h1 h1course">Tuition Options</h1>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="clearfix"></div>
		  	<div role="tabpanel" id="tuitionTab">
		  		<div class="container">
			  		<div class="col-md-7 animated bounceInLeft">
					    <!-- Nav tabs -->
					    <ul class="nav nav-tabs nav-justified" role="tablist">
						    <li role="presentation" class="active">
						    	<a href="#upfront" aria-controls="upfront" role="tab" data-toggle="tab">Up Front (discount)</a>
						    </li>
						    <li role="presentation">
						    	<a href="#financing" aria-controls="financing" role="tab" data-toggle="tab">Financing Option</a>
						    </li>
					    </ul>
					    <!-- Tab panes -->
					    <div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="upfront">
								
								<div class="col-md-4">
									<h4 class="cost">$5000</h4>
					                <h4 class="cost">-$500 (10%)</h4>
					                <hr>
					                <h3>Total: $4500</h3>
								</div>
								<div class="col-md-8">
									<p>Paying up front saves you 10% on the class, thats a savings of about $900 when compared to the financing option</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="financing">
								<div class="col-md-4">
									<h4 class="cost">Pay off the course <br>over twelve months</h4>
									<hr>
									<h3>Total: $5344</h3>
								</div>
								<div class="col-md-8">
									<ul>
						                <li>$1000 deposit</li>
						                <li>12 total monthly payments of $362</li>
						                <li>Total payable (excluding down payment): $4344</li>
						                <li>APR 15.45%</li>
						              </ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="col-md-5 animated bounceInRight">
						<p class="">We have worked hard to assemble all of the most critical components of a front end developer training program.</p>
						<p>Our goal is to help our students find high paying jobs in their city or improve their current business with their new skills.</p>
      					<h4>We are partnered with <a href="https://lendlayer.com/" target="_blank">LendLayer</a> to provide a financing option for our students!</h4>
				        <div class="text-center">
				        	<br>
				        	<a href="apply.php" class="button large">Apply Now</a>
				        </div>
				    	<p class="text-center">Want to learn more? Check out our <br><a href="faq.php"> frequently asked questions.</a></p>
					</div>
				</div>
			</div>
		</section>
	  <!-- footer / Nav -->
	  <?php  include('footer.php');  ?> 
  	</body>
</html>