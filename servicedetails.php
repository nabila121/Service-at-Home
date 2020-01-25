<?php 

$db=new DBConnect();
?>
<div style="width: 100%; background: #f4f4f4; height: 800px;">
  <?php 

                  $query="select * from add_services where s_id='".$_GET["id"]."'";

                $result=$db->link->query($query);
                 while($fetch_service=$result->fetch_array())
              {?>

  <div style="height:100%; width:100%; background:#fff;float: left; clear: right; margin: 7px; ">
     <p style="text-align: center;">
    <h2 style="text-align: center;"> <?php echo $fetch_service[1]?></h2>
     </p>
    <p style="text-align: left; padding: 20px;">
        <img src="images/<?php echo $fetch_service[0]?>.jpg" height="250" width="450">
    </p>

    <p style="text-align: justify; padding: 10px;">
        <?php echo  $fetch_service[2]?> 
     </p>
 

    
  </div>
 <?php 
 }
?>
</div>
<!--table tag end-->
