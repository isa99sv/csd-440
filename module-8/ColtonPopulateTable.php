<!DOCTYPE html>
<html lang='en'>
<!--
    Colton Stone, Assignment 8.2, September 19, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Table Creation</title>
   <meta charset='utf-8'>
 </head>
    <style>
         body {
            color: #821C05;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <body>
        <center>

    
<?php
  $conn = new mysqli('localhost', 'student1', 'pass', 'baseball_01');
  $lineBreak = '<br> <br> <br>';
  

try {
        if ($conn->connect_error) {

            die("ERROR: Unable to connect: " . $conn->connect_error);
        } 

    }
    catch (Exception $e) {
        echo "Error connecting to the database: " . $conn->connect_error . $lineBreak;
    }


  echo 'Baseball All-Time Stats' . $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Atlanta_Braves', 11280, 11099, .504, 151, 4, 1876)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Cincinnati_Reds', 11089, 10927, .504, 145, 5, 1882)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Detroit_Tigers', 9836, 9723, .503, 126, 4, 1901)");  
  echo $lineBreak;
  
  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Houston_Astros', 5173, 5117, .503, 65, 2, 1962)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Miami_Marlins', 2458, 2870, .461, 34, 2, 1993)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Minnesota_Twins', 9401, 10129, .481, 126, 3, 1901)");  
  echo $lineBreak;
  
    mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
    VALUES('Pittsburgh_Pirates', 10987, 10987, .500, 145, 5, 1882)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('SanFranciso_Giants', 11686, 10190, .534, 144, 8, 1883)");  
  echo $lineBreak;

    mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
    VALUES('Texas_Rangers', 4976, 5460, .477, 66, 1, 1961)");  
  echo $lineBreak;

  mysqli_query($conn, "INSERT INTO BaseballTeam_Records(TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
  VALUES('Toronto_BlueJays', 3931, 3934, .500, 50, 2, 1977)");  
  echo $lineBreak;
  
  
  $conn->close();

?>    

        </center>
    </body>
</html>