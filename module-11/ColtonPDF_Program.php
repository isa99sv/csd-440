<!DOCTYPE html>
<html lang='en'>
<!--
    Colton Stone, Assignment 11.2, October 9, 2026
-->

 <head>
    <script>
        
        function getPDF() {
        window.open("ColtonPDF.php");
    }
   </script>
   <title>PDF Page</title>
   <meta charset='utf-8'>

    <style>
        button {
            padding: 25px 25px;
            font-size: 25px;  

        }
        .display-pdf {
            display: flex;
            justify-content: center; 
            align-items: center;     
            height: 100vh;        
        }
    </style>
   
</head>
<div class="display-pdf">
 <body><button onclick="getPDF();" target="_blank">View PDF</button></body>
 </div>
</html>