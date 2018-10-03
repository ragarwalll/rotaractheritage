<?php $carousel="no"; 
include ( "./inc/header.inc.php");
?>

<div class="contact">
    <h3 id="area" class="contact__heading">Contact Us</h3>
    <h2 class="contact__detail ">Feel free to get in touch with us if you have a new project or simply something awesome</h2>
    <form action="" method="post">
        <input type="text" name="name" autocomplete="off" class="contact__input" placeholder="Name" autocomplete="off">
        <div class="contact__line1 line"></div>
        <input type="email" name="email" autocomplete="off" class="contact__input contact__email" placeholder="E-mail">
        <div class="contact__line2 line"></div>
        <textarea name="message" data-min-rows="1" rows="1" class="contact__input contact__message autoExpand"  placeholder="Message"></textarea>
        <div class="contact__line3 line"></div>
        
    </form>
</div>

<script src="js/textarea_as.js"></script>
<script src="js/contact__hover.js"></script>