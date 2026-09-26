<html lang='en'>
<!--
    Colton Stone, Assignment 9.2, September 24, 2026

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


    echo 'Connected to the database.' . $lineBreak;

    
    if ($conn){

    $sql='DROP TABLE BaseballTeam_Records';
    }

    

    try {
        if ($conn->query($sql) === TRUE) {
            echo "BaseballTeam_Records was dropped." . $lineBreak;
            } 
        
    
        else {
        echo "Error dropping table: " . $conn->error . $lineBreak;
        }

    }

       catch (Exception $e) {
        echo "Error dropping table: " . $conn->error . $lineBreak;
    }

    
if ($conn){

        $sql="CREATE TABLE BaseballTeam_Records(TeamName CHAR(40) NOT NULL PRIMARY KEY, Wins INT NOT NULL, Losses INT NOT NULL, 
        WL_Percentage DECIMAL(5,3)  NOT NULL, Seasons INT NOT NULL, WorldChampionships INT NOT NULL, OriginYear INT NOT NULL)";
    }

    try {
        if ($conn->query($sql) === TRUE) {

        echo "BaseballTeam_Records was successfully created." . $lineBreak;
    } 
    
    else {

        echo "Error creating BaseballTeam_Records table: " . $conn->error . $lineBreak;
    }

    }

       catch (Exception $e) {
        echo "Error dropping table: " . $conn->error . $lineBreak;
    }

    $conn->close();

?>
   

    </center>
    </body>
</html>