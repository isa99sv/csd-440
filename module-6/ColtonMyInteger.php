<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 6.2, September 6, 2026
-->

 <head>
  <title>Integer Program</title>
   <meta charset='utf-8'>
    <?php

    $break_Line = '<br> <br>';


class MyInteger {
    public int $int;

    
    public function __construct($int){
        $this->int = $int;
        }

        function isEven($int) {
            if ($this->int % 2 == 0) {
                 echo("This number is even");
               
    }

}

     function isOdd($int) {
            if ($this->int % 2 == 1) {
                echo("This number is odd ");
}

}

 function isPrime($int) {
            if ($int <= 1) {
                echo(" and is not a prime number. <br>");
            } else {
                for ($x = 2; $x <= sqrt($int); $x++) {
                    if ($int % $x == 0) {
                        echo(" and is not a prime number. <br>");
                        return;
                    }
                }
                echo(" and it is a prime number. <br>");
            }

}

 

   function getInt(){

          return $this->int;
        }

        function setInt($newInt){

          $this->int = $newInt;
        }

}

?>

 </head>
    <style>
       body {
            color: #9d159d;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <body>

        <?php

     
      $ColtonMyInteger1 = new MyInteger(10); 
      echo ("The number you entered is: " . $ColtonMyInteger1->getInt() . "<br>");
     echo("{$ColtonMyInteger1->isEven(10)}" . "{$ColtonMyInteger1->isOdd(10)}" . "{$ColtonMyInteger1->isPrime(10)}");


      $ColtonMyInteger2 = new MyInteger(5); 
      echo ($break_Line . "The number you entered is: " . $ColtonMyInteger2->getInt() . "<br>");
     echo("{$ColtonMyInteger2->isEven(5)}" . "{$ColtonMyInteger2->isOdd(5)}" . "{$ColtonMyInteger2->isPrime(5)}");



    ?>

   
   

    </body>
</html>