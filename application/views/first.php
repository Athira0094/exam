<!DOCTYPE html>
<html>
<head>
<?php

$this->load->helper('url');
?>
	<title>Form</title>
</head>
<style type="text/css">
	#a
	{
		background-color: blue;
		float: left;

	}
	#b
	{
		padding-left: 100px;
		float: left;
	}
</style>
<body>
<h3 align="center">Add Employee</h3>
<form align="center" method="post" action=<?php echo base_url(); ?>index.php/Ctrlins/ins>
	<table>
		<tr><td>Name</td><td><input type="text" name="name" placeholder="Name"></td></tr>
		<tr><td>Phone</td><td><input type="number" name="mobile" placeholder="Phone Number"></td></tr>
		<tr><td>Email</td><td><input type="email" name="email" placeholder="Email"></td></tr>
		<tr><td>Gender</td><td><input type="radio" name="r" value="female">Female</td><td><input type="radio" name="r" value="male">Male</td></tr>
		<tr><td>Hobbies</td><td><input type="checkbox" name="a[]" value="music">Listening to music</td><tr><td></td><td><input type="checkbox" name="a[]" value="read">Reading</td></tr><tr><td></td><td><input type="checkbox" name="a[]" value="browse">Browsing</td></tr><tr><td></td><td><input type="checkbox" name="a[]" value="play">Playing</td></tr></tr>
		<tr><td>Country</td><td><select name="country">
			<option value="india">India</option>
			<option value="china">China</option>
			<option value="japan">Japan</option>
			<option value="malasya">Malasya</option>
		</select></td></tr>
		<tr><td id="b"><input type="submit" name="submit" value="Save" id="a"></td></tr>
	</table>


</form>
</body>
</html>