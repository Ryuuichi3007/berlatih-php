<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geometri</title>
</head>
<body>
  <h1>Geometri</h1>

  <?php
  
  echo "<h3>Deret Geometri Bukan sihh?? :(</h3>";

  function tentukan_deret_geometri($arr){
    $beda = $arr[1] / $arr[0];
    echo "Data disamping : ";
    for($i = 0; $i < count($arr); $i++){
      echo $arr[$i];
      if($i === count($arr)-1) echo "<br>";
      else echo ","; 
    }
    echo "Is Deret Aritmatika? ";
    for($i=0; $i < count($arr)-1; $i++){
          if (($arr[$i + 1] / $arr[$i]) != $beda){
              return "FALSE<br><br>";
          }  
      }
      return "TRUE<br><br>";
  }

  echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
  echo tentukan_deret_geometri([2, 4, 6, 8]); // false 
  echo tentukan_deret_geometri([2, 6, 18, 54]); // true 
  echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false 

  ?>
</body>
</html>