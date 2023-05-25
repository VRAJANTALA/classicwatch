<?php if(!isset($_SESSION)) { session_start(); } ?>




<?php
include "conN.php";
$uid = $_SESSION['user_id'];
$name = "";
$mn = "";
$pname ="";
$pqty = "";
$Product_price ="";
$to = 0;

$res=mysqli_query($con,"select * from ordersummary where User_id=$uid");
while ($row = mysqli_fetch_array($res))
{
    $name =$row['Name'];
    $mn = $row['PhoneNumber'];
    $Pname=$row['Product_name'];
    $pqty = $row['Product_quantity'];
    $Product_price =$row['Product_price'];  
    $to = $Product_price*$pqty ;
}

// mysqli_query($con,"insert into return_products values(NULL,'$name','$mn','$Pname','$pqty','$Product_price','$to' )");
// mysqli_query($con,"update ordersummary set Product_quantity=Product_quantity+pqty where Pname='$Product_name' && Product_price='$Product_price'");
mysqli_query($con,"delete from ordersummary where User_id=$uid");

// echo "<script>alert('Order Cancel Succesfully.!');</script>";
echo "<script>alert('Order Cancle Succesfully')
window.location.assign('myorder.php')</script>";


?>



 <?php
                    $uid = $_SESSION['user_id'];

                    echo "<script>console.log('" . json_encode($uid) . "');</script>";
                    $sql = mysqli_query($con, "select user_master.User_id,ordersummary.* from  user_master,ordersummary where  ordersummary.User_id= user_master.User_id and ordersummary.User_id= $uid	");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                      <th><?php echo $row['Name'] ?></th>

                      <th><?php echo $row['PhoneNumber'] ?></th>
                      <th><?php echo $row['Product_name'] ?></th>
                      <th><?php echo $row['Product_quantity'] ?></th>
                      <th><?php echo $row['Product_price'] ?></th>
                      <th><?php echo $row['Total'] ?></th>
                      <th> <a href="cancle.php?id=<?php echo $row["uid"]; ?>"  style="color:RED"><b>Cancle</b></a></th>

                      </tr> 
                    <?php } ?>