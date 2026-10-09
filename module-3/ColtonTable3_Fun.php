<!DOCTYPE html>
<html lang='en'>
    <!--
    Colton Stone, Assignment 3.2, October 9, 2026
-->


<?php

function randNum ($num1, $num2, $final_Num) {
    $num1 = rand(1,100);
    $num2 = rand(1,100);

    $final_Num = $num1 + $num2;
    return $final_Num;
}

  ?>