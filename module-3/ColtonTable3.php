<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 3.2, October 9, 2026
-->

 <head>
  <title>Table Program</title>
   <meta charset='utf-8'>
   <?php require('ColtonTable3_Fun.php'); ?>
 </head>
    <style>
        h1, table {
            text-align: center;
        }
        body {
            place-items: center;
        }

       
 </style>
    <body>
        <table border="1" width="300">
        <h1>Random Number Table</h1>
        <thead>
            <tr>
                <td colspan="10">
                    <h3>Random Number Range</h3>
                </td>
                </tr>
                </thead>

                <tbody>
                    <?php
                    '<br> <br>';

                    $num1 = 0;
                    $num2 = 0;
                    $final_Num = 0;

                        $rand = randNum($num1, $num2, $final_Num);

                        for ($x = 0; $x < 1; ++$x) {
                            echo("<tr>");
                         for($y = 0; $y < 1; ++$y) {
                            
                            echo("<td>");
                            echo($rand);
                            echo('</td>');
                        }
                        echo('</tr>');
                        }
                    ?>
                </tbody>
            </table>

    </body>
</html>