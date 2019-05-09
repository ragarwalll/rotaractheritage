<?php $carousel="no";
include ( "./inc/header.inc.php");
if(!$userid){
    die("You must be logged in to view this page");
}
include ( "./inc/header-logged.inc.php");
if (isset($_GET['user']))
{
  $user= $_GET['user'];
}
//print $_SERVER["MYVAR"];
?><br><br>
<div class="load-bar" id="wait" style="position:fixed;z-index:9999999;">
  <div class="bar"></div>
  <div class="bar"></div>
  <div class="bar"></div>
</div>  

<br><br>
<?php $user_details = DB::query('SELECT * FROM users WHERE username=:id', array(':id'=>$user));
    foreach($user_details as $get_name){
        
        $firstname_post=$get_name['first_name'];
        $lastname_post=$get_name['last_name'];
        $userdata_post=$get_name['userdata']; 
        //echo $lastname_post;    
    }?>
<div class="profile--wrapper">
<br>
    <div class="profile-tab"> 
        <div class="user-dp">
            <img src="<?php print $_SERVER['MYVAR'];?>assets/userdata/<?php echo $userdata_post;?>/dp.jpg" width="200" style="border-radius: 50%" alt=""><br><br>
            <h3><?php echo $firstname_post." ".$lastname_post;?></h3>
            <br>
            <?php
            if($user != $username){?>
            <a href="<?php print $_SERVER['MYVAR'];?>messenger.php?to=<?php echo $user?>" class="contact__final">Message</a>
            <br><br><br>
            <?php }?>
        </div>
        
            
        </div>
    </div>

    <?php
    include ( "./post_actions.php");
    //posting
    
    //like
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
    
    ?><br><br>
    <?php
    $post_count=DB::query('SELECT count(*) FROM posts WHERE added_by=:user', array(':user'=>$userid))[0]['count(*)'];
    ?>
    </div> <!--End of profile--wrapper-->

    <script type="text/javascript"> 
        var working = false;
        $(document).ready(function(){
            var row = 0;
            var user = "<?php echo $user;?>";
            $.ajax({
                url: './post-profile',
                type: 'post',
                data: {row:row, user:user},
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

    if ($(this).scrollTop() + 100 >= $('body').height() - $(window).height()) {
        var row = Number($('#row_posts').val());
        var allcount = Number($('#all_posts').val());
        var rowperpage = 5;
        var reset = 25;
        var user = "<?php echo $user;?>";
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
                    url: './post-profile',
                    type: 'post',
                    data: {row:row, user:user},
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




