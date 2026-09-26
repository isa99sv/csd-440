<html lang='en'>
<!--
    Colton Stone, Assignment 9.2, September 24, 2026

    Information Source:
        https://www.baseball-reference.com/
-->

 <head>
  <title>Search Page</title>
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

        input {
            font-size: 35px;
            font-weight: bold;
        }
    </style>
    <body>
        <center>

Database Query Search:

<?php echo '<br> <br>'; ?>

<form action="ColtonPopulateTable.php" method="POST">
    <input type="text" name="query" placeholder="Search for data record.." required>
    <button type="submit">Search</button>
    </form>
   

    </center>
    </body>
</html>