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

       $sql="INSERT INTO `painting`(`name`, `ph_no`, `email`, `company`,  `message`)  VALUES('$name','$ph_no','$email', '$company','$message')";


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
    <table width="100%" height="70" bgcolor="skyblue" cellpadding="0" cellspacing="" border="0">
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
                                        <td width="33%"><img src="images/Painting Services.jpg" alt=""></td>
                                    </tr>

                                    <tr>
                                        <br>
                                        <td width="33%">
                                            <h1>Painting Services</h1>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Service@Home Home Maintenance Services inspirational team of painting Services and decorating have the knowledge and experience to understand your decorating requirements, offer advice where required, and redecorate your home or establishment to a more than professional standard. Our team of painting provides an outstanding quality of painting and decorating at highly competitive rates and offer a FREE Quotation service for all your painting and decorating needs. Our painting team is specializing in interior / exterior painting and decorating, wallpapering, plastering, tiling, covering and more. Our painters and decorators pride themselves on an attention to design and detail which is rarely found within companies working to our highly competitive quotations. We are able to achieve the short turnaround time required by many clients by careful planning of work, whether as part of a refurbishment or a separate painting and decorating job.</p>
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
                                                  <option value="6">Interior Wall Painting</option>
                                    
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
