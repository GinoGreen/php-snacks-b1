<?php 

   function getRandomArray($min, $max, $nItems){

      $randomNumbers = [];

      if(($max - $min) < $nItems){
         $nItems = $max - $min;
      }

      while(count($randomNumbers) <  $nItems){

         $number = rand($min,$max);

         if(!in_array($number,$randomNumbers)){

            $randomNumbers[] = $number;
         }

      }

      return $randomNumbers;

   }
 
   var_dump(getRandomArray(1, 100, 50));
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 4</title>
   <style>
      body {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
   </style>
</head>
<body>
   
</body>
</html>