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
<section class="profile_cover">
    <p>Hi I'm <?php echo $fname; echo " "; echo $lname?></p>
</section>