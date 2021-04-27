<?php
echo "<table class='table table-hover table-dark' style='height:5rem'>";

class adminTableRows extends RecursiveIteratorIterator {
    
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td class='output' style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr scope='col'>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
//session_start();
if(isset($_SESSION["SuserName"]))
{

$un=$_SESSION["SuserName"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c2";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$stmt = $conn->prepare("SELECT * From reginfo Where userName='$un'");
  $stmt = $conn->prepare("SELECT adminId , adminName , adminSname From admin");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
}
else{
  header("Location: https://localhost/c2/Project/view/users/login.php");
}
echo "</table>";

?>