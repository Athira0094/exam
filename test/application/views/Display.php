<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
<?php

$this->load->helper('url');

?>
</head>
<body>
<table border="1 collapse">
	<tr><th>Si No</th><th>Name</th><th>Phone</th><th>Email</th><th colspan="2">Action</th></tr>
	<?php
	
	
		echo "<tr>"."<td>".$id."</td>";
		echo "<td>".$name."</td>";
		echo "<td>".$phone."</td>";
		echo "<td>".$email."</td>";
		
		// echo "<td>"."<a href='sample.php?id='".$row['id']">Edit</a>"."</td>";
		// echo "<td>"."<a href='sample.php?id='".$row['id']">edit</a>"."</td>";
		echo "<td>"."<a href='del/?id=".$id."'>Delete</a>"."</td>";
		echo "<td>"."<a href='edit/?id=".$id."'>Edit</a>"."</td>"."</tr>";

	?>


</table>
</body>
</html>