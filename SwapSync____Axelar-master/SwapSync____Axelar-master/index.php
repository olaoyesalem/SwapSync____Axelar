<?php include 'config/config.php';
$page_title ="Home";
include 'header.php';
include 'menu.php';
?>

<html>







<b class="hl" id="mainTitle" style="font-size: 32px; font-weight: 700; margin-top: 130px; max-width: 80%; color: #0f5;">Swap Sync</b>
<br><br>
<span style="position: relative; display: inline-block; font-weight: 600; width: 600px; max-width: 80%;" id="subTitle">
		<br/>
		A Peer-to-peer swap platform focused on helping crypto users swap crypto assets on different chains
	</span>

<span class="hl"></span>
<div class="card">
    Welcome to SwapSync, <br>A peer-to-peer platform where you can swap or exchange your assets with other crypto users like you.
    <br><br>
    Have you ever encountered a situation whereby you need a particular asset, let's call it Polygon Matic, and you only have $Avax in your wallet,
    and you need Polygon to claim an NFT or use as Gas, and swapping the Avax to polygon seems impossible due to bridging fees and other factors.<br><br>
    Well, look no more, SwapSync is the solution, click on the Create Offer button below to create an offer or scroll down to explore other created offers
    to see if someone needs your polygon Matic.  <br><br>
    <div id="networkBtnOuter" class="hl"
         style="text-align: center; margin: 20px 0 30px 0; font-weight: 600; color: #0f5;">
        <a id="" class="btn" href="createOffer.php" >Create your Offer</a>
    </div>
    
    
        
</div>

<span class="hl"></span>

<div class="card">
    <div id="networkBtnOuter" class="hl"
         style="text-align: center; margin: 20px 0 30px 0; font-weight: 600; color: #0f5;">
        <a id="" class="">Offers</a>
    </div>
    
    <span class="hl"></span>
        
</div>

    

<span class="hl"></span>

<div class="card">
    <b class="title">How to use SwapSync</b>
    <br><br>
    The video below is a guide on how to use SwapSync and navigate how the functions work.
    <br><br>
    <div style="position: relative; float: left; padding-top: 56.25%; width: 100%; height: 0px;">
        <iframe style="position: absolute; top: 0; float: left; width: 100%; height: 100%; border-radius: 8px;"
                src="https://www.youtube.com/watch?v=t8U7GRrlYW8" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>
<span class="hl"></span>
<div class="card">
    <b class="title">SwapSync Goals</b>
    <br><br>
    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .<br><br>

    <span class="cmrk"></span><b></b><br>
    .
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
