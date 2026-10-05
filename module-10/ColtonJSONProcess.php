<html lang='en'>
<!--
    Colton Stone, Assignment 10.2, October 3, 2026
-->

 <head> 
    <center>
  <title>JSON Form Page</title>
   <meta charset='utf-8'>
   
   <h1>JSON Form:</h1>
 </head>
    <style>

        h1 {
            color: #2F4F4F;
            font-size: 45px;
            font-weight: bold;
            }

         body {
            color: #000080;
            font-size: 30px;
            font-weight: bold;
        }

        button {
            font-size: 25px;
            font-weight: bold;
            padding: 10px 20px;
        }

    </style>
    <body>
       

    

<?php $breakline = '<br> <br> <br>';?>



<?php echo '<br>';

$employee_array = array_merge(["First Name: " . $_POST['data_input'][0] . $breakline],
[" Last Name: " . $_POST['data_input'][1] . $breakline],
[" Age: " . $_POST['data_input'][2] . $breakline], 
[" Email Address: " . $_POST['data_input'][3] . $breakline],
 [" Home Address: " . $_POST['data_input'][4] . $breakline],
[" ID Number: " . $_POST['data_input'][5] . $breakline], 
[" Phone Number: " . $_POST['data_input'][6] . $breakline], 
[" Social Security Number: " . $_POST['data_input'][7]]
);


echo json_encode($employee_array);

echo $breakline; ?>


<form method="POST" action="ColtonJSONForm.php">
<button type="submit" name='reset' value="reset">Return to Original Form</button>

   
</body> 
</center>
</html>