<?php session_start(); 
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Library Management System</title>

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script>
  $(function() {
    var availableTags = [
      "c programming","java programming"
    ];
    $( "#search" ).autocomplete({
      source: availableTags
    });
  });
  </script>
</head>
<body bgcolor="#CCCCCC">

<div class="wrapper" style="background:#E0E0E0;min-height:650px;">
			<div class="header">
    			<img src="images/header1.jpg" />
			</div>
			<hr /><a href="mybooks.php" target="_blank" style="margin-left:20px;">View My Books</a>
			<form action="logout.php" method="post">
			<input type="submit" name="log" value="logout" style="margin-top:20px;margin-left:867px;text-decoration:none;color:#0066FF;">
			</form>
			<?php
				if(isset($_POST['log'])=="logout")
				{

					header("Location:index.php");
				}
			?>
			<form action="" method="post">
			<input type="text" name="search" id="search"  placeholder="Search For Books" required /><br />
			<input type="submit" name="btn1" value="Search" id="btnsearch"/>
			<?php
if(isset($_POST['btn1'])=="Search")
	{
		$test=$_POST['search'];
		$conn=mysql_connect('localhost','root','');
		if(!$conn)
		{
			die('could not connect:' . mysql_error());
		}
             
			 $db=mysql_select_db('library',$conn);
	         $sql="select S_no,ISBN,Book_name,Author,Version,Publication,Status from searchbooks where Book_name LIKE '%$test%' OR Author LIKE '%$test%'";
		     $result=mysql_query($sql,$conn);
?>
		
		<table border='1' align="center" cellpadding="12" style="margin-top:50px;">
		<tr bgcolor="#0066FF" style="color:#FFFFFF;height:5px;">
		<th>S_no</th>
		<th>ISBN</th>
		<th>Book_name</th>
		<th>Author</th>
		<th>Version</th>
		<th>Publication</th>
		<th>Status</th>
		</tr>
 <?php
	while($row=mysql_fetch_array($result))
	{
		echo "<tr bgcolor='white' style='color:darkblue;text-align:center;height:30px;'>";
		echo "<td>" . $row['S_no']. "</td>";
		echo "<td>" . $row['ISBN']. "</td>";
		echo "<td>" . $row['Book_name']. "</td>";
		echo "<td>" . $row['Author']. "</td>";
		echo "<td>" . $row['Version']. "</td>";
		echo "<td>" . $row['Publication']. "</td>";
		echo "<td>" .$row['Status']. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($conn);
}
?>
			</form>
</div>
		
</body>
</html>
<?php
} else{
	echo "Kindly login and try again...";
	header("Location:index.php");
}
?>
