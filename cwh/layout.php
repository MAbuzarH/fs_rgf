<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
      <?php include "index.php"; ?> 
    <title>Wellcome to Trevel form</title>
  </head>
  <body>
    <div class="container">
      <h3>Wellcome to my trevel form</h3>
      <p>Enetr your detailes to submit this form to confirm your trip</p>
     
      <?php 
      if($insert){
         echo "Thanks for submisition";
      }
      else{
        echo $insert;
      }
      
      ?>
      <form  method="post">
        <input type="name" name="name" id="name" placeholder="Enter your name">
        <input type="age" name="age" id="age" placeholder="age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
        <button class="btn">Submit</button>
        <!-- <button class="btn">Reset</button> -->
      </form>
      <!-- <?php ?> -->
      <!-- INSERT INTO `trip` (`son`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'asjs', '12', 'm', 'ssja@djdjdo', '99999999', 'sjsdndjd', current_timestamp()); -->
    </div>
  </body>
</html>
