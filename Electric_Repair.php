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

       $sql="INSERT INTO `electric_repair`(`name`, `ph_no`, `email`, `company`,  `message`)  VALUES('$name','$ph_no','$email', '$company','$message')";


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
    <table width="100%" height="70" bgcolor="lightgreen" cellpadding="0" cellspacing="" border="0">
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
                                        <td width="33%"><img src="images/elecric%20repair.jpg" alt=""></td>
                                    </tr>

                                    <tr>
                                        <br>
                                        <td width="33%">
                                            <h1>Electric Repair</h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>If you are considering an Electric Repair & Maintenance for your home, there are a few things you should be aware of; an Electric Repair & Maintenance is no small task, and the more you know about what’s available, the better you’ll be able to communicate to your contractor what you expect from the job. Service@Home Electric Repair & Maintenanceproviding the range of Electric Repair & Maintenance, changing of wires, replacement of lights, dimmer switch, wall sockets, chandelier lights etc…Service@Home also providing services for changing or installation Modular Switches, Semi Modular Switches, Light Fitting & Luminaries, MCB And Distribution Box, Wires & Cables.</p>
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

                                            <select name="pdt_id" class="form-control" style="width:453px" ;>
                                                  <option value="6">Electric Repair</option>
                                                  <option value="7">Electric Fitting</option>
                        
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
