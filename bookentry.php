<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Library Management System</title>
</head>
<body bgcolor="#CCCCCC">
	<div class="wrapper" style="background:#E0E0E0;height:910px;">
			<div class="header">
    			<img src="images/header1.jpg" />
			</div>
			<div class="content2">
			<?php
				/*session_start();
				echo "<div style='color:#0066FF;margin-left:820px;margin-top:10px;margin-right:28px;background-color:white;padding:5px;'>";
				echo  $_SESSION["usr"];
				echo "</div>";
				if(isset($_POST['log'])=="logout")
				{	
					
						session_start();
						unset($_SESSION["usrs"]);
 						header("Location:index.php");
				}*/
			?>
			<form action="" method="post">
			<input type="submit" name="log" value="logout" style="margin-top:10px;margin-left:842px;text-decoration:none;color:#0066FF;">
			</form>
	
			<ul class="navmenu">
				<li><a href="getbook.php">Issue Form</a></li>
				<li><a href="bookentry.php">Entry Form</a></li>
				<li><a href="returnbook.php">Return Form</a></li>
				
			</ul>
			<h2 style="text-align:center;color:navy;margin-top:100px;">Book Entry Form</h2>
			<form action="" method="post" >
					
					<hr /><br /><br />
				<label class="getbook">ISBN</label><input type="text" name="isbn" class="getbookbox" style="margin-left:61px;" /><br /><br />
				<label class="getbook">Book Name</label><input type="text" name="bookname" class="getbookbox" style="margin-left:21px;"/><br /><br />
				<label class="getbook">Author</label><input type="text" name="authorname" class="getbookbox" style="margin-left:55px;"/><br /><br />
				<label class="getbook">Version</label><input type="text" name="version" class="getbookbox" style="margin-left:50px;"/><br /><br />
				<label class="getbook">Publications</label><input type="text" name="publications" class="getbookbox" style="margin-left:23px;"/><br /><br />
					<label class="getbook">Status</label><input type="text" name="status" class="getbookbox" style="margin-left:63px;"/><br /><br />
				<input type="reset" id="resetbtn2" name="resetbtn" value="Reset" />
				<input type="submit" id="getbtn" name="bookentry" value="Entry book" />
				<?php
					if(isset($_POST['bookentry'])=="Entry Book")
					{
						$isbn=$_POST['isbn'];
						$book_name=$_POST['bookname'];
						$author=$_POST['authorname'];
						$version=$_POST['version'];
						$publications=$_POST['publications'];
						$status=$_POST['status'];
						$conn=mysql_connect('localhost','root','');
						$db=mysql_select_db('library',$conn);
						$sql="insert into searchbooks values(' ','$isbn','$book_name','$author','$version','$publications','$status')";
						$retval=mysql_query($sql,$conn);
						if(!$retval)
						{
								die('could not enter data:' . mysql_error());
						}
								echo "entered successfully\n";
								mysql_close($conn);
					}
				?>
				
					
				</form>
	</div>
	<div class="footer">
			<h4 class="copyright">hello world</h4>
		    <img src="images/head3.jpg" height="50" width="945" class="footerimage"/>
	</div>
	
</body>
</html>
