<?php include ( "./inc/connect.inc.php");

$username=stripslashes(htmlspecialchars($_GET['x']));
$profile=stripslashes(htmlspecialchars($_GET['y']));
$yes="yes";
DB::query('UPDATE pvt_messages SET opened=:yes WHERE user_to=:username AND user_from=:profilee',array(':yes'=>$yes,':username'=>$username,':profilee'=>$profile));

$query=DB::query('SELECT user_from,msg_body,date,opened from pvt_messages WHERE user_to IN(:username1,:profile1) AND user_from IN(:username1,:profile1)',array(':username1'=>$username,':profile1'=>$profile));

foreach($query as $variable){
    

    if($variable[3] == "yes")
    {
        $variable[3] = "Seen";
    }
    else {
        $variable[3] = "";
    }
    echo $variable[0]."\\".$variable[1]."\\".$variable[2]."\\".$variable[3]."\n";
}

?>