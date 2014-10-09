<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Library Management System</title>
<script>
function showUser(str) {
  
  if (str=="") {
    document.getElementById("username").value="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("username").value=xmlhttp.responseText;
	  
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}

</script>

<script>
function showUser1(str) {
  
  if (str=="") {
    document.getElementById("bookname").value="";
	//document.getElementById("authorname").value="";
	return;
	
	}
	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("bookname").value=xmlhttp.responseText;
		  //document.getElementById("authorname").value=xmlhttp.responseText;
	}
  }
  
  xmlhttp.open("GET","getuserbook.php?q="+str,true);
  xmlhttp.send();
}
</script>

<script>
function showUser2(str) {
  
  if (str=="") {
    document.getElementById("authorname").value="";
	//document.getElementById("authorname").value="";
	return;
	
	}
	
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("authorname").value=xmlhttp.responseText;
		  //document.getElementById("authorname").value=xmlhttp.responseText;
	}
  }
  
  xmlhttp.open("GET","getauthor.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body bgcolor="#CCCCCC">
	<div class="wrapper" style="background:#E0E0E0;height:1040px;">
			<div class="header">
    			<img src="images/header1.jpg" />
			</div>
			<div class="content1">
			<?php
				/*session_start();
				echo "<div style='color:#0066FF;margin-left:820px;margin-top:10px;margin-right:28px;background-color:white;padding:5px;'>";
				echo  $_SESSION["usr"];
				echo "</div>";
				if(isset($_POST['log'])=="logout")
				{		
					
						session_start();
						if(session_destroy())
						{
							header("Location: index.php");
						}
				}*/
			?>
			<form action="" method="post">
			<input type="submit" name="log" value="logout" style="margin-top:10px;margin-left:842px;text-decoration:none;color:#0066FF;">
			</form>
	
							<ul class="navmenu">
											<li><a href="getbook.php">Issue Form</a></li>
											<li><a href="bookentry.php">Entry Form</a></li>
											<li><a href="returnbook.php">Return Form</a></li>
											
							</ul><br/>
							<h2 style="color:navy;margin-top:50px;text-align:center;">Book Issue Form</h2>
						
						<form action="" method="post" />
				<hr /><br /><br />
				
				<label class="getbook">Roll No</label>
				<select name="rno" style="margin-left:40px;width:315px;padding:3px;" onchange="showUser(this.value)">
					<option value="" style="margin-left:50px;">--Select the Rollno--</option>
					<option>13mca01</option>
					<option>13mca02</option>
					<option>13mca03</option>
					<option>13mca04</option>
					<option>13mca05</option>
					<option>13mca06</option>
					<option>13mca07</option>
					<option>13mca08</option>
					<option>13mca09</option>
					<option>13mca10</option>
					<option>13mca11</option>
					<option>13mca12</option>
					<option>13mca13</option>
					<option>13mca14</option>
					<option>13mca15</option>
					<option>13mca16</option>
					<option>13mca17</option>
					<option>13mca18</option>
					<option>13mca19</option>
					<option>13mca20</option>
					<option>13mca21</option>
					<option>13mca22</option>
					<option>13mca23</option>
					<option>13mca24</option>
					<option>13mca25</option>
					<option>13mca26</option>
					<option>13mca27</option>
					<option>13mca28</option>
					<option>13mca29</option>
					<option>13mca30</option>
					<option>13mca31</option>
					
					</select><br/><br/>
						
					
					
				<label class="getbook">Name</label><input type="text" id="username" name="username" class="getbookbox" id="name" required style="margin-left:58px;"/><br /><br />
				<label class="getbook">ISBN</label>
				<select name="isbn" style="margin-left:55px;width:315px;padding:3px;" onchange="showUser1(this.value).showUser2(this.value)">
					<option value="" style="margin-left:50px;">--ISBN--</option>
					<option>134</option>
					<option>773</option>
					</select><br /><br />
				<label class="getbook">Book Name</label><input type="text" id="bookname" name="bookname" class="getbookbox" required style="margin-left:20px;"/><br /><br />
				<label class="getbook">Author</label><input type="text" id="authorname" name="authorname" class="getbookbox" required style="margin-left:52px;" /><br /><br />
				<label class="getbook">Issue Date</label><input type="date" name="issue" class="getbookbox" required style="margin-left:28px;"/><br /><br />
				<label class="getbook">Due Date</label><input type="date" name="due" class="getbookbox" required style="margin-left:37px;"/><br /><br />
				<input type="reset" id="resetbtn1" name="resetbtn" value="Reset" />
				<input type="submit" id="getbtn" name="getbtn" value="Get Book" />
				<?php
					if(isset($_POST['getbtn'])=="Get Book")
					{
						$isbn=$_POST['isbn'];
						$roll_no=$_POST['rno'];
						$name=$_POST['name'];
						$book_name=$_POST['bookname'];
						$author=$_POST['authorname'];
						$issue_date=$_POST['issue'];
						$due_date=$_POST['due'];
						$conn=mysql_connect('localhost','root','');
						$db=mysql_select_db('library',$conn);
						$sql="insert into issuebook values('$isbn','$roll_no','$name','$book_name','$author','$issue_date','$due_date')";
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
	</div>
</body>
</html>
