<?php 
include('includes/connection.php');
$db=new DBConnect();
//echo $db->errolr;


$name=mysqli_real_escape_string($db->link,isset($_POST["name"])?$_POST["name"]:"");
$ph_no=mysqli_real_escape_string($db->link,isset($_POST["ph_no"])?$_POST["ph_no"]:"");
$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:"");
$company=mysqli_real_escape_string($db->link,isset($_POST["company"])?$_POST["company"]:"");
$subject=mysqli_real_escape_string($db->link,isset($_POST["subject"])?$_POST["subject"]:"");
$message=mysqli_real_escape_string($db->link,isset($_POST["message"])?$_POST["message"]:"");


if(isset($_REQUEST["save"]))
{

    if(!empty($email))
    {

       $sql="INSERT INTO `contact`(`name`, `ph_no`, `email`, `company`, `subject`, `message`)  VALUES('$name','$ph_no','$email','$company','$subject','$message')";


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
    <?php include('includes/marqueetag.php'); ?>
</div>
<!--Marquee tag end -->


<!--table tag start-->
<div>
    <table width="100%" height="70" bgcolor="darkgray" cellpadding="0" cellspacing="" border="0">
        <tr>
            <td width="15%">

                <p align="center">
                    <font size="5" color="black" face="serif"><b>CONTRACT US</b></font>
                </p>

            </td>

            <td width="72%">
                <p></p>
            </td>

            <td width="23%">
                <p align="left">HOME/CONTRACT US </p>
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
                            <td align="center">
                                <h1>OFFICE ADDRESS</h1>
                                <h3>Banani,Dhaka-1204</h3>
                                <p>Bangladesh</p>
                                <p>Phone:+880767966889</p>
                                <p>info@homeservices.com</p>
                                <p>www.homeservices.com</p>
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

                                            <label for="Company">Company:</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="company" placeholder=" Company Name" size="60" required>
                                            <br><br>

                                            <label for="Subject">Subject:</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="subject" placeholder=" Subject" size="60" required>
                                            <br><br>

                                            <label for="Message">Message:</label>
                                            <br>
                                            <input type="text" class="text_field" id=" " name="message" placeholder="Type your Message" size="60" required>
                                            <!--</td> -->
                                    </tr>

                                    <tr>
                                        <td>
                                            <br><br>
                                            <input class="button" type="submit" value="   SEND YOUR MESSAGE   " name="save">
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
    <?php include('includes/footer.php'); ?>
</div>
<div>
    <?php include('includes/footermenu.php'); ?>
</div>
