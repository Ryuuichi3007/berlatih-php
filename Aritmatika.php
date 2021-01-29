<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aritmatika</title>
</head>
<body>
  <h1>Aritmatika</h1>

  <?php
  
  echo "<h3>Deret Aritmatika Bukan yaa?? 0_0</h3>";

  function tentukan_deret_aritmatika($arr){
    $beda = $arr[1] - $arr[0];
    echo "Data disamping : ";
    for($i = 0; $i < count($arr); $i++){
      echo $arr[$i];
      if($i === count($arr)-1) echo "<br>";
      else echo ","; 
    }
    echo "Is Deret Aritmatika? ";
    for($i=0; $i < count($arr)-1; $i++){
          if (($arr[$i + 1] - $arr[$i]) != $beda){
              return "FALSE<br><br>";
          }  
      }
      return "TRUE<br><br>";
  }

  echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true 
  echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false 
  echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true 
  echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false 
  echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false 

  ?>
</body>
</html>