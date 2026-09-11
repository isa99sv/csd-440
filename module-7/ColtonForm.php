<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 7.2, September 11, 2026
-->

 <head>
  <title>Form Program</title>
   <meta charset='utf-8'>
 </head>
    <style>
       body {
            background-color: black;
            font-size: 35px;
            font-weight: bold;
        }
        
    </style>
    <body>
        <center>

    
    <?php
    

        print("<br /> The user's first name is ");
        $first_Name = $_POST["first_Name"];
         print("$first_Name");


        print(" and their last name is ");
        $last_Name = $_POST["last_Name"];
         print("$last_Name.<br> <br> <br>");


        print("They are a ");
        $age = $_POST["age"];
         print("$age aged ");


        $sex = $_POST["sex"];
         print(" $sex");


        print(" with a phone number of ");
        $phone = $_POST["phone"];
         print("($phone).<br> <br> <br>");


        $fav_Color = $_POST["fav_Color"];

    ?>

    <body style="color: <?php echo $fav_Color; ?>;">
    
         
    
    <?php
        
        print("And their birthday is ");
        $date = $_POST["date"];
         print("$date.");      

    ?>
   

    </center>
    </body>
</html>