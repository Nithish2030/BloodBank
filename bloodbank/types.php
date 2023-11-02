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
		<div class="contain">
<style>

.body{
background-color:white;
}

.contain{
width:90%;
height:2100px;
background-color:white;
}

ul.b{
list-style-type: square;
font-family:arial;
font-size:20px;
line-height:1.6;

}
.contain a{
fontsize:50px;
float:center;
border:2px solid green;
margin:2px;
width:23%;
height:160px;
text-align:center;
text-decoration:none;
background-color:white;
color:black;
display:inline-block;
}
.contain a:hover{
background-color:green;
color:black;
}

</style>
<body class="body">
<p style="font-family:arial;color:#ec1c24; font-size:50px"><b>Blood types and transfusion</b></h1>
<p style="font-family:arial;color:green;font-size:30px">What is blood transfusion?</p>
<p style="font-family:arial;font-size:20px;line-height:1.6;">A blood transfusion is a routine medical procedure in which donated blood is provided to you through a narrow tube placed within a vein 
in your arm.<br> This potentially life saving procedure can help replace blood lost due to surgery or injury. A blood transfusion also can help if an illness prevents your body
from making blood or some of your blood's components correctly.</p>

<p style="font-family:arial;color:green;font-size:30px">Why transfusion?</p>
<p style="font-family:arial; font-size:20px;line-height:1.6;">People receive blood transfusions for many reasons such as surgery,injury and for diseases like</p>
<ul class="b">
<li><b>Anemia</b></li>
<li><b>Certain cancers</b></li>
<li><b>Hemophilia</b></li>
<li><b>Sickle cell disease</b></li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">What are the components of blood?</p>
<ul class="b">
<li><b>Red cells:</b>They carry oxygen and help remove the waste products</li>
<li><b>White cells:</b>They help your body fight infections</li>
<li><b>Plasma:</b>It is the liquid part of your blood</li>
<li><b>Platelets:</b>They help your blood clot properly</li>
</ul>
<p style="font-family:arial; font-size:20px;line-height:1.6;">A transfusion provides the part or parts of blood you need, with the red blood cells being the most commonly transfused.
You can also receive whole blood,which contains all the parts,but whole blood transfusions aren't common.The two most important blood group systems for transfusion are ABO and Rh.</p>

<p style="font-family:arial;color:green;font-size:30px">How are the blood types determined?</p>
<p style="font-family:arial;font-size:20px;line-height:1.6;">Ther are eight most common blood types namely the A+, A-, B+, B-, O+, O-, AB+, AB-.The ABO group of your blood is determined by the presence 
of antigens and antibodies in your blood.<br>Antigens are a combination of sugars and proteins that coat the surface of a red blood cell.You also have antibodies in the clear part 
of blood called plasma.Antibodies are important in transfusion because they are the body’s natural defence system. They recognise any ‘foreign’ antigens and tell your immune system 
to destroy them.<br>The (+) and (-) after the ABO group is determined by the presence or absence of the Rh factor.The D antigen in the Rh system determines whether you have
positive or negative blood.If you have the Rh D antigen, your blood type is positive. If you lack the Rh D antigen, your blood type is negative.<br>

<p style="font-family:arial;color:green; font-size:30px">Know about your blood type!</p>
<a href="a+.html">
<img src="A+.png" alt="error" width="auto" height="150px"></a>
<a href="a-.html">
<img src="A-.png" width="auto" height="150px"></a>
<a href="b+.html">
<img src="B+.png" width="auto" height="150px"></a>
<a href="b-.html">
<img src="B-.png" width="auto" height="150px"></a><br>
<a href="o+.html">
<img src="O+.png" width="auto" height="150px"></a>
<a href="o-.html">
<img src="O-.png" width="auto" height="150px"></a>
<a href="ab+.html">
<img src="AB+.png" width="auto" height="150px"></a>
<a href="ab-.html">
<img src="AB-.png" width="auto" height="150px"></a>
<br>
<br>
<p style="font-family:arial;color:green;font-size:30px">What are Rare Blood Types?</p>
<p style="font-family:arial;font-size:20px;line-height:1.6;">The surface of our red blood cells contains antigens (like a protein) that determine a person’s specific blood type.
Doctors and scientists have discovered more than 600 of these antigens. Their presence or absence creates our individual blood types.
Currently, there are 33 recognized blood group systems. Each group has its own unique combination of antigens. <br>
Your blood type is considered rare if it is missing a common antigen or combination of antigens that most people have.
Someone with a rare blood type lacks antigens that 99% of people are positive for. Those with an extremely rare blood type lack antigens that 99.9% of people are positive for.
For example, a person’s blood type is considered rare if only 1 other person in 1,000 shares their same special combination of antigens. 
To be considered extremely rare, those numbers jump to 1 in 10,000.</p>

<p style="font-family:arial;color:green;font-size:30px">How is my Blood Type Determined?</p>
<p style="font-family:arial;font-size:20px;line-height:1.6;">It’s inherited. Like eye color, blood type is passed genetically from your parents. 
Whether your blood group is type A, B, AB or O is based on the blood types of your mother and father.</p>
</body>
</html>

