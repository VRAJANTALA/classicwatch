<?php
include("conn.php");
if (isset($_GET)) {

  $detid=$_GET['id'];
  
}
$query_delete="DELETE FROM  cart where cid=$detid";
if ($q3<1) 
{
  mysqli_query($con,$query_delete);

 header("Location: cart.php");
 }
 else
 {
      echo "not deleted";
 }
$result=mysqli_query($con,$query_delete);
?>

