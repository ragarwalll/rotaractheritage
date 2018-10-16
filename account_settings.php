



<div class="profile--wrapper">
    

    


<?php
$get_info= DB::query('SELECT first_name, last_name FROM users WHERE id=:id',array(':id'=>$userid));
foreach($get_info as $get_row){
    $i_firstname=$get_row['first_name'];
    $i_lastname=$get_row['last_name'];
}
$user_info= @$_POST['user_info'];
if($user_info)
{
  $firstname=strip_tags(@$_POST['fname']);
  $lastname=strip_tags(@$_POST['lname']);
  DB::query('UPDATE users SET first_name=:fn WHERE id=:id',array(':fn'=>$firstname,':id'=>$userid));
  DB::query('UPDATE users SET last_name=:ln WHERE id=:id',array(':ln'=>$lastname,':id'=>$userid));
}

?>


    <form action="" method="POST">

    <div class="toggle2"><h4>Update your profile info</h4></div>
    <div class="inside2">
    First Name:  <input type="text" name="fname" id="fname" size="40" value="<?php echo $i_firstname; ?>"><br /><br />
    Last Name: <input type="text" name="lname" id="lname" size="40" value="<?php echo $i_lastname; ?>"><br /><br />
    <input type="submit" name="user_info" id="user_info" class="btn btn--primary" value="Update Information"><br /><br />
    </div>

    </form>

</div>