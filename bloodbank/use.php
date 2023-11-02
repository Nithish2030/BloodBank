<?php 
session_start();
require 'file/connection.php';
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
<style>
.body{
background-color:white;
}

.che{
width:100%;
height:1200px;
margin:auto;
background-color:white;
}

.contain{
width:60%;
height:1200px;
float:left;
background-color:white;
}

ul.b{
list-style-type: square;
font-family:arial;
font-size:20px;
line-height:1.6;
}
.contain1{
width:30%;
height:360px;
float:right;
margin:4%;
background-color:white;
border:1px solid black;
}
.contain1 a{
float:center;
border:1px solid black;
margin:8px;
width:94%;
height:52px;
text-align:center;
text-decoration:none;
background-color:white;
color:black;
display:inline-block;
border-radius:2%;
}
.contain1 a:hover{
background-color:#008dc9;
color:white;
}
.c{
background-color:#008dc9;
color:white;
border:1px solid black;
width:100%;
height:52px;
}

.contain2{
width:30%;
height:600px;
float:right;
margin:4%;
background-color:white;
}

</style>
</head>
<body class="body">
<div class="che">
<div class="contain">
<p style="font-family:arial;color:#ec1c24; font-size:50px"><b>Uses of blood donation</b></p>
<p style= "font-family:arial; font-size:20px;line-height:1.6;">Blood donation is definitely a noble act. Many clinics and hospitals constantly require blood for several purposes. This makes the idea of blood donation a noble gesture as it provides life-saving help to people and patients. On an average, human body contains approximately 4 to 5 liters blood that can be donated after every third month for men and every 4 months for women. Many people believe that blood donation is harmful for their body, however, this is untrue.</p>

<p style="font-family:arial;color:green;font-size:30px">Life Saver</p>
<ul class="b">
<li>Many people require urgent blood and by donating our blood we easily give them life. This is one of the biggest satisfactions one can experience. It makes us proud and can also give us a purpose of life – the feeling that you made a difference to someone’s life.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Refreshes our System</p>
<ul class="b">
<li>Having donated blood, our cell count goes down which leads to new cells regeneration. This is definitely a healthy process that defines that an individual is fine and fit. Our entire body freshens up and many of our health issues come to an end. Therefore, blood donation results in a healthier body that raises our life span.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Rise of Quantity of Blood</p>
<ul class="b">
<li>Blood isn’t merely needed in case of injuries or accidents but also for plasma or platelets required by a patient. In such cases, if adequate amount of blood is readily available in a blood bank, patients can be smoothly treated. Hence people should regularly donate blood to ensure an adequate availability of it for the needy at right time.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">Proper Diagnosis</p>
<ul class="b">
<li>Prior to our donating blood, hospital personnel make necessary diagnosis of cholesterol, iron content, hemoglobin, etc. Hence we can identify if all is normal. If all is well, the doctor allows us to donate blood.</li>
</ul>
</div>

<div class="contain1">
<div class="c">
<p style="font-size:20px ;font-family:arial;text-align:center;"><b>Uses of Blood Donation</b></p>
</div>
<br>

<a href="types.php">
<p style="font-size:20px;font-family:arial;text-align:center">Types of Blood Groups</p></a>

<a href="whocan.php">
<p style="font-size:20px ;font-family:arial;text-align:center">Who can donate blood?</p></a>

<a href="tips.php">
<p style="font-size:20px ;font-family:arial;text-align:center" >Tips for Blood Donation</p></a>

<a href="login.php">
<p style="font-size:20px ;font-family:arial;text-align:center">Login to Your Account</p></a>
</div>

<div class="contain2">
<p style="font-family:arial;font-size:30px;text-align:center; background-color:#008dc9;color:white;border:1px solid black;">Popular Articles</p>
<br>

<a href="#" style="text-decoration:none;">
<img src="arti1.jpg" style="width:80px;height:auto;float:left;padding-top:4px;">
<p style="font-family:arial;font-size:20px; color:black;">How Often You Can Give Blood, Platelets or Plasma And Why</p></a>
<br>
<br>

<a href="#" style="text-decoration:none;">
<img src="arti2.jpg" style="width:80px;height:;float:left;padding-top:4px;">
<p style="font-family:arial;font-size:20px; color:black;">The History of World Blood Donor Day</p></a>
<br>
<br>

<a href="#" style="text-decoration:none;">
<img src="arti3.jpg" style="width:80px;height:;float:left;padding-top:4px;">
<p style="font-family:arial;font-size:20px; color:black;">Elvis, NASA and Apheresis 1970s Blood Donation</p></a>
</div>
</div>


</body>
</html>