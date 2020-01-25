<!--table tag start-->
<?php 

$db=new DBConnect();
?>
<div style="width: 100%; background: #f4f4f4; height: 800;">
  <?php 

                  $query="select * from add_services";
                $result=$db->link->query($query);
                 while($fetch_service=$result->fetch_array())
              {?>

  <div style="height:370px; width:400px; background:#fff;float: left; clear: right; margin: 7px; ">
     <p style="text-align: center;">
    <h2 style="text-align: center;"> <?php echo $fetch_service[1]?></h2>
     </p>
    <p style="text-align: center;">
        <img src="images/<?php echo $fetch_service[0]?>.jpg" height="170" width="350">
    </p>

    <p style="text-align: justify; padding: 10px;">
        <?php echo  substr($fetch_service[2], 0, 150);?> 
     </p>
     <p style="text-align: center;"><a href="home page.php?id=<?php echo $fetch_service[0]?>" style="text-decoration: none;"> Read More...</a>
     </p>
    
  </div>
 <?php 
 }
?>
</div>
<!--table tag end-->
