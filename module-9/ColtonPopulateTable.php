<!DOCTYPE html>
<html lang='en'>
<!--
    Colton Stone, Assignment 9.2, September 24, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Populate Tables</title>
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

    
  
  
  /*-----------------------------------------
  
  ------Query Search Section------*/

  if (isset($_GET['query']) && trim($_GET['query']) !== '') {

      $search_field = trim($_GET['query']);
      $search_match = '%' . $search_field . '%';
      $db = 'SELECT TeamName, Wins, Losses, WL_Percentage, Seasons, 
      WorldChampionships, OriginYear FROM BaseballTeam_Records WHERE TeamName LIKE ? OR Wins LIKE ?';
      $stmt = $conn->prepare($db);

      if ($stmt) {
      $stmt->bind_param('ss',$search_field,$search_match);
      $stmt->execute();

      $rs = $stmt->get_result();

      echo "Results Displayed for: " . htmlspecialchars($search_field);

      if ($rs->num_rows>0) {
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
        echo "<tr>
        <th>TeamName</th>
        </tr>";

       while ($row = $rs->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['TeamName']) . "</td>";
          echo "</tr>";
       }

        echo "</table>";
      }
      else {
        echo "<p>No results found.</p>";
      }

      $stmt->close();
    } 
    
    else {
        echo "<p>Error with database query.</p>";
      }

  
    } 
    
    else {
        echo "<p>Please enter input.";
      }
  

  $conn->close();
  ?>

  


/*-----------------------------------------
  
  ------Adding New Record Section------*/

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


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert_team = trim($_POST['insert_team']);
    $insert_wins = trim($_POST['insert_wins']);
    $insert_losses = trim($_POST['insert_losses']);
    $insert_percent = trim($_POST['insert_percent']);
    $insert_seasons = trim($_POST['insert_seasons']);
    $insert_champ = trim($_POST['insert_champ']);
    $insert_year = trim($_POST['insert_year']);


    if (empty($insert_team) || empty($insert_wins) || empty($insert_losses) || 
    empty($insert_percent) || empty($insert_seasons) || empty($insert_champ) || empty($insert_year)) 
    {
      die ("All fields are required, please fill them in." . $lineBreak);
    }

    try {
      $db =  mysqli_query($conn, "INSERT INTO BaseballTeam_Records (TeamName, Wins, Losses, WL_Percentage, Seasons, WorldChampionships, OriginYear)
      VALUES (?, ?, ?, ?, ?, ?, ?)");
      $stmt = $conn->prepare($db);
      if($stmt === false) {
          throw new Exception("Failed to prepare statement: " . $conn->error);
      }

      $stmt->bind_param($insert_team, $insert_wins, $insert_losses, 
      $insert_percent, $insert_seasons, $insert_champ, $insert_year);

      if ($stmt->execute()) {
        
          echo "New record created successfully for team: " . htmlspecialchars($insert_team) . $lineBreak;
      }
      else {
        echo "Record insertion failed: " . htmlspecialchars($insert_team) . " - Error: " . $stmt->error . $lineBreak;
      }

    $stmt->close();
    $conn->close();

    } 
    
    catch (Exception $e) 
    {
        echo "Database Error: " . $e->getMessage();
      }
  } 

else {
    exit;
}

?>    
      </center>
    </body>
</html>