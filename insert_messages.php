<?php include ( "./inc/connect.inc.php");
$username=stripslashes(htmlspecialchars($_GET['a']));
$profile=stripslashes(htmlspecialchars($_GET['b']));
$message=stripslashes(htmlspecialchars($_GET['c']));
$date=$_GET['d'];
if($username=="" || $message=="" || $user=""){
    die();
}
$date=date("Y-m-d");
$opened="no";
DB::query('INSERT INTO pvt_messages VALUES(\'\',:fromuser,:touser,:body,:datee,:opened)',array(':fromuser'=>$username,':touser'=>$profile,':body'=>$message,':datee'=>$date,':opened'=>$opened));
?>