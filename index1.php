<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Library Management System</title>

</head>
<body bgcolor="#CCCCCC">
<div class="wrapper" style="height:755px;">
	     <div class="header">
                  <img src="images/header1.jpg" />
	     </div>
	
    	
	     <div class="content">
	               <img src="images/title.jpg"  id="projecttitle" /> 
               <div id="login" class="login">
					    <div id="logintitlebackground">
					             <h2 id="log"> Login</h2>      
					    </div>
						<form action="" method="post">
				         <input type="text" name="usr" id="usericon" class="textbox" placeholder="Username" required style="background-image:                             url(images/user.png);background-repeat:no-repeat;background-position:left center;margin:50px 0px 0px 33px;"/><br><br/>
						
						<input type="password" id="pwdicon" name="pwd" class="textbox" placeholder="Password"  required
					         style="background-image:url(images/pwdicon.png);background-repeat:no-repeat;background-position:left center;margin-left:                                       33px;"/><br><br>
						<input type="submit" name="abtn" value="Submit" id="button"/><br/>
						<?php
							if(isset($_POST['abtn'])=="Submit")
							{
									session_start();
									$conn=mysql_connect('localhost','root','');
									mysql_select_db("library",$conn);
									$username=$_POST['usr'];
									$password=$_POST['pwd'];
									$username = stripslashes($username);
									$password = stripslashes($password);
									$username = mysql_real_escape_string($username);
									$password = mysql_real_escape_string($password);
									$sql="select *from login where a_name='$username' and a_password='$password'";
									$result=mysql_query($sql,$conn);
									$count=mysql_num_rows($result);
								if($count==1)
								{		
									
									/*session_register("myusername");*/
									$_SESSION['admin']= $username;
									header("Location:bookentry.php");
									
								}
								else
								{
									echo "<br/>";
									echo "<div style='color:red;text-align:center;'>";
									echo "Username or Password is invalid";
									echo "</div>";
								}
							mysql_close($conn);
							}
						?><br/>
						<a href="index.php" class="usertype" style="margin-left:32px;">User login</a>
					    <a href="index1.php" class="usertype">Admin login</a>
						
					</form>
			   </div>
		       <p >Reading has at all times and in all ages been a source of knowledge, of happiness, of pleasure and even moral courage. In today's                   world with so much more to know and to learn and also the need for a conscious effort to conquer the divisive forces, the importance                   of reading has increased. In the olden days if reading was not cultivated or encouraged, there was a substitute for it in the                   religious sermon and in the oral tradition.<br><br> The practice of telling stories at bed time compensated to some extent for the                   lack of reading. In the nineteenth century Victorian households used to get together for an hour or so in the evenings and listen to                   books being read aloud. But today we not only read, we also want to read more and more and catch up with the events taking place                   around us. The various courses and classes being conducted in rapid reading support this belief.The amount of reading one should get                   through is of course nobody's business.<br><br> There is no end to it for there is a variety of subjects to read about. The daily                   newspaper or the popular magazine while it discusses topical issues and raised controversies, it also provokes thought and throws                   light on human nature. It brings the news of wars, rebellions, organizations, political stances, heroic deeds etc., together and                   helps knit a world of some sort.
			   </p>
			
			
	    </div>
        <div class="footer">
	 		<h4 class="copyright">hello world</h4>
		    <img src="images/head3.jpg" height="50" width="945" class="footerimage"/>
	    </div>
  </div>
</body>
</html>
<?php
} else{
	header("Location:getbook.php");
}
?>
	
