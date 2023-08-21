<?php
 
if(isset($_POST['submit'])) //check to submit
{

    $emai=$_POST['email'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $linkedin=$_POST['Linkedin'];
    $facebook=$_POST['Facebook'];
    $instagram=$_POST['Instagram'];
     $con=mysqli_connect('localhost','root'); //connection to database
    mysqli_select_db($con,'db1');
   $q="INSERT INTO contact_form(email,password,firstname,lastname,phone,Linkedin,Facebook,Instagram) VALUES('$email','$password','$firstname', '$lastname','$phone', '$linkedin','$facebook', '$instagram')";
    $t=mysqli_query($con,$q);
    if($t)
    {

       $test= "Data sent successfully";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script type="text/js" >

    </script>

</head>
<body>
<div class="container">
    

   
    <div class="step"> 

    <div class="progress"></div>
    <div class="step1"><small>step 1</small></div>
    <div class="step2"><small>step 2</small></div>
    <div class="step3"><small>step 3</small></div>
        
    </div>
    
    <form id="form1" Method="post"> 
        <h3 style="text-align: center; margin-top: 40px; margin-left: 50px;">SIGN UP</h3>
        <input type="text" placeholder=" Email Id" name="mail">
        <input type="password" placeholder=" password " name="password">
        <input type="password" placeholder="confirm password " name="confirm password">
        <div class="btn">
            <button type="button" id="next1">Next</button>
        </div>
    </form>
    
    <form id="form2" Method="post">
        <h3 style="text-align: center; margin-top: 50px; margin-left: 50px;">PERSONAL DETAILS</h3>
        <input type="text" placeholder=" first name " name="firstname">
        <input type="text" placeholder=" last name " name="lastname">
        <input type="text" placeholder="phone number " name="phone">
        <div class="btn">
            <button type="button" id="back1">Back</button>
            <button type="button" class="nxt" id="next2">Next</button>
        </div>
    </form>

    <form id="form3" Method="post">
        <h3 style="text-align: center; margin-top: 50px; margin-left: 50px;">SOCIAL LINKS</h3>
        <input type="text" placeholder=" LinedIn " name="Linedin">
        <input type="text" placeholder="Github" name="Github">
        <input type="text" placeholder="Instagram" name="Instagram">
        <div class="btn">
            <button type="button" id="back2">Back</button>
            <button type="button" class="submit">Done</button>
        </div>
    </form>


    
</div>

<script type="text/javascript" >
    
    var form1 = document.getElementById('form1');
    var form2 = document.getElementById('form2');
    var form3 = document.getElementById('form3');

    var next1 = document.getElementById('next1');
    var next2 = document.getElementById('next2');

    var back1 = document.getElementById('back1');
    var back2 = document.getElementById('back2');

    var progress = document.getElementById('progress');


    next1.onclick = function()
    {
        form1.style.left="-600px";
        form2.style.left="-100px";
        progress.style.width="240px";
     
    }
    back1.onclick = function()
    {
        form1.style.left="100px";
        form2.style.left="600px";
        progress.style.width="120px";
     
    }
    next2.onclick = function()
    {
        form2.style.left="-600px";
        form3.style.left="-150px";
        progress.style.width="360px";
     
    }
    back2.onclick = function()
    {
        form2.style.left="150px";
        form3.style.left="600px";
        progress.style.width="240px";
     
    }
</script>
</body>


</html>