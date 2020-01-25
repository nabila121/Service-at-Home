<?php 
include('includes/connection.php');
$db=new DBConnect();
//echo $db->error;


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

       $sql="INSERT INTO `cleaning`(`name`, `ph_no`, `email`, `company`,  `message`)  VALUES('$name','$ph_no','$email', '$company','$message')";


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
    <table width="100%" height="70" bgcolor="pink" cellpadding="0" cellspacing="" border="0">
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
                                        <td width="33%"><img src="images/Cleaning Services.jpg" alt=""></td>
                                    </tr>

                                    <tr>
                                        <br>
                                        <td width="33%">
                                            <h1>Cleaning Services</h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>MHPT Cleaning Services is a one-stop solution for your needs in cleaning your homes. We employ the most professional house cleaners in Dubai, who are guaranteed to make your home sparkle from top to bottom. Whether you’re after one-time house cleaning, moving out house cleaning, MHPT Cleaning Service has all your needs covered. MHPT Cleaning Service offers good quality cleaning services with attractive house cleaning packages and rates. Our focus on listening to the needs of our customers and providing top quality service is what keeps our customers coming back to us. If you are having a really busy schedule, why not lighten your workload by getting us to do all the cleaning for you instead? Not only would you enjoy a clean and tidy house at all times, you will have a lot more free time to spend with your family. When you are particular of your home’s hygiene, you are also taking care of your family’s health. The probability of air-borne diseases (from dirty air conditioner), dust mites will be greatly reduced. Try our value-for-money home cleaning service, guaranteed to please you with our affordability and reliability.</p>
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
                                                <input type="text" class="text_field" id=" " name ="name" placeholder=" Your name" size="60" required><br><br>

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
                                                  <option value="6">Cleaning Service</option>
                                    
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
