<?php
   include('session.php');

?>
<html>

   <head>
      <title>Profile </title>
   </head>

   <body>


      <html>
      <head>
        <link rel="stylesheet" type="text/css" href="style.css">
      </head>

      <body link="#C0C0C0" vlink="#808080" alink="#FF0000">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

      <script>
      $(document).ready(function(){
          $('.wrapper').fadeIn();
      });

      $(document).ready(function(){
          $(".back").click(function(){
              $(".menu").hide();
              $('html,body').animate({
                  scrollTop: $(".plate").offset().top},
                  'slow');

          });
          $("#menuimg").click(function(){
              $(".menu").show();
          });
          $("#menuimg").click(function() {
          $('html,body').animate({
              scrollTop: $(".menu").offset().top},
              'slow');
      });
      });
      </script>

       <div class="wrapper">
         <div style="text-align:center" class="nav">
      <p class="text4">
             <a href="#about">About Us</a>
           &nbsp; / &nbsp;
             <a href="#about"><?php echo $login_session; ?></a>
              &nbsp; / &nbsp;
              <a href = "logout.php">Sign Out</a>

      </p>

         </div>
        <div class="plate">
        <p class="script"><span>Your Information</span></p>
        <?php
        $sql = "SELECT UserEmail, UserFirstName, UserLastName, UserCity, UserZip FROM users WHERE userID='$id'";
        $result = $db->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) { ?>

          <table border="0" cellpadding="3" width="960px">
            <tr>
            <td><p class="text4">Email: <?php echo $row["UserEmail"]; ?></p></td>
            </tr>

            <tr>
              <td><p class="text4">First Name: </p> <?php echo $row["UserFirstName"]; ?></td>
            </tr>

            <tr>
              <td><p class="text4">Last Name: <?php echo $row["UserLastName"]; ?></p></td>
            </tr>

            <tr>
              <td><p class="text4">City: <?php echo $row["UserCity"]; ?></p></td>
            </tr>

            <tr>
              <td><p class="text4">Zipcode <?php echo $row["UserZip"]; ?></p></td>
            </tr>

          </table>
          <?php

      }
  }

         ?>
         <form action="editProfile.php">
<input type = "submit" value = " Edit "/><br />
</form>

        <br><br><br>





   </body>

</html>
