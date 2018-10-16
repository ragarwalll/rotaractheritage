<?php $carousel="no"; 
include ( "./inc/header.inc.php");
if(!$userid){
    die("You must be logged in to vew this page");
}
include ( "./inc/header-logged.inc.php");
?>
<div class="profile--wrapper">
<?php
if(isset($_GET['account'])){
    $settings = htmlspecialchars($_GET['account']);
    if($settings == "picture"){
        include ( "./settings/picture.php");
    }
    elseif($settings == "password"){
        include ( "./settings/password.php");
    }
    elseif($settings == "name"){
        include ( "./settings/name.php");
    }

}


?>

</div>