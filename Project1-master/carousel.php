<?php
echo '<!-- Carousel starts here -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="k_caro.jpg" alt="Image" style="width:100%">
        <div class="carousel-caption">
          <h3></h3>
          <p>Knoxville</p>
        </div>      
      </div>

      <div class="item">
        <img src="g_caro.jpg" alt="Image" style="width:100%">
        <div class="carousel-caption">
          <h3></h3>
          <p>Gatlinburg</p>
        </div>      
      </div>
	
	 <div class="item">
        <img src="p_caro.jpg" alt="Image" style="width:100%">
        <div class="carousel-caption">
          <h3></h3>
          <p>Pigeon Forge</p>
        </div>      
      </div>
	
	 <div class="item">
        <img src="s_caro.jpg" alt="Image" style="width:100%">
        <div class="carousel-caption">
          <h3></h3>
          <p>Sevierville</p>
        </div>      
      </div>
    </div>

<!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>';
?>
