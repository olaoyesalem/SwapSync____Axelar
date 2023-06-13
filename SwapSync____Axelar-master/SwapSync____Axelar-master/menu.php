<body>
<!-- <div style="position: fixed; top: 40px; left: 0; bottom: 0; right: 0; background-image: url('img/logoBlurred.svg'); background-repeat: no-repeat; background-size: 120% auto; background-position: center center; opacity: .1; z-index: -1000;" id="bgImg"></div> -->

<div style="position: fixed; top: 0; left: 0; width: 100%; height: 80px; background-color: #000d; z-index: 1000; box-shadow: 0 12px 25px #0003;">
    <img src="./swapsync/img/wordmark.png" id="topLogo"
         style="position: relative; float: left; margin: 20px; margin-right: 0; height: 40px;">
    <img src="./swapsync/img/wordmarkShort.png" id="topLogoShort"
         style="display: none; position: relative; float: left; margin: 20px; margin-right: 0; height: 40px;">
    <div style="position: absolute; top: 30px; left: 0; width: 100%;">
        <a class="menuLink" href="index.php">Home</a>
        <a class="menuLink" href="javascript:menu(2)">Goals</a>
        <a class="menuLink" href="javascript:menu(3)">Guide</a>
        <a class="menuLink" href="createOffer.php">Create Offer</a>
        
        <?php if(user_login()){
          ?>  
          <a class="menuLink" href="account.php"><?php echo $_SESSION['member']; ?></a>
          <a class="menuLink" href="logout.php">Logout</a>  
          <?php 
            }else {
                ?>
                <a class="menuLink" href="signup.php">Login</a>
                <?php
            } 
            ?>
            
    </div>
    <a href="https://t.me/" target="_blank"><img src="./swapsync/img/logos/tg.svg"
                                                              style="position: relative; float: right; margin: 30px; margin-left: 0; height: 20px; opacity: .5; transition: all .1s;"
                                                              class="sLink"></a>
    <a href="https://" target="_blank"><img src="./swapsync/img/logos/t.svg"
                                                                     style="position: relative; float: right; margin: 30px; margin-left: 0; height: 20px; opacity: .5; transition: all .1s;"
                                                                     class="sLink"></a>
</div>