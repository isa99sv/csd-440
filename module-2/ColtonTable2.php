<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 2.2, August 19, 2026
-->

 <head>
  <title>Table Program</title>
   <meta charset='utf-8'>
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
        <table border="1" width="500">
        <h1>Random Number Table</h1>
        <thead>
            <tr>
                <td colspan="10">
                    <h3>Range 5 - 100</h3>
                </td>
                </tr>
                </thead>

                <tbody>
                    <?php
                    for ($x = 0; $x < 10; ++$x) {
                        echo("<tr>");
                        for($y = 0; $y < 10; ++$y) {
                            
                        echo("<td>");
                        echo(rand(5,100));
                        echo('</td>');
                    }
                    echo('</tr>');
                    }
                    ?>
                </tbody>
            </table>

    </body>
</html>