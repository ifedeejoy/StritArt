<?php 
  	include './includes/head.php';
	include './includes/nav.php';
?>
	 <!--Main layout-->
	<main class="artwork-page">
    
    <div class="container">

      <!--Section: Main info-->
		<section class="mt-6 ml-9 wow fadeIn">
			<!--Grid row-->
				<div class="row">

				<div class="col-lg-9 col-md-12 mb-5">
					<div class="card">
						<div class="card-header">
						<span style="font-size: 0.65rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
						<span style="font-size: 0.65rem; margin-left: 1%;"><i class="fa fa-eye"></i> 30</span>
						<span style="font-size: 0.65rem; margin-left: 1%;"><i class="fa fa-comments-o"></i> 30</span>
						</div>
						<div class="card-body" style="margin-left: 5%;">
							<h4><b>Art Work Title</b></h4>
							<hr>
							<h6 class="text-black-50" style="font-size: 0.75rem; float: right;">By: Artist Name</h6>
							<p class="text-black-50 description-text">
								Fusce dolor libero, efficitur et lobortis at, faucibus nec nunc. Proin fermentum turpis eget nisi facilisis lobortis. Praesent malesuada facilisis maximus. Donec sed lobortis tortor. Ut nec lacinia sapien, sit amet dapibus magna. Vestibulum nunc ex, tempus et volutpat nec, convallis ut massa. Sed ultricies luctus ipsum in placerat.

							Mauris ultrices pharetra lectus sit amet commodo. Fusce ac sagittis magna. Nulla sed ligula sed dui tristique convallis non sit amet dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</p>
							<div class="slider slider-single">
							<div>
								<a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
									<img src="/img/feather.jpg" class="slide-image img-fluid">
								</a>
					        </div>
					        <div>
								<a href="/img/wood.jpg" data-lightbox="image-3" data-title="My caption">
					              	<img src="/img/wood.jpg" class="slide-image img-fluid">
					            </a>
					        </div>
					        <div>
								<a href="/img/deer.jpg" data-lightbox="image-3" data-title="My caption">
					              	<img src="/img/deer.jpg" class="slide-image img-fluid">
					            </a>
					        </div>
					        <div>
								<a href="/img/steel.jpg" data-lightbox="image-3" data-title="My caption">
					              	<img src="/img/steel.jpg" class="slide-image img-fluid">
					            </a>
					        </div>
					        <div>
								<a href="/img/painting.jpg" data-lightbox="image-3" data-title="My caption">
					              	<img src="/img/painting.jpg" class="slide-image img-fluid">
					            </a>
					        </div>
						</div>
						<div class="slider slider-nav">
							<div><span><img src="/img/feather.jpg" class="slide-thumbnail img-fluid"></span></div>
							<div><span><img src="/img/wood.jpg" class="slide-thumbnail img-fluid"></span></div>
							<div><span><img src="/img/deer.jpg" class="slide-thumbnail img-fluid"></span></div>
							<div><span><img src="/img/steel.jpg" class="slide-thumbnail img-fluid"></span></div>
							<div><span><img src="/img/painting.jpg" class="slide-thumbnail img-fluid"></span></div>
						</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 mb-2">
			    	<div class="card">
			    		<div class="views-scale" style="margin: auto; margin-top: 10%; border-radius: 50%;">
			                <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
			                  <img src="/img/feather.jpg" class="artist-thumbnail img-fluid">
			                </a>
			            </div>
			            <h6 class="text-center artist-name"><b>Artist Name</b></h6>
			            <p class="text-center text-black-50">State, Country</p>
			            <button type="button" class="follow-butn">Follow Artist
			            </button>
			            <span class="artwprk-cta">
			            	<button type="button" class="follow-butn ml"><i class="fa fa-envelope"></i></button>   
		               		<button type="button" class="follow-butn ml"><i class="fa fa-thumbs-up"></i></button>  
			            </span>
			            
			            <hr>
			            <h6 style="padding: 10px;">Artwork - Details</h6>
			               <p style="font-size: 0.85rem; padding: 10px;"><b>Medium : </b> Medium Used</p>
			               <p style="font-size: 0.85rem; padding: 10px;"><b>Category : </b> Art Catehory</p>
			               <p style="font-size: 0.85rem; padding: 10px;"><b>Art Subject : </b> Subject Matter</p>
			            <hr> 
			            <div class="card-body" style="margin-top: -5%">
			               <button type="button" class="follow-butn"><i class="fa fa-cart-plus"></i> Purhase Art</button>
			          </div>

			    	</div>		
			  	</div>  
				  
				</div>
			<!--Grid row-->
		</section>

		<section>
			<div class="card comments">
				<h5><b><em>Commenter Name</em></b> say's</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="comment-btns">
					<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><i class="fa fa-reply"></i> Reply</a>
              		<button class="btn btn-warning btn-circle text-uppercase collapsible" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 Replies </button>
              		<div class="content">
					  	<p class="content-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<hr class="comment-hr">
			<div class="card comments">
				<h5><b><em>Commenter Name</em></b> say's</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="comment-btns">
					<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><i class="fa fa-reply"></i> Reply</a>
              		<button class="btn btn-warning btn-circle text-uppercase collapsible" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 Replies </button>
              		<div class="content">
					  	<p class="content-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<hr class="comment-hr">
			<div class="card comments">
				<h5><b><em>Commenter Name</em></b> say's</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="comment-btns">
					<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><i class="fa fa-reply"></i> Reply</a>
              		<button class="btn btn-warning btn-circle text-uppercase collapsible" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 Replies </button>
              		<div class="content">
					  	<p class="content-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<hr class="comment-hr">
			<div class="card comments">
				<h5><b><em>Commenter Name</em></b> say's</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="comment-btns">
					<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><i class="fa fa-reply"></i> Reply</a>
              		<button class="btn btn-warning btn-circle text-uppercase collapsible" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 Replies </button>
              		<div class="content">
					  	<p class="content-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<hr class="comment-hr">
			<div class="card comments">
				<h5><b><em>Commenter Name</em></b> say's</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="comment-btns">
					<a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><i class="fa fa-reply"></i> Reply</a>
              		<button class="btn btn-warning btn-circle text-uppercase collapsible" data-toggle="collapse" href="#replyFour"><span class="glyphicon glyphicon-comment"></span> 1 Replies </button>
              		<div class="content">
					  	<p class="content-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			</div>
			<hr class="comment-hr">
		</section>


    </div>
  	</main>
  <!--Main layout-->

  <!--Footer-->
 <?php include './includes/footer.php';?>
