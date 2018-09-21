<?php
$carousel="no"; 
include ( "./inc/header.inc.php");
$to = DB::query('SELECT email_id FROM members WHERE id=(SELECT id_member FROM subscription WHERE id="1")')[0]['email_id'];
echo $to;
?>