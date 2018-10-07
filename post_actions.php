<?php

class post{

    public static function likePost($post_id,$userid){
        if(DB::query('SELECT user_id_liked FROM likes WHERE post_id=:post_id AND user_id_liked=:id', array(':post_id'=>$post_id, ':id'=>$userid))){
            echo $post_id;
            DB::query('UPDATE total_likes SET total_likes=total_likes-1 WHERE post_id=:id', array(':id'=>$post_id));
            DB::query('DELETE FROM likes WHERE post_id=:post_id AND user_id_liked=:id', array(':post_id'=>$post_id, ':id'=>$userid));
        }
        else{
            echo $post_id."HUI";
            DB::query('UPDATE total_likes SET total_likes=total_likes+1 WHERE post_id=:id', array(':id'=>$post_id));
            DB::query('INSERT INTO likes VALUES(\'\',:id,:post_id)', array(':id'=>$userid, ':post_id'=>$post_id));
        }   
    }

    public static function commentPost($post_id,$userid,$body){
        DB::query('INSERT INTO comments VALUES(\'\',:comment,:id,:post_id)', array(':comment'=>"$body",':id'=>$userid, ':post_id'=>$post_id));
        ?>
        <script>
            window.location.href = "http://127.0.0.1/rotaractheritage/home";
        </script>
        <?php
    }

    public static function postImage($post_id,$userid){
        $userdata=DB::query('SELECT userdata FROM users WHERE id=:id',array(':id'=>$userid))[0]['userdata'];
        if(DB::query('SELECT post_image FROM posts WHERE id=:id',array(':id'=>$post_id))[0]['post_image']){
            $pic=DB::query('SELECT post_image FROM posts WHERE id=:id',array(':id'=>$post_id))[0]['post_image'];
            $final="assets/userdata/".$userdata."/post/".$pic;
            return $final;
        }
    }
}

