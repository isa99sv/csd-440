<!DOCTYPE html>
<html lang='en'>
 <!--
    Colton Stone, Assignment 8.2, September 19, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Query Tables</title>
   <meta charset='utf-8'>
 </head>
    <style>
        b {
            color: #003DF5;
            font-size: 30px;
            font-weight: bold;
        }

         p {
            font-size: 20px;
            font-weight: bold;
        }

        table { 
            background-color: #323232;
            table-layout: auto;
            width: 100%;
        }

        tr, td {
           width: auto;
        }
    </style>
    <body>
        <center>

    
<?php

  $conn = new mysqli("localhost", "student1", "pass", "baseball_01");
  $lineBreak = '<br> <br> <br>';

  
    try {
        
        if ($conn->connect_error) {

            die("ERROR: Unable to connect: " . $conn->connect_error);
        } 

    }

    catch (Exception $e) {
        echo "Error connecting to the database: " . $conn->connect_error . $lineBreak;
    }

 
    $sql="SELECT * FROM BaseballTeam_Records";
    

  $rs = mysqli_query($conn, $sql);

  if (!$rs){

    exit("Error in SQL");
  }
?>

  <table border='1'>
  <tr align='center';>
    <td><b>Team Name</b></td>
    <td><b>Victories</b></td>
    <td><b>Losses</b></td>
    <td><b>Win-Loss %</b></td>
    <td><b>Seasons Played</b></td>
    <td><b>World Championships</b></td>
    <td><b>Year of Team Creation</b></td>
</tr>


<?php
    try {
        if (mysqli_num_rows($rs) > 0) {

    while($row = mysqli_fetch_assoc($rs)){
?>
      <tr align='center' style='background-color:#F01818;'>
        <td> <p><strong><?php echo($row["TeamName"]); ?> </strong></p></td>
        <td> <p><?php echo($row["Wins"]); ?> </p></td>
        <td> <p><?php echo($row["Losses"]); ?> </p></td>
        <td> <p><?php echo($row["WL_Percentage"]); ?> </p></td>
        <td> <p><?php echo($row["Seasons"]); ?> </p></td>
        <td> <p><?php echo($row["WorldChampionships"])?></p></td>
        <td> <p><?php echo($row["OriginYear"]); ?> </p></td>
      </tr>

<?php
      }
    }
    }
    catch (Exception $e) {
        echo "Error reading from the database: " . $conn->error . $lineBreak;
    }

  $conn->close();

?>

  </table>
   

    </center>
    </body>
</html>