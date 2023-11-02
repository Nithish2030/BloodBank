<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#receivers">Receivers</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="hospitals">
	   <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
	   

<tr>
 <td><input type="text" name="hname" placeholder="Hospital Name"  required></td>
 </tr><br><br>
 <tr>
 <td><input type="text" name="hcity" placeholder="Hospital City"  required></td>
 </tr><br><br>
 <tr>
 <td><input type="tel" name="hphone" placeholder="Hospital Phone Number"  required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit"></td>
 </tr><br><br>
 <tr>
 <td><input type="email" name="hemail" placeholder="Hospital Email"  required></td>
 </tr><br><br>
 <tr>
 <td> <input type="password" name="hpassword" placeholder="Hospital Password"  required minlength="6"></td>
 </tr><br><br>
 <tr>
 <td><input type="submit" name="hregister" value="Register" ></td>
 </tr><br><br>
  </form>
 

       

       </div>


       <div class="tab-pane container fade" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
<tr>
 <td><input type="text" name="rname" placeholder="Receiver Name"  required></td>
 </tr><br><br>
 <tr>
 <td><select name="rbg"  required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select></td>
 </tr><br><br>
 <tr>
 <td><input type="text" name="rcity" placeholder="Receiver City"  required></td>
 </tr><br><br>
 <tr>
 <td><input type="tel" name="rphone" placeholder="Receiver Phone Number"  required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit"></td>
 </tr><br><br>
 <tr>
 <td><input type="email" name="remail" placeholder="Receiver Email"  required></td>
 </tr><br><br>
 <tr>
 <td><input type="password" name="rpassword" placeholder="Receiver Password"  required minlength="6"></td>
 </tr><br><br>
 <tr>
 <td> <input type="submit" name="rregister" value="Register" >
        </form></td>
 </tr><br>
          
          
          
          
          
          
         

       </div>
    </div>
    <a href="login.php" style="color:blue;padding:7px;font-size:15px" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
</body>
</html>


<?php } ?>