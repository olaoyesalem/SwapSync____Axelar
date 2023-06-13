<?php
include 'config/config.php';

if(!user_login()){
    header("location: login.php?act=account");
}

$page_title = "My Account";

include 'header.php';
include 'menu.php';
?>
<?php
$username = $_SESSION["member"];
$sql = "SELECT * from users where username = '$username' ";
$result = $conn->query($sql)or
die(mysqli_error($conn));

$rs = $result->fetch_assoc();
?>

<div class="container">
    <h3 class="head">My Account</h3>
    <hr>
    <div class="card">
        <!-- <img src="met.jpg" alt="" style="width:200px; align-items:center;" class="primg"> -->
        <h1 class="title" style="font-size:25px"><?php echo $rs["username"]; ?></h1>
        Wallet Address: <p class="school"><?php echo $rs["walletAddress"]; ?></p>
    </div>
</div>