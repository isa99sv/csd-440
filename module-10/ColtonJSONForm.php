<html lang='en'>
<!--
    Colton Stone, Assignment 10.2, October 3, 2026
-->

 <head>
  <title>JSON Form Page</title>
   <meta charset='utf-8'>
 </head>
    <style>
         body {
            color: #2F4F4F;
            font-size: 45px;
            font-weight: bold;
        }

        button {
            font-size: 25px;
            font-weight: bold;
            padding: 10px 20px;
        }

         form {
            color: #000080;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <body>
        <center>

    

<?php $breakline = '<br> <br> <br>';?>

Employee Form:

<?php echo '<br> <br>'; ?>


<form method="POST" action="ColtonJSONProcess.php">
    <label>First Name:</label>
    <input type="text" id="pre_name" name="data_input[]" required>
    <?php echo $breakline; ?>
    
    <label>Last Name:</label>
    <input type="text" id="sur_name" name="data_input[]" required>
    <?php echo $breakline; ?>

    <label>Age:</label>
    <input type="number" id="age" name="data_input[]" min="21" max="65" minlength="2" maxlength="2" required>
    <?php echo $breakline; ?>

    <label>Email Address:</label>
    <input type="email" id="email" name="data_input[]" required>
    <?php echo $breakline; ?>  
    
    <label>Home Address:</label>
    <input type="text" id="address" name="data_input[]" required>
    <?php echo $breakline; ?>

    <label>ID Number:</label>
    <input type="number" id="ID" name="data_input[]" minlength="6" maxlength="6" required>
    <?php echo $breakline; ?>

    <label>Phone Number:</label>
    <input type="number" id="phone" name="data_input[]" minlength="10" maxlength="10" required>
    <?php echo $breakline; ?>

    <label>Social Security Number:</label>
    <input type="number" id="ssn" name="data_input[]" minlength="9" maxlength="9" required>
    <?php echo $breakline; ?>

    <button type="submit" name="submit" value="submit">Submit Data</button>
    <button type="reset" name='reset' value="reset">Reset Page</button>

</form>

    </center>
    </body>
</html>