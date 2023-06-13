<?php
include 'config/config.php';

$page_title = "Login/Sign up";
?>
<?php
if(isset($_POST["ok-submit"])){
	$name = mysqli_real_escape_string($conn,$_POST["names"]);
	$walletAddress = mysqli_real_escape_string($conn,$_POST["walletAddress"]);
	$password = mysqli_real_escape_string($conn,$_POST["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);
    

	$sql = "INSERT users(username,password, walletAddress) values ('$name', '$password', '$walletAddress') ";
	$result = $conn->query($sql)or
	die(mysqli_error($conn));

	if($result === TRUE){
		set_flash("Registration successful","success");
	}else{
		set_flash("There error in Reggistration","danger");
	}
}

if(isset($_POST["ok-login"])){
	$username = mysqli_real_escape_string($conn,$_POST["username"]);
	$password = mysqli_real_escape_string($conn,$_POST["password"]);

	$sql = "SELECT * from users where username = '$username' ";
	$result = $conn->query($sql)or
	die(mysqli_error($conn));

	if($result->num_rows > 0){
		$rs = $result->fetch_assoc();
		$username = $rs["username"];
		if(password_verify($password, $rs["password"])){

			$_SESSION["member"] = $username;
			
			if(isset($_GET["act"])){
				switch ($_GET["act"]) {
					case 'createOffer':
						header("location: createOffer.php");
						break;
                    case 'account':
                        header("location: account.php");
					
					default:
						// code...
						break;
				}
			}else{
				header("location: index.php");
			}
			
		}else{
			set_flash("Username or password is incorrect","danger");
		}
	}else{
		set_flash("Username or password is incorrect","danger");
	}	
}

include 'header.php';
include 'menu.php';
?>

<html>




<b class="hl" id="mainTitle" style="font-size: 32px; font-weight: 700; margin-top: 130px; max-width: 80%;">Swap Sync</b>
<br><br>
<span style="position: relative; display: inline-block; font-weight: 600; width: 600px; max-width: 80%;" id="subTitle">
		<br/>
		In order to create an offer, you need to sign up first and login to create your offer.
	</span>

<span class="hl"></span>
<div class="card">
        <?php echo flash(); ?>
    <div class="container">
    <form action="#" method="post" enctype="multipart/form-data">
        <h1>Sign up</h1>
        <div class="">
          <label for="username">Username:</label>
          <input type="text" id="" name="names" placeholder="create a username" required="" style="width: 100%; border-radius: 25px; padding:5px;">
        </div>
        <br>
        <div class="">
          <label for="username">Wallet Address:</label>
          <input type="text" id="" name="walletAddress" placeholder="Enter your Eth or Avax or Polygon wallet address, etc" required="" style="width: 100%; border-radius: 25px; padding:5px;">
        </div>
        <br>
        <div class="">
          <label for="password">Password:</label>
          <input type="password" id="" name="password" placeholder="create your password" required="" style="width: 100%; border-radius: 25px; padding:5px;">
        </div>
        <button type="submit" name="ok-submit">Sign Up</button>
        
        </form>
      </div>
</div>

<span class="hl"></span>

<div class="card">
    
    <div class="container">
    <form action="#" method="post">
        <h1>Login</h1>
        <div class="">
          <label for="username">Username:</label>
          <input type="text" id="" name="username" placeholder="" value="<?php echo @$_POST["username"];?>" style="width: 100%; border-radius: 25px; padding:5px;">
        </div>
        <br>
        <div class="">
          <label for="password">Password:</label>
          <input type="password" id="" name="password" placeholder="" style="width: 100%; border-radius: 25px; padding:5px;">
        </div>
        <button type="submit" name="ok-login">Login</button>
        
        </form>
      </div>
</div>


<span class="hl"></span>



<span class="hl" style="margin: 50px 0 20px 0;">
		<a href="disclaimer.txt" target="_blank" style="color: #fff7; font-size: 12px; font-weight: 600;"
           class="footerLink">Full Disclaimer</a>
	</span>
<span class="hl"
      style="color: #fff2; font-size: 12px; margin-bottom: 30px;">Copyright © 2023. All Rights Reserved.</span>

<script>
    const menu = sID => {
        $('html,body').animate({scrollTop: $(`.card:eq(${sID})`).offset().top - 80 - 30}, 400)
    }

    const scrollPlay = () => {
        $('#ecgBG').css('margin-top', document.body.scrollTop / 2 + 'px')

        $('.menuLink').removeClass('menuLinkActive')

        if (
            document.body.scrollTop < $('.card:eq(1)').offset().top - 200
        )
            $('.menuLink:eq(0)').addClass('menuLinkActive')

        if (
            document.body.scrollTop > $('.card:eq(1)').offset().top - 200 &&
            document.body.scrollTop < $('.card:eq(2)').offset().top - 200
        )
            $('.menuLink:eq(1)').addClass('menuLinkActive')

        if (
            document.body.scrollTop > $('.card:eq(2)').offset().top - 200 &&
            document.body.scrollTop < $('.card:eq(4)').offset().top - 200
        )
            $('.menuLink:eq(2)').addClass('menuLinkActive')

        if (
            document.body.scrollTop > $('.card:eq(4)').offset().top - 200 &&
            document.body.scrollTop < $('.card:eq(5)').offset().top - 200
        )
            $('.menuLink:eq(3)').addClass('menuLinkActive')

        if (
            document.body.scrollTop > $('.card:eq(5)').offset().top - 200 ||
            Math.round(document.body.scrollTop + document.body.clientHeight) == $(document).height()
        ) {
            $('.menuLink').removeClass('menuLinkActive')
            $('.menuLink:eq(4)').addClass('menuLinkActive')
        }

        window.requestAnimationFrame(scrollPlay)
    }

    scrollPlay()

</script>


</body>


</html>
