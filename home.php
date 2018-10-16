<?php $carousel="no";
include ( "./inc/header.inc.php");
if(!$userid){
    die("You must be logged in to view this page");
}
include ( "./inc/header-logged.inc.php");   
//print $_SERVER["MYVAR"];
?>
<div class="load-bar" id="wait" style="position:fixed;z-index:9999999;">
  <div class="bar"></div>
  <div class="bar"></div>
  <div class="bar"></div>
</div>  
<!--Home Cover-->
<section class="hero">
    <div class="grid-header contain-header">
        <div class="hero-text col col--1">
          <h1 class="title-large"><span>Getting started with
          </span>Rotaract</h1>
            <p class="text-intro">El Arte is a Spanish word which when
            translated into English means The Art. El Arte is a
            place where you will find a collection of drawings
            and paintings.</p><br>
            <a href="" class="btn new-btn btn--secondary">Learn More</a>
            <a href="" class="btn new-btn btn--primary">All Drawing</a>
            <div class="downit">
                <i class="fas fa-angle-double-down fa-2x" style="color:white;"></i>
            </div>
        </div>
    </div>
</section>
<br><br>
<?php

include ( "./post_actions.php");
//posting
include ("./inc/create-post.inc.php");

if(isset($_GET['like'])){
    post::likePost($_GET['like'], $userid);
}
if(isset($_GET['commenti'])){
    if(isset($_POST['comment'])){
        $comment=$_POST['comment'];
        if($comment != ""){
            post::commentPost($_GET['commenti'],$userid,$comment);
        }
    }
}

?>
<div class="profile--wrapper">
    <?php
    $post_count=DB::query('SELECT count(*) FROM posts')[0]['count(*)'];
    ?>
</div> <!--End of profile--wrapper-->

<script type="text/javascript"> 
    var working = false;
    $(document).ready(function(){
        var row = 0;
        $.ajax({
            url: './posts',
            type: 'post',
            data: {row:row},
            success: function(response){
                document.querySelector('.profile--wrapper').insertAdjacentHTML('beforeend', response); 
                document.getElementById("row_posts").value = row;
                setTimeout(function() {
                    working = false;
                    }, 2000)
            } 
        });
    });
</script>

<script>

    $(window).scroll(function(){

    if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        var row = Number($('#row_posts').val());
        var allcount = Number($('#all_posts').val());
        var rowperpage = 5;
        var reset = 25;
        row = row + rowperpage;
        if(row > allcount){
            row = 0;
            document.getElementById("row_posts").value = row;
        }
        if(working == false){
            working = true;
            if(row <= allcount){
                $('#row').val(row);
                $.ajax({
                    url: './posts',
                    type: 'post',
                    data: {row:row},
                    success: function(response){
                        $(".profile--wrapper").append(response)
                        document.getElementById("row_posts").value = row;
                        setTimeout(function() {
                            working = false;
                            }, 2000)
                        }
                    });
                }
            }
        }
    });                  
</script>
<input type="hidden" id="row_posts" value="0">
<input type="hidden" id="all_posts" value="<?php echo $post_count; ?>">
<script src='js/like_click.js'></script>
<script src='js/autoresize.jquery.min.js'></script>
<script>
	$(function(){
        var resize=document.querySelectorAll("#normal");
        var i;
        for(i=0;i<resize.length;i++){
        $(resize[i]).autosize();
        }
    });
//comments-reveal
$('.profile--wrapper').on('keypress','#normal', function(e){
    var textarea = this;
    if(textarea.scrollTop != 0){
        textarea.style.height = textarea.scrollHeight + "px";
    }

})


</script>
<script>
//loading-screen
$loading=$('#wait').hide()
$(document).ready(function(){
    $(document).ajaxStart(function(){
        $loading.show();
    });
    $(document).ajaxStop(function(){
        $loading.hide();
    });
});
</script>

<script>
//comments-reveal
$('.profile--wrapper').on('click','.post--comment', function(){

    $(this).parent().next().next().next().toggleClass('open');
})

</script>
