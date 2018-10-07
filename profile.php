<?php $carousel="no";
include ( "./inc/header.inc.php");
if(!$userid){
    die("You must be logged in to view this page");
}
$username= "";

if(isset($_GET['username'])){
    if(DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))){
        $username = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
        $name = DB::query('SELECT first_name, last_name FROM users WHERE username=:username', array(':username'=>$username));
        foreach($name as $getname){
            $fname = $getname['first_name'];
            $lname = $getname['last_name'];
        }

    }
}
?>

<div class="profile--wrapper">
    <!--About the user-->
    <div class="user-profile">
        <div class="profile-picture">
            <img src="http://www.unsplash.it/200" alt="">
        </div>
        <div class="space"></div>
        <div class="profile-bio">
            <div class="header">
            Intro
            </div>
            <div class="bio--content">
                <ul>
                    <li>President at The Rotaract Club of The Heritage Academy</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
    
</div>
<script src='js/autoresize.jquery.min.js'></script>
<script>
	$(function(){
		$('#normal').autosize();
	});
</script>