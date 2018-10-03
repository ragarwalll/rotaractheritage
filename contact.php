<?php $carousel="no"; 
include ( "./inc/header.inc.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    if($name){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if(strlen($message)>=5){
                $email_default="agarwal.rahul324329@gmail.com";
                $headers = "From: agarwal.rahul324@gmail.com";
                mail($email_default,"Rotaract-Contact Us By: ".$name."",$message,$headers);
                echo "
                <script>
                    alert('We have recieved your mail. We will contact you soon');
                </script>
                ";
                
            }
            else{
                echo "
                <script>
                    alert('Your message should be greater than atleast 5 characters');
                ";
            }
        }
        else{
            echo "
            <script>
                alert('Invalid Email');
            ";
        }
    }
    else{
        echo "
        <script>
            alert('Enter Name');
        </script>  
        ";
    }
}
?>
<div class="form">
    <div class="contact">
        <h3 id="area" class="contact__heading">Contact Us</h3>
        <h2 class="contact__detail ">Feel free to get in touch with us if you have a new project or simply something awesome</h2>
        <form action="" method="post">
            <input type="text" name="name" class="contact__input" placeholder="Name" autocomplete="off">
            <div class="contact__line1 line"></div>
            <input type="email" name="email" class="contact__input contact__email" placeholder="E-mail" autocomplete="off">
            <div class="contact__line2 line"></div>
            <textarea name="message" data-min-rows="1" rows="1" class="contact__input contact__message autoExpand"  placeholder="Message"></textarea>
            <div class="contact__line3 line"></div>
            <input type="submit" class="contact__final" name="submit" value="Submit">
            
        </form>
    </div>
</div>
<script src="js/textarea_as.js"></script>
<script src="js/contact__hover.js"></script>
