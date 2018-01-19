<html>
 <head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
<title>Profile</title>
<body >
<div class="container" style="padding-top: 60px;">
 <div align="Right">
  <a href="webpage.html" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" >
   <i class="fa fa-home w3-margin-right"></i>
  </a>
 </div>
  <h1 class="page-header"> Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="profile_pic.jpg" class="avatar img-circle img-thumbnail" alt="Profile Pic">
       
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
     
      
	<?php 
	 $con=new mysqli("localhost","root","","cocktail");              // Create connection
     if ($con->connect_error) {                                     // Check if  connection is eshtablished or 
            die("Connection failed: " . $con->connect_error); } 
    
	//-----------------------SQL command-----------------------------------------|
	    $sql="SELECT * FROM user_info WHERE id=1";
	    $result = $con->query($sql);
     // ---------output data of each row------------------------------------------|
         $print = $result->fetch_assoc() ;
            
       if ($con->query($sql) == TRUE){}                          //checks if given SQL command is valid or 
	   else
	   {                                                      //if not valid print error msg
         echo "Error: " . $sql . "<br>" . $con->error;  }		  
       $con->close(); 
	?>  
	 
	 <!--Variables: $nick_name $relation $fname $Lname $Email $hobbies $job $colg $school $mobnumber  -->
 	 <form class="form-horizontal" role="form" method="post" action="profile_upload.php"> 
        <div class="form-group">
          <label class="col-lg-3 control-label">UserName:</label>
          <div class="col-lg-8">                                                                                                                                                                                                                                                                                                                                  
           <p><?php echo $print['fname']." ".$print['lname']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Currently living:</label>
          <div class="col-lg-8">
		  <p> <?php echo $print['city']; ?></p>
            </div>
        </div>
		<div class="form-group">
          <label class="col-lg-3 control-label">Mobile No.</label>
          <div class="col-lg-8">
		  <p> <?php echo $print['mob']; ?></p>
            </div>
        </div>
		<div class="form-group">
          <label class="col-lg-3 control-label">Nickname</label>
          <div class="col-lg-8">
          <p><?php echo $print['nname']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <p><?php echo $print['e_id']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"> School</label>
          <div class="col-md-8">
           <p><?php echo $print['skul']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">College</label>
          <div class="col-md-8">
          <p><?php echo $print['colg']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Job</label>
          <div class="col-md-8">
           <p><?php echo $print['job']; ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Hobbies</label>
          <div class="col-md-8">
		     <p><?php echo $print['hobbies']; ?></p>
          </div>
		  </div>
		  <div class="form-group">
          <label class="col-md-3 control-label">Relation</label>
          <div class="col-md-8">
		    <p><?php echo $print['reltn']; ?></p>
          </div>
		 
          </div>
          
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
