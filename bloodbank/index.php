<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.body{
background-color:white;
}

.imag{
width:100%;
height:300px;
background-color:white;
display:flex;
}
.img{
border:none;
align-items:center; 
justify-content:center;
background-size:auto;
height:auto;
width:20%;
text-align:center;
text-decoration:none;
background-color:white;
color:black;
display:inline-block;
}



.maincont{
width:90%;
height:900px;
background-color:white;
margin:auto;
}
.cont1{
width:25%;
float:right;
height:360px;
background-color:white;
border:1px solid black;
}
.cont1 a{
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
.cont1 a:hover{
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
.cont2{
width:70%;
float:left;
height:200px;
background-color:white;
}
.cont3{
width:70%;
float:left;
height:700px;
border:1px solid black;
background-color:white;
}
ul.a{
list-style-type:none;
font-family:segoe print;
font-size:20px;
line-height:1.6;
}

.footer{
background-color:lightgray;
width:100%;
height:100px;
margin:auto;
}
.footerbox{
width:30%;
height:50px;
margin:auto;;
background-color:lightgray;
}
.fa{
padding:5px;
font-size:25px;
width:12%;
text-align: center;
text-decoration: none;
margin: 5px 2px;
border-radius:50%;
}
.fa:hover {
opacity: 0.7;
}
.fa-facebook {
background:lightgray;
color:black;
}
.fa-twitter {
background:lightgray;
color:black;
}
.fa-linkedin {
background:lightgray;
color:black;
}
.fa-instagram {
background:lightgray;
color:black;
}
.fa-google {
background:lightgray;
color:black;
}
.fa-youtube {
background:lightgray;
color:black;
}



</style>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>
   <body class="body">


</h1>
</div>
<div class="imag">
<img src="2.jpeg" alt="main" class="img">
<img src="1.jpeg" alt="main2" class="img">
<img src="fs.jpeg" alt="main3" class="img">
<img src="gs.jpeg" alt="main4" class="img">
<img src="2.jpeg" alt="main" class="img">
</div>
<br>
<div class="maincont">
<div class="cont1">
<div class="c">
<p style="font-size:20px ;font-family:arial;text-align:center;"><b>Know!</b></p>
</div>
<br>

<a href="types.php">
<p style="font-size:20px;font-family:arial;text-align:center"><b>Types of Blood Groups</b></p></a>

<a href="use.php">
<p style="font-size:20px ;font-family:arial;text-align:center"><b>Uses of Donating Blood</b></p></a>

<a href="whocan.php">
<p style="font-size:20px ;font-family:arial;text-align:center"><b>Who can Donate Blood?</b></p></a>

<a href="tips.php">
<p style="font-size:20px ;font-family:arial;text-align:center"><b>Tips for Blood Donation</b></p></a>
</div>

<div class="cont2">
<p style="font-family:cursive;font-size:45px;color:red"><b>BE A BLOOD DONOR, BE A HERO - A</b></p> 
<p style="font-family:cursive;font-size:45px;text-align:center;color:red"><b>REAL ONE</b></p>
</div>
<br>
<div class="cont3">
<p style="font-family:segoe print;font-size:35px;color:green;">Message from the founder</p>
<ul class="a">
<li>As we all know, blood is an important fluid that flows in our body. It is so important that 
if we lose excess of it from our body, we can die. But we are very lucky to have a blood transfusion process that can help save the lives of the people.
The lives can only be saved if we have enough blood for the transfusion. Hence, blood donation is the only medium that can help us. 
People around the world donate blood which helps treat people with ill- health.</li>

<li>There are various benefits of donating blood. It not only helps the receiver but also enhances the health of the donor. It revitalizes the body for better health.
One blood donation can benefit many people. A single donation can help at least three people in need. It also makes the work of blood banks easier.
Blood donation also helps us to know our bodies. Before blood donation, our bodies undergo various health check-ups such as iodine levels, 
blood glucose levels, blood pressure, etc. This way we get a complete diagnosis of the body.</li>

<li>Blood donation is so important that the world celebrates Blood donor day on 14th June every year. This day is celebrated to raise 
awareness about life-saving procedures and to promote blood donation.</li><br>

<p style="font-family:segoe print;font-size:20px;line-height:1.6">We would request you all to donate blood more often. It can save many lives.
 Blood donation is our responsibility towards society.</p>
</div>
</div>
<br>




<div class="footer">
<div class="footerbox">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
<p style="font-family:arial;font-size:14px;colour:black;text-align:center;">&copy LeoBloodBank.All rights are reserved</p>
</div>

        

</body>
</html>