<?php
/* ResultSet rs=st.executeQuery("select * from usr where uname='"+un+"' and passwd='"+pw+"'");
		if(rs.next())
		{
			flag=true;
			String ut=rs.getString(3);
			if(ut.equals("student"))
			{
				response.sendRedirect("shome.jsp");
			}
			else if(ut.equals("admin"))
			{
				response.sendRedirect("ahome.jsp");
			}
			
			
		}
		if(flag==false)
		{
			out.println("<br><div class='text-danger'>Invalid User Name or Password</div>");
		}

*/
?>

<html>
<head>
<title>Front page</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="script/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</head>
<style>
body, html {
  width: 100%;
  height: 100%;
  margin: 0;
}

.container {
  width: 100%;
  height: 100%;
}

.leftpane {
    width: 25%;
    height: 100%;
    float: left;
  
 
}

.middlepane {
    width: 50%;
    height: 100%;
    float: left;
   
}

.rightpane {
  width: 25%;
  height: 100%;
  position: relative;
  float: right;
 
}

.toppane {
  width: 100%;
  height: 55px;
   border-collapse: collapse;
  background-color:#98AFC7;
 
}



</style>
<body background="http://eleonoracbastos.com/wp-content/uploads/2015/08/Manifest-Friends.jpg"/>
 <div class="container">
  <div class="toppane">
   <h1 style="font-family:Lucida Handwriting; color:white; size:500px; ">Cocktail</h1>
  </div>
  <div class="leftpane"></div>
  <div class="middlepane">
   <div class="container">
    <br><br><br><br><br><br><br><br><br><br>
    <table class="table table-bordered bg-info">
    <tr>
    <td>Userid</td>
    <td><input type=text name="Userid"  placeholder="user@cocktail.com" ></td>
    </tr>
    <tr>
     <td>Password</td>
    <td><input type="Password" name="password"  placeholder="*****"></td>
    </tr>
    </table>
    <center><a href="profile1.html" class="btn btn-primary btn-lg btn-block" role="button">Login</a></center>
    <br>
    <center>  <a href="sign_up.php"class="btn btn-primary btn-lg btn-block" role="button">Join Cocktail</a></center>
   </div>
  </div>
  <div class="rightpane"></div>
 </div>
</body>
</html> 
  

