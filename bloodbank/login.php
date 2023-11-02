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
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers">Receiver's</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals">
        <form action="file/hospitalLogin.php" method="post">
		<tr>
 <td><label class="text-muted font-weight-bold" >Hospital Email</label><br>
          <input type="email" name="hemail" placeholder="Hospital Email" ></td>
 </tr><br><br>
 <tr>
 <td><label class="text-muted font-weight-bold" >Hospital Password</label><br>
          <input type="password" name="hpassword" placeholder="Hospital Password" ></td>
 </tr><br><br>
 <tr>
 <td><input type="submit" name="hlogin" value="Login" ></td>
 </tr><br><br>

          
          
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/receiverLogin.php" method="post">
		 <tr>
 <td><label class="text-muted font-weight-bold" >Receiver Email</label><br>
          <input type="email" name="remail" placeholder="Receiver Email" ></td>
 </tr>
  <tr>
 <td> <label class="text-muted font-weight-bold" >Receiver Password</label>
          <input type="password" name="rpassword" placeholder="Receiver Password" ></td>
 </tr>
  <tr><br><br>
 <td><input type="submit" name="rlogin" value="Login" ></td>
 </tr><br><br>
          
         
          
        </form>
      </div>

    </div>
    <a href="register.php"  title="Click here">Don't have account?</a>
</div>
</div>
</div>
</div>

</body>
</html>
<?php } ?>