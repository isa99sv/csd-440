<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 4.2, August 30, 2026
-->

 <head>
  <title>Palindrome Program</title>
   <meta charset='utf-8'>
 </head>
    <style>
       body {
            color: #191970;
            font-size: 20px;
            font-weight: bold;
        }

       
    </style>
    <body>

    <?php

      $break = '<br> <br>';
      $break_string = '<br> <br> <br> <br>';
      $word1 = 'noon';
      $word2 = 'racecar';
      $word3 = 'solos';
      $word4 = 'steak';
      $word5 = 'evening';
      $word6 = 'ice';


      echo "Original Word: $word1<br>";
      echo "Reversed Word: ";
      echo strrev ($word1);
      echo $break;
      
      if (strrev($word1) == $word1) {
        echo "'$word1' is a Palindrome.";
    }  
     else {
        echo "'$word1' is not a Palindrome.";
    }


      echo $break_string;
      echo "Original Word: $word2<br>";
      echo "Reversed Word: ";
      echo strrev ($word2);
      echo $break;
      
      if (strrev($word2) == $word2) {
        echo "'$word2' is a Palindrome.";
    }  
     else {
        echo "'$word2' is not a Palindrome.";
    }


     echo $break_string;
      echo "Original Word: $word3<br>";
      echo "Reversed Word: ";
      echo strrev ($word3);
      echo $break;
      
      if (strrev($word3) == $word3) {
        echo "'$word3' is a Palindrome.";
    }  
     else {
        echo "'$word3' is not a Palindrome.";
    }


      echo $break_string;
      echo "Original Word: $word4<br>";
      echo "Reversed Word: ";
      echo strrev ($word4);
      echo $break;
      
      if (strrev($word4) == $word4) {
        echo "'$word4' is a Palindrome.";
    }  
     else {
        echo "'$word4' is not a Palindrome.";
    }


     echo $break_string;
      echo "Original Word: $word5<br>";
      echo "Reversed Word: ";
      echo strrev ($word5);
      echo $break;
      
      if (strrev($word5) == $word5) {
        echo "'$word5' is a Palindrome.";
    }  
     else {
        echo "'$word5' is not a Palindrome.";
    }


      echo $break_string;
      echo "Original Word: $word6<br>";
      echo "Reversed Word: ";
      echo strrev ($word6);
      echo $break;
      
      if (strrev($word6) == $word6) {
        echo "'$word6' is a Palindrome.";
    }  
     else {
        echo "'$word6' is not a Palindrome.";
    }


    ?>
   

    </body>
</html>