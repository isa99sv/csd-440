<html lang='en'>
<!--
    Colton Stone, Assignment 9.2, September 24, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Record Insertion</title>
   <meta charset='utf-8'>
 </head>
    <style>
         body {
            color: #821C05;
            font-size: 45px;
            font-weight: bold;
        }

        button {
            font-size: 35px;
            font-weight: bold;
            padding: 10px 20px;
        }

         form {
            color: #3333cc;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <body>
        <center>

        

<?php $breakline = '<br> <br> <br>';?>

Record Insertion Page:

<?php echo '<br> <br>'; ?>


<form action="ColtonPopulateTable.php" method="POST">
    <label>Team Name:</label>
    <input type="text" id="insert_team" name="insert_team" required>
    <?php echo $breakline; ?>
    
    <label>Wins:</label>
    <input type="number" id="insert_wins" name="insert_wins" required>
    <?php echo $breakline; ?>


    <label>Losses:</label>
    <input type="number" id="insert_losses" name="insert_losses" required>
    <?php echo $breakline; ?>

    
    <label>Win/Loss Percentage:</label>
    <input type="number" id="insert_percent" name="insert_percent" step="0.01" required>
    <?php echo $breakline; ?>


    <label>Seasons:</label>
    <input type="number" id="insert_seasons" name="insert_seasons" required>
    <?php echo $breakline; ?>

    <label>Championships:</label>
    <input type="number" id="insert_champ" name="insert_champ" required>
    <?php echo $breakline; ?>


    <label>Year of Team Creation:</label>
    <input type="number" id="insert_year" name="insert_year" min="1845" max="2000"
    minlength="4" maxlength="4" required>
    <?php echo $breakline; ?>

    <button type="submit" name="submit" value="submit">Submit Data</button>
    <button type="reset" name='reset' value="reset">Reset Page</button>

</form>
   
</center>
    </body>
</html>