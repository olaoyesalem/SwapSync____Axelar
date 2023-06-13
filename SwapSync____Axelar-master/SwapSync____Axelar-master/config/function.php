<?php

define( 'TIMEBEFORE_NOW','now' );
define( 'TIMEBEFORE_MINUTE','{num} minute ago' );
define( 'TIMEBEFORE_MINUTES','{num} minutes ago' );
define( 'TIMEBEFORE_HOUR', '{num} hour ago' );
define( 'TIMEBEFORE_HOURS', '{num} hours ago' );
define( 'TIMEBEFORE_YESTERDAY', 'yesterday' );
define( 'TIMEBEFORE_FORMAT',  '%e %b' );
define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

define( 'TIMEBEFORE_DAYS',    '{num} days ago' );
define( 'TIMEBEFORE_WEEK',    '{num} week ago' );
define( 'TIMEBEFORE_WEEKS',   '{num} weeks ago' );
define( 'TIMEBEFORE_MONTH',   '{num} month ago' );
define( 'TIMEBEFORE_MONTHS',  '{num} months ago' );

date_default_timezone_set("Africa/Lagos");

function admin()
{
    if(!isset($_SESSION['admin'])){
        return false;
    }else{
        return true;
    }
}


function user_login()
{
    if(!isset($_SESSION['member'])){
        return false;
    }else{
        return true;
    }
}

function createId($qtd){
    $Caracteres = '23456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
    $Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
    $Posicao = rand(0,$QuantidadeCaracteres);
    $Hash .= substr($Caracteres,$Posicao,1);
    }
    return $Hash;
}
$userid =  createId(5);
$postid = createId(6);

function set_flash($msg,$type)
{
    $_SESSION['flash'] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
}

function flash()
{
    if(isset($_SESSION['flash']))
    {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}



function set_logins($msg,$type){
    $_SESSION["logins"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
}
function set_signup($msg,$type){
    $_SESSION["signup"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
}

function logins(){
    if(isset($_SESSION["logins"])){
        echo $_SESSION["logins"];
        unset($_SESSION["logins"]);
    }
}
function signup(){
    if(isset($_SESSION["signup"])){
        echo $_SESSION["signup"];
        unset($_SESSION["signup"]);
    }
}
function num_formats($n)
{
    $l = strlen($n);
    if($l == 1){
        return "00".$n;
    }elseif ($n == 2) {
        return "0".$n;
    }else{
        return $n;
    }
}

function admin_role($n)
{
    if($n == "Mode"){
        return "Moderator";
    }elseif ($n == "Admin") {
        return "Global Admin";
    }
}



function alert($msg,$type,$close = false)
{
    if($close == false){
        $msg = "<div class='alert alert-".$type."'>".$msg."</div>";
    }else{
        $msg = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
    }

    echo $msg;
}

function site_name(){
    return "Student Shoping Cart";
}

function advert_status($status){
    if($status == 0){
        $adverts = "<span class='btn btn-sm btn-warning'>Pending <i class='fa fa-hourglass-half'></i></span>";
    }elseif($status == 1){
        $adverts = "<span class='btn btn-sm btn-success'>Approved <i class='fa fa-check'></i></span>";
    }elseif($status == 2){
        $adverts = "<span class='btn btn-sm btn-danger'>Rejected <i class='fa fa-times'></i></span>";
    }
    
    echo $adverts;
}
?>