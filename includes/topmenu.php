<?php 
include('connection.php');
$db=new DBConnect();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>services at home</title>
        <link rel="stylesheet" href="css/slideer.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>


        <!--<div id="topmenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="faq.php">FAQ</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="gallery.php">Photo Gallery</a></li>
<li><a href="friends.php">Friends</a></li>
</ul>
</div>-->

        <div id="topmenu">
            <ul>
                <li><a href="home page.php">HOME</a></li>
                <li><a href="About us page.php">ABOUT US</a></li>

                <li> <a href="our services.php">OUR SERVICES </a>
                    <ul>

                       
                        <?php 
                                    $query="select * from add_services";
                                      $result=$db->link->query($query);
                                      while($fetch_service=$result->fetch_array())
                                      {?>

                                        <li><a href="#"><?php echo $fetch_service[1]?></a></li>
                                            

                                      <?php 
                                      }
                                      ?>
                 
                    </ul>
                </li>
                <li> <a href="servicing area.php">  SERVICING AREA </a>
                    <ul>
                        <li><a href="#">Dhaka</a></li>
                        <li><a href="#">Chittagong</a></li>n
                        <li><a href="#">Sylhet</a></li>
                        <li><a href="#">Khulna</a></li>
                        <li><a href="#">Barishal</a></li>
                        <li><a href="#">Rajshahi</a></li>
                        <li><a href="#">Mymensing</a></li>
                        <li><a href="#">Rangpur</a></li>

                    </ul>
                </li>

                <li><a href="contact us page.php">CONTRACT US</a></li>
            </ul>
        </div>
