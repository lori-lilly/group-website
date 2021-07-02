<!DOCTYPE html>
<html lang="en">
<head>
<!---->
<!-- Title of the pages -->
<!---->
  <title>Travel Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="project_stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="planner_valid.js"></script>
  <script src="signUp_valid.js"></script>
<!---->
<!-- Styling starts here -->
<!---->

</head>
<!---->
<!--Style and head section ends here -->
<!---->

<!---->
<!-- Body starts here -->
<!---->
<body>

<div class="menu">
<?php include 'nav.php';?>
</div>

<!-- Main content starts here -->
<div class="container">
  
<div>
<?php include 'carousel.php';?>
</div>

<!-- City content starts here -->
<div class="container text-center">    
  <h3>SEARCH BY CITIES</h3><br>
  <div class="row">
    <div class="col-sm-6">  
      <img src="k_caro.jpg"  class="image"
	       style="width:100%" alt="Knoxville view">
		   <div class="middle">
             <a class="white" href="p2.html">KNOXVILLE</a>
           </div>
    </div>

    <div class="col-sm-6"> 
      <img src="g_caro.jpg" class="image" 
	       style="width:100%" alt="Gatlinburg view">
		   <div class="middle">
             <a class="white" href="p2.html">GATLINBURG</a>
           </div>   
    </div>
	</div>
	<div class="row">
    <div class="col-sm-6">
       <img src="p_caro.jpg" class="image" 
	        style="width:100%" alt="Image">
			<div class="middle">
              <a class="white" href="p2.html">PIGEON FORGE</a>
            </div>
      </div>

      <div class="col-sm-6">
	    <img src="s_caro.jpg" class="image" 
		     style="width:100%" alt="Image">
			 <div class="middle">
               <a class="white" href="p2.html">SEVIERVILLE</a>
             </div>
      </div>
    </div>
  </div>
<br>

<div>
<?php include 'project_footer.php';?>
</div>
</body>
</html>
