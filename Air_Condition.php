<?php 
include('includes/connection.php');
$db=new DBConnect();
echo $db->error;


$name=mysqli_real_escape_string($db->link,isset($_POST["name"])?$_POST["name"]:"");
$ph_no=mysqli_real_escape_string($db->link,isset($_POST["ph_no"])?$_POST["ph_no"]:"");
$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:"");
/*$category=mysqli_real_escape_string($db->link,isset($_POST["category"])?$_POST["category"]:""); */
$company=mysqli_real_escape_string($db->link,isset($_POST["company"])?$_POST["company"]:"");
$message=mysqli_real_escape_string($db->link,isset($_POST["message"])?$_POST["message"]:"");


if(isset($_REQUEST["save"]))
{

    if(!empty($email))     
    {

       $sql="INSERT INTO `air_condition`(`ac_name`, `ac_ph`, `ac_email`, `company`,  `msg`)  VALUES('$name','$ph_no','$email', '$company','$message')";


          $save=$db->link->query($sql);
        if($save)
        {
             echo $db->message="<span style='color:GREEN;'> Successfully</span>";
        }
        else
        {
             echo $db->message="<span style='color:RED;'> Unsuccessfully</span>";
        }
    }
    else
    {
     echo  $message="Insert Data";

    }

}

 ?>
<!DOCTYPE html>





<!--  header start -->
<div>
    <?php include('includes/topmenu.php'); ?>
</div>
<!--  header end  -->

<!--Marquee tag start -->
<div>
    <?php include('includes/marqueetag.php') ?>
</div>
<!--Marquee tag end -->

<!--table tag start-->
<div>
    <table width="100%" height="70" bgcolor="#f0b3ff" cellpadding="0" cellspacing="" border="0">
        <tr>
            <td width="18%">

                <p align="center">
                    <font size="5" color="black" face="serif"><b>SERVICE DETAILS</b></font>
                </p>

            </td>

            <td width="67%">
                <p></p>
            </td>

            <td width="15%">
                <p align="left">HOME/SERVICE DETAILS</p>
            </td>
        </tr>

    </table>
</div>
<!--table tag end-->







<!--form tag start -->
<div>
    <form method="post" action=" ">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="50%">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                                <table table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="33%"><img src="images/air%20conditionong.jpg" alt=""></td>
                                    </tr>

                                    <tr>
                                        <br>
                                        <td width="33%">
                                            <h1>Air condition</h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>The best of the best AC services which not only include air conditioners regular repair but also AC servicing, AC air duct leakage repair, AC cooling repair, AC filter related services, etc. If you are moving into a new house and need your Air conditioners to be installed, we do that too! Air conditioner Packing, Storing and Moving Service Most of us move into new houses and often find it hard to pack, store and move the AC since its machinery is technical and fragile. Worry no more as our skilled staff is great at handling your air conditioners from the start till the end. We can unpack it for you, install it, store its spare parts and when it’s time to moving again, we can remove it from the walls, pack it and move it to the new location effortlessly. Regular Maintenance and Repair Regular maintenance is necessary when you use your air conditioners 24/7. It is thus important you hire a professional electrician who specializes in AC repair. Our AC expert electricians are great at minor repairs, adding AC gas, optimizing air cooling and managing other AC related problems.</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>

                <td width="50%">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="25%">
                                            <br> <br>
                                            <h2>
                                                <P>Order Here :</P>
                                            </h2>
                                            <label for="Name">Name:</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="name" placeholder=" Your name" size="60" required><br><br>

                                            <label for="Phone">Phone:</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="ph_no" placeholder=" Phone No." size="60" required>
                                            <br><br>

                                            <label for="Email">Email:</label>
                                            <br>
                                            <input type="email" class="text_field" id=" " name="email" placeholder=" Email" size="60" required><br><br>


                                            <label for="category">Select category:</label>
                                            <br>

                                            <select name="category" class="form-control" style="width: 453px">
                                                  <option >AC Maintenance</option>
                                                  <option >AC Servicing</option>
                                                  <option >&nbsp;Emergency AC Repair &amp; Maintenance</option>
                                                  <option >Air Conditioner Maintenance Repair</option>
                                                  <option >AC Preventive Maintenance</option>
                                                                      </select>


                                            <br> <br>



                                            <label for="Company">Company</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="company" placeholder=" Your Company" size="60" required>
                                            <br><br>

                                            <label for="Message">Message</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="message" placeholder=" Write your Message here" size="60" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br><br>
                                            <input class="button" type="submit" value="Order Now " name="save">
                                            <input class="button" type="reset" value="   RESET   ">
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
<!--form tag end -->

<div>
    <?php include('includes/footermenu.php'); ?>
</div>
