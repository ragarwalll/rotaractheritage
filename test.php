<?php
$carousel="no";
include ( "./inc/header.inc.php");
if(isset($_GET['like'])){
    echo $_GET['like'];
}
?>
<form action="?like=1" method="post">
<input type="submit">
</form>