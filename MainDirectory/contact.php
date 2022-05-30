<!DOCTYPE html>
<html>
<head>
    <title>Covid Support(contact)</title>
    <?php include 'links/links.php'; ?>
    <?php include 'links/userinfo.php'; ?>
    
</head>

<body>
 
<?php include 'links/navbar.php';?>
<!--Image-->

<img src="images/ContactUs.jpg" class="imgn border" alt="image" width="1100" height="300">

<!--Heading-->
<div class="py-3" >
     <h3 class="text-center font-weight-bold" style="font-family: 'Amatic SC', cursive;">Contact US: Here we are!!</h3>
</div>

<!--Contact form-->

<div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
         <form action="" method="POST">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" name="Name"
                placeholder="Type your name here" autocomplete="off" required>
            </div>
         
            <div class="form-group">
                <label> Email address</label>
                <input type="email" class="form-control" name="email"
                 placeholder="name@example.com" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Mobile number</label>
                <input type="number" class="form-control" name="mobile"
                 placeholder="Type your contact number" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Why do you want to contact us? Select your choice</label><br>

                <div class="custom-control custom-checkbox custom-control-inline
                text-capitalise">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                  name="choice[]" value="PFA">
                  <label class="custom-control-label" for="customcheckbox1">
                    Mental Support(PFA)</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline
                text-capitalise">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                  name="choice[]" value="financial support">
                  <label class="custom-control-label" for="customcheckbox2">
                    Financial Support</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline
                text-capitalise">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                  name="choice[]" value="Donate">
                  <label class="custom-control-label" for="customcheckbox3">
                    Donate</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline
                text-capitalise">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                  name="choice[]" value="Help">
                  <label class="custom-control-label" for="customcheckbox4">
                   Need help</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline
                text-capitalise">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox5"
                  name="choice[]" value="Comment">
                  <label class="custom-control-label" for="customcheckbox5">
                   Other comments</label>
                </div>
            </div>

            <div class="form-group">
                <label >Your Words</label>
                <textarea class="form-control" name="message"
                placeholder="Type your message here" rows="5"></textarea>
            </div>

            <button  type="submit" name="submit" class="btn btn-dark mb-5">Submit</button>

         </form>

        

     </div>
    </div>
</div>



<figure class="text-center container border">
      <img src="images/Covidwarriors.png" alt="Thank you" width="100%" height="300" class="image-responsive">
  <figcaption>
        <h3>The Real Super Heros</h3>
        <p>Thank you Covid Warriors!!</p>
  </figcaption>
</figure>


<!--Jumbotron-->
<div class="jumbotron jumbotron-fluid mb-0">
  <div class="container" width="100%">
    <h1>Do not hesitate to Contact Us</h1>      
    <p>We are here to help you and deliver your help.</p>
  </div>
</div>

<!--Footer-->

<footer >
  <div class="p-3 bg-dark text-white text-center">
  <p>COVID SUPPORT</p>
  <p>We are here to help you!!</p>
</div>
</footer>

</body>


<?php

if(isset($_POST['submit']))
{
   $Name= $_POST['Name'];
   $email= $_POST['email'];
   $mobile= $_POST['mobile'];
   $choice= $_POST['choice'];
   $message= $_POST['message'];

   $chk="";

   foreach ($choice as $chk1) {
       $chk .=$chk1.",";
   }

   $insertquery = "insert into covidsupportweb (Name,email,mobile,choice,message)
    values('$Name','$email','$mobile','$chk','$message')";

    $query = mysqli_query($con, $insertquery);

          if($con)
      {
          ?>
          <script>
              alert("Thank you for contacting us!!");
          </script>
          <?php
      }
      else
      {
          ?>
          <script>
              alert("Sorry! Some problem in inserting your data please try again");
          </script>
          <?php
      }

}


?>
