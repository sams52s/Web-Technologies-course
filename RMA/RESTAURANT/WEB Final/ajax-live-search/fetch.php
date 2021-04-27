<?php
$connect = mysqli_connect("localhost", "root", "", "c2");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM admin
	WHERE adminName LIKE '%".$search."%'
	OR adminSname LIKE '%".$search."%' 
	OR adminEmail LIKE '%".$search."%' 
	OR adminPhone LIKE '%".$search."%' 
	OR adminGender LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM admin ORDER BY adminId";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th> Name</th>
							<th>User Name</th>
							<th>Email</th>
							<th>Phone No Code</th>
							<th>Gender</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["adminName"].'</td>
				<td>'.$row["adminSname"].'</td>
				<td>'.$row["adminEmail"].'</td>
				<td>'.$row["adminPhone"].'</td>
				<td>'.$row["adminGender"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>