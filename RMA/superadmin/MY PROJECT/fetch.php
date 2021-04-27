<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "testing2");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM tbl_resturant
  WHERE ResturantName LIKE '%".$search."%'
  OR Address LIKE '%".$search."%' 
  OR City LIKE '%".$search."%' 
  OR Phone LIKE '%".$search."%' 
  OR Rating LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM tbl_resturant ORDER BY ResturantID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ResturantName</th>
     <th>Address</th>
     <th>City</th>
     <th>Phone</th>
     <th>Rating</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["ResturantName"].'</td>
    <td>'.$row["Address"].'</td>
    <td>'.$row["City"].'</td>
    <td>'.$row["Phone"].'</td>
    <td>'.$row["Rating"].'</td>
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