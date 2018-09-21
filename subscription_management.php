<?php $carousel="no"; 
include ( "./inc/header.inc.php");
include ( "./monthly.php");
?>
<div class="head_container">
    
</div>
<div class="mem_head">
<p class="">Member's Subscription Area</p>
</div>
<a href="addmembers">
    <div class="add_btn">
        <button class="add_mem" href="#open-modal">
            <span class="icon_plus">+</span>
        </button>
    </div>
</a>

<table class="mem_table" id="myTable">
<!--Head-->
    <tr>
        <th class="bottom_table" id="mem_month" onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">Name</th>
        <th class="bottom_table">
            <table class="mem_month">
                <tbody>
                    <tr>
                        <th class="bottom_table" id="mem_month">Jan</th>
                        <th class="bottom_table" id="mem_month">Feb</th>
                        <th class="bottom_table" id="mem_month">Mar</th>
                        <th class="bottom_table" id="mem_month">Apr</th>
                        <th class="bottom_table" id="mem_month">May</th>
                        <th class="bottom_table" id="mem_month">Jun</th>
                    </tr>
                    <tr>
                        <th id="mem_month">Jul</th>
                        <th id="mem_month">Aug</th>
                        <th id="mem_month">Sept</th>
                        <th id="mem_month">Oct</th>
                        <th id="mem_month">Nov</th>
                        <th id="mem_month">Dec</th>
                    </tr>
                </tbody>
            </table>
        </th>
    </tr>
<?php
#Chnaging the values
if(isset($_GET['con'])){
    month::paymentStatus($_GET['con'],$_GET['stat']);
}
$member=DB::query('SELECT * FROM members');
foreach($member as $p){
    $mem_id=$p['id'];
    $mem_name=$p['name'];
    $mem_email=$p['email_id'];

#DB::query('INSERT INTO subscription VALUES(\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',:userid)', array(':userid'=>$mem_id));

?>
<!--Data-->
    <tr class="dataHover item">
        <td class="mem_name"><?php echo $mem_name; ?></td>
        <td>
            <table class="mem_month mem_monthDisplay">
                <tr>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Jan"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Feb"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Mar"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Apr"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"May"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Jun"); ?></td>
                </tr>
                <tr>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Jul"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Aug"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Sep"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Oct"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Nov"); ?></td>
                    <td><?php echo $currenMonth=month::displayMonth($mem_id,"Dec"); ?></td>
                </tr>
            </table>
        </td>
    </tr>

<?php } ?>
</table>