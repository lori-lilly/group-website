<?php
echo '<nav class="navbar navbar">
    <div class="container-fluid">
    <div class="navbar-header">
<!-- Button color is given by style attribute -->
<!-- Button is for the smaller screen to shrink menu tabs into one dropdown-->
      <button type="button" class="navbar-toggle" 
	    data-toggle="collapse" data-target="#myNavbar">MENU
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>	
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>	
      </button>
    </div>
<!-- Menu tabs -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="main.html" data-toggle="tooltip" title="Home">
		    <span class="glyphicon glyphicon-home" style="color:black;"></span></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
		    href="#" data-toggle="tooltip" title="Season"><span class="glyphicon glyphicon-cloud" style="color:black;"></span><span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><input type="checkbox" name="spring">SPRING</li>
            <li><input type="checkbox" name="summer">SUMMER</li>
            <li><input type="checkbox" name="fall">FALL</li>     
		    <li><input type="checkbox" name="winter">WINTER</li>  
		  </ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
		    href="#" data-toggle="tooltip" title="Group"><span class="fas fa-user-friends" style="color:black;"></span><span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><input type="checkbox" name="solo">SOLO</li>
            <li><input type="checkbox" name="couple">COUPLE</li>
            <li><input type="checkbox" name="family">FAMILY</li>      
		  </ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
		    href="#" data-toggle="tooltip" title="Accessibility"><i class="fas fa-dog" style="color:black;"></i><span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><input type="checkbox" name="pet">PET FRIENDLY</li>
            <li><input type="checkbox" name="disabled">DISABLED</li>
		  </ul>
		</li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" 
		    href="#" data-toggle="tooltip" title="Calendar">
			<span class="glyphicon glyphicon-calendar" style="color:black;"></span><span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li><a href="#">Calender will be here to choose dates</a></li> 
		  </ul> 
		  </li>
        <li><a href="#" data-toggle="modal" data-target="#planner"
		     data-toggle="tooltip" title="Planner">
			<span class="glyphicon glyphicon-user" style="color:black;" ></span></a>	  
		</li>		
      </ul>
<!-- Log In/Sign In menu -->
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#logInModal">
		  <span class="glyphicon glyphicon-log-in" style="color:black;"></span></a></li>
        </ul>
    </div>
    </div>
  </nav>
  <!-- Modal for LOG IN -->
<div class="container">
  <div class="modal fade" id="logInModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div>
        <div class="modal-body">
          <p></p>
		  <div class="container-fluid">
            <form action="/action_page.php" onsubmit="return validateFormData()"			
			       method="post" name="form_name">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" 
				       placeholder="Enter your email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" 
				       placeholder="Enter your password" name="pwd">
              </div>
              <button type="submit" class="btn btn-block">Log in</button>
	            <br><br>
	          <div class="well">
                <h5> Not a member? </h5>
	            <button type="button" class="btn btn-default" data-toggle="modal" 
	                    data-target="#signInModal">Sign Up</button>
	          </div>
            </form>
	      </div> 
        </div>
        <div class="modal-footer">
          <p></p>
        </div>
      </div>
    </div>
  </div>
<!-- Modal sign up -->	 
<div class="container">
  <div class="modal fade" id="signInModal" role="dialog">
    <div class="modal-dialog"
<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <p></p>
		<div class="container-fluid">
           <form action="/action_page.php" onsubmit="return validateSignUp()"
        		 method="post" name="form_name" >
            <div class="form-group">
              <label for="email">Name:</label>
              <input type="name" class="form-control" id="name" 
			         placeholder="Enter your name" name="name">
			</div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" 
			         placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" 
			         placeholder="Enter password" name="pwd">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
	        <div class="modal-footer">
              <p></p>
            </div>
	      </form>
		</div>
      </div>
    </div>  
  </div>    
</div>
</div>
<!-- End of the log in modals -->

<!---->
<!-- Planner modal starts here -->
<!---->
<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="planner" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Itinerary</h4>
        </div>
        <div class="modal-body">
          <p></p>
		 <div class="container-fluid">
  <form action="/action_page.php"  method="post" name="form_name" >
<!-- Retrieve data from Database. -->
<!-- User email and name -->
   
    <input type="submit" value="Save/Download">
	<input type="submit" value="Send To">
  </form>
</div>
        </div>
        <div class="modal-footer">
         <p></p>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!---->
<!-- Planner modal ends here -->
<!---->';
  
?>