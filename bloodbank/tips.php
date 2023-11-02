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

.contain{
width:90%;
height:800px;
background-color:white;
}

ul.b{
list-style-type: square;
font-family:arial;
font-size:20px;
line-height:1.6;
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

</style>
</head>


<div class="contain">
<p style="font-family:arial;color:#ec1c24; font-size:50px"><b>Tips on Blood Donation</b></p>

<p style="font-family:arial;color:green;font-size:30px">Before Your Donation</p>
<ul class="b">
<li>Make an Appointment-
Select a donation type and find a convenient time that works best for you.</li>
<li>Get the Dish on Nutrition
Have iron-rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals or raisins.</li>
<li>Be Well Rested and Hydrate
Get a good night's sleep the night before your donation, eat healthy foods and drink extra liquids.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px"> On the Day of Your Donation</p>
<ul class= "b">
<li>Photo ID-
Please bring your donor card, driver's license or two other forms of identification.</li>
<li>Medication List
We'll need to know about all prescription and over-the-counter medications you're taking.</li>
<li>Eat a healthy meal, avoiding fatty foods like hamburgers, fries or ice cream.</li>
<li>Wear a shirt with sleeves that you can roll up above your elbows.</li>
<li>Drink an extra 16 oz. of water (or other nonalcoholic drink) before your appointment.</li>
</ul>

<p style="font-family:arial;color:green;font-size:30px">After Your Donation</p>
<ul class="b">
<li>Enjoy a Snack-
Relax for a few minutes in our refreshment & recovery area — have some cookies or other snacks — you’ve earned it!</li>
<li>Tell Others About Your Good Deed
The gratification of giving blood is a feeling you'll want to share.</li>
<li>Drink Extra Liquids
Drink an extra four (8 oz.) glasses of liquids and avoid alcohol over the next 24 hours.</li>
</ul>
</div>


</div>

</body>
</html>
