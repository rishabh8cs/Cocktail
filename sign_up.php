<?php include('Connection.php'); ?> 
<html>
<title>Cocktail</title>
<head> <!--Bootstrap necessary urls.-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</head>
  <body background="pics.jpg">
   <?php
                                            // define variables and set to empty values
   
    $First_name = $Last_name = $e_id = $mobile_No = $gender = $dob = $pwd = $rpwd = "" ;

                         

   ?>
 <br><br><br><br><br>
 <script>

 function validateForm() {
    
	var p1 = document.form["myForm"]["pwd"].value;
	var p2 = document.form["myForm"]["rpwd"].value;
	 if(p1!=p2) {
		 alert("Passwords doesn't match");
		 return false;
	 }
    
}
</script>


	<div align="center">
	 <div class="container">
	  <div class="col-md-6 bg-info">
	    <div class="row">
	      <form class="form" method="post" action=""><!--upload.php-->
	        <table class="table table-condensed table-hover">
             <tr><td>First Name</td>  
                 <td><input type="text" name="First_name" placeholder="First Name"value="<?php echo $First_name;?>" required> 
				     </td></tr>                     
             <tr><td>Last Name</td>
                 <td><input type="text" name="Last_name" placeholder="Lastname"value="<?php echo $Last_name;?>" required> 
                      
			  <tr><td>Password</td>
                 <td><input type="password" name="pwd" placeholder="Password" size="30" value="<?php echo $pwd;?>" required></td>
                     </tr>                          <!--Password-->
              <tr><td>Reenter Password</td>
                                 <td><input type="password" name="rpwd" placeholder="Reenter Password" size="30" value="<?php echo $rpwd;?>"required></td>
                      </tr>                          <!--Re enter Passoword-->		 		  
			 <tr><td>DOB</td>
                 <td><input type="text" name="dob" placeholder="DOB" value="<?php echo $dob;?>"required>
                       </tr></td>                        <!--gives error msg if left empty-->
			 <tr><td>Email id</td>
                 <td><input type="text" name="e_id" placeholder="email id"value="<?php echo $e_id;?>"required></td>
                     </tr>                        <!--gives error msg if left empty-->
			 <tr><td>Mobile No.</td>
                 <td><input type="text" name="mobile_No" placeholder="Mobile No." size="30"value="<?php echo $mobile_No;?>"required></td>
                     </tr>                          <!--gives error msg if left empty-->
			 <tr><td>Gender</td>
                 <td><input type="radio" name="gender" value="male"   size="10"value="<?php echo $gender;?>"> Male
                     <input type="radio" name="gender" value="Female" size="10"value="<?php echo $gender;?>"> Female </td>
                     </tr>                        <!--gives error msg if left empty-->
			</table>
            <div align="center">
               <input type="submit" value="Join Cocktail">
			 </div>
          </form>
		</div>
	  </div>
	 </div>
    </div>	 
                                  
  

  </body>
</html>


 
