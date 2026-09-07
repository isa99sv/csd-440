<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 5.2, September 2, 2026
-->

 <head>
  <title>Customers Program</title>
   <meta charset='utf-8'>
 </head>
    <style>
       body {
            color: #01013f;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <body>

    <?php

$break_Line = "<br> <br>";
    
$customers = array(
    "David" => array('forename' => 'David', 'surname' => 'Island', 'age' => 30, 'phone_number' => '326-444-5890'),
    "Eli" => array('forename' => 'Eli', 'surname' => 'Island', 'age' => 30, 'phone_number' => '505-614-0151'),
    "George" => array('forename' => 'George', 'surname' => 'Sears', 'age' => 30, 'phone_number' => '888-242-3215'),
    "Jack" => array('forename' => 'Jack', 'surname' => 'Small', 'age' => 25, 'phone_number' => '734-664-3321'),
    "John" => array('forename' => 'John', 'surname' => 'Small', 'age' => 55, 'phone_number' => '999-520-9033'),
    "Meryl" => array('forename' => 'Meryl', 'surname' => 'Silverburgh', 'age' => 25, 'phone_number' => '980-316-5711'),
    "Roy" => array('forename' => 'Roy', 'surname' => 'Campbell', 'age' => 20, 'phone_number' => '000-283-4391'),
    "Frank" => array('forename' => 'Frank', 'surname' => 'Hunter', 'age' => 50, 'phone_number' => '111-453-2333'),
     "Naomi" => array('forename' => 'Naomi', 'surname' => 'Hunter', 'age' => 30, 'phone_number' => '472-214-8112'),
    "Hideo" => array('forename' => 'Hideo', 'surname' => 'Kojima', 'age' => 45, 'phone_number' => '201-639-1630'));
    
    
     echo "<h2>Customer First Names</h2>";
    foreach ($customers as $customer => $cust_Details) {
       echo $customer;
        echo '<br>';
    }


       echo "<h2>Customer Surnames </h2>";
    foreach ($customers as $customer => $cust_Details) {
    echo "<td>" . $customer. ": ". $cust_Details['surname'] . "</td>";
        echo '<br>';
    }


        echo "<h2>Customer Ages</h2>";
    foreach ($customers as $customer => $cust_Details) {
    echo "<td>" . $customer. ": ". $cust_Details['age'] . "</td>";
        echo '<br>';
    }


        echo "<h2>Customer Contact Number</h2>";
    foreach ($customers as $customer => $cust_Details) {
    echo "<td>" . $customer. ": (". $cust_Details['phone_number'] . ")". "</td>";
        echo '<br>';
    }

?>
   

    </body>
</html>