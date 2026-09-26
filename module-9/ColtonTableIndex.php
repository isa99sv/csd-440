<html lang='en'>
<!--
    Colton Stone, Assignment 9.2, September 24, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Index Page</title>
   <meta charset='utf-8'>
 </head>
    <style>
         body {
            color: #821C05;
            font-size: 45px;
            font-weight: bold;
        }

        a:link, a:visited {
            color: #3333cc;
            cursor: auto;
            font-size: 30px;
            text-decoration: underline;
        }

        a:hover, a:active {
            color: #ff00ff;
            cursor: auto;
            font-size: 40px;
            text-decoration: none;
        }
    </style>
    <body>
        <center>

    
<?php
$lineBreak = '<br> <br> <br>';
?>

Baseball Database Index Pages:

<br> <br>

<a href="ColtonTable.php">Database Connection Page</a>

<?php echo $lineBreak; ?>


<a href="ColtonDropTable.php">Drop Tables Page</a>

<?php echo $lineBreak; ?>


<a href="ColtonTableRecordForm.php"> Forms Insertion Page</a>

<?php echo $lineBreak; ?>


<a href="ColtonPopulateTable.php">Populate Tables Page</a>

<?php echo $lineBreak; ?>


<a href="ColtonTableQuerySearch.php">Query Search Page</a>

<?php echo $lineBreak; ?>


<a href="ColtonQueryTable.php">Query Tables Page</a>

<?php echo $lineBreak; ?>


        </center>
    </body>
</html>