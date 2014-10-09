<?php
//echo "$_GET['q']";
//$q = intval($_GET['q']);
$q = $_GET['q'];

$conn=mysql_connect('localhost','root','');
if (!$conn) {
  die('Could not connect: ' . mysql_error($conn));
}

//mysqli_select_db($con,"library");
//$sql="SELECT * FROM users WHERE id = '".$q."'";
//$result = mysql_query($con,$sql);



			 $db=mysql_select_db('library',$conn);
	         $sql="SELECT  bookname from bookname WHERE isbn = '".$q."'";
			// $sql .="select authorname from bookname where isbn='".$q."'";
		     $result=mysql_query($sql,$conn);
			 
while($row=mysql_fetch_array($result)){
  echo $row['bookname']; 
}
mysql_close($conn);
?>
