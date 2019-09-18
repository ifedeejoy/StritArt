<?php 
  include './includes/head.php';
?>


  <?php include './includes/nav.php';?>
  <?php include './includes/header.php';?>

  <!--Main layout-->
  <main>
    
    <div class="container">

      <div class="row text-center" style="margin-top: 3%;">

        <div class="col-lg-6 col-md-12 mb-3">
          <form class="form">
            <input type="text" class="form__field" placeholder="Search By Artist Or Art Work" />
            <button type="button" class="search-btn btn--primary btn--inside uppercase"><i class="fa fa-search "></i></button>
          </form>
        </div>
        
        <div class="col-lg-5 col-md-12 mb-3">
            <div class="drop" style="margin-top: 1%;">
              <div class="option active placeholder" data-value="placeholder">
                Select Category
              </div>
              <div class="option" data-value="wow">
                Wow!
              </div>
              <div class="option" data-value="drop">
                So dropdown!
              </div>
              <div class="option" data-value="select">
                Very select!
              </div>
              <div class="option" data-value="custom">
                Much custom!
              </div>
              <div class="option" data-value="animation"> 
                Such animation!
              </div>
            </div>
        </div>
        <button type="button" class="btn btn--primary search-button">Go</button>
      </div>

      <!--Section: Main info-->
      <section class="mt-6 ml-9 wow fadeIn new-artwork">
        <h3 class="h3 text-center mb-5">Newest Artworks</h3>
        <!--Grid row-->
        <div class="row">

          <div class="col-lg-9 col-md-12 mb-5">
            <div class="row">

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/feather.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/wood.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/wood.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/deer.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/deer.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/feather.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/wood.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/wood.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/deer.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/deer.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

            </div>  
          </div>

          <div class="col-lg-3 col-md-12 mb-2" style="margin-left: -12px;">
            <h6>Categories</h6>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Graphic Design
                <span class="badge badge-primary badge-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Photography
                <span class="badge badge-primary badge-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
               Painting
                <span class="badge badge-primary badge-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
               Sculptor
                <span class="badge badge-primary badge-pill">41</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
               Illustrators
                <span class="badge badge-primary badge-pill">21</span>
              </li>
            </ul>
            <hr>
            <h6>Popular Tags</h6>
            <div class="row" style="margin: auto;">
              <span class="tags"><a href="#" class="tags-link">Tooltip</a></span>
              <span class="tags"><a href="#" class="tags-link">Tooltip</a></span>
              <span class="tags"><a href="#" class="tags-link">Tooltip</a></span>
              <span class="tags"><a href="#" class="tags-link">Tooltip</a></span>
              <span class="tags"><a href="#" class="tags-link">Tool</a></span>
              <span class="tags"><a href="#" class="tags-link">Tool</a></span>
              <span class="tags"><a href="#" class="tags-link">Tool</a></span>
            </div>
          </div>  
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section class="top-artwork">

        <h3 class="h3 text-center mb-5">Top Artworks</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <div class="col-lg-12 col-md-12 mb-5">
            <div class="row">

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/feather.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/wood.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/wood.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/deer.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/deer.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/feather.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/wood.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/wood.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 mb-3">
                <div class="card art-home clearfix">
                  <div class="art-container">
                    <a href="/img/deer.jpg" data-lightbox="image-3" data-title="My caption">
                      <img src="/img/deer.jpg" class="artwork-thumbnail views-scale img-fluid" ontouchstart="this.classList.toggle('hover');">
                    </a>
                  </div>
                  <div class="card-body art-subtitle">
                    <h6><a href="/art-work/">Art Title</a></h6>
                    <hr> 
                    <p class="text-black-50">portal of grace mercy</p>
                    <p><span style="float: right;">$19.99</span></p>
                    <h6 style="font-size: 0.90rem"><i class="fa fa-paint-brush"></i><span style="margin-left: 4%;"> by Artist</span></h6>            
                  </div>
                  <div class="card-footer">
                    <p>
                      <span style="font-size: 0.85rem"><i class="fa fa-thumbs-o-up"></i> 20</span>
                      <span style="font-size: 0.85rem; margin-left: 20%;"><i class="fa fa-eye"></i> 30</span>
                      <span style="font-size: 0.85rem; float: right;"><i class="fa fa-comments-o"></i> 30</span>
                    </p>
                  </div>
                </div>
              </div>

            </div>  
          </div>

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="mb-5">
      <section class="top-artist">
        <h3 class="h3 text-center mb-5">Top Artists</h3>
         <div class="row wow fadeIn">

          <div class="col-lg-12 col-md-12 mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-3">
                  <div class="card art-home clearfix flip-box" ontouchstart="this.classList.toggle('hover');" style="height:17rem">
                    <div class="flip-box-inner">
                      <div class="flip-box-front">
                          <div class="art-container" style="margin-top: 10%">
                            <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                              <img src="/img/feather.jpg" class="artist-thumbnail img-fluid" style="height: 200px; width: 200px;">
                            </a>
                          </div>
                      </div>
                      <div class="flip-box-back">
                        <div class="card-body art-subtitle">
                          <h4><a href="/artist/">Artist Name</a></h4>
                          <hr> 
                          <button type="button" class="follow-butn">Follow Artist</button>   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-3">
                  <div class="card art-home clearfix flip-box" ontouchstart="this.classList.toggle('hover');" style="height:17rem">
                    <div class="flip-box-inner">
                      <div class="flip-box-front">
                          <div class="art-container" style="margin-top: 10%">
                            <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                              <img src="/img/feather.jpg" class="artist-thumbnail img-fluid" style="height: 200px; width: 200px;">
                            </a>
                          </div>
                      </div>
                      <div class="flip-box-back">
                        <div class="card-body art-subtitle">
                          <h4><a href="/artist/">Artist Name</a></h4>
                          <hr> 
                          <button type="button" class="follow-butn">Follow Artist</button>   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-3">
                  <div class="card art-home clearfix flip-box" ontouchstart="this.classList.toggle('hover');" style="height:17rem">
                    <div class="flip-box-inner">
                      <div class="flip-box-front">
                          <div class="art-container" style="margin-top: 10%">
                            <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                              <img src="/img/feather.jpg" class="artist-thumbnail img-fluid" style="height: 200px; width: 200px;">
                            </a>
                          </div>
                      </div>
                      <div class="flip-box-back">
                        <div class="card-body art-subtitle">
                          <h4><a href="/artist/">Artist Name</a></h4>
                          <hr> 
                          <button type="button" class="follow-butn">Follow Artist</button>   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-12 mb-3">
                  <div class="card art-home clearfix flip-box" ontouchstart="this.classList.toggle('hover');" style="height:17rem">
                    <div class="flip-box-inner">
                      <div class="flip-box-front">
                          <div class="art-container" style="margin-top: 10%">
                            <a href="/img/feather.jpg" data-lightbox="image-3" data-title="My caption">
                              <img src="/img/feather.jpg" class="artist-thumbnail img-fluid" style="height: 200px; width: 200px;">
                            </a>
                          </div>
                      </div>
                      <div class="flip-box-back">
                        <div class="card-body art-subtitle">
                          <h4><a href="/artist/">Artist Name</a></h4>
                          <hr> 
                          <button type="button" class="follow-butn">Follow Artist</button>   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>  
          </div>


        </div>
      </section>
      
      
      

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
 <?php include './includes/footer.php';?>