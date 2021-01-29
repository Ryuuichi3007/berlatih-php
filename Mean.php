<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mean</title>
</head>
<body>
  <h1>Mean</h1>

  <?php
  
  echo "<h3>Cari Mean^^</h3>";

  function cari_mean($arr){
    $divisor = count($arr);
    $sum = 0;
    echo "Mean dari Data disamping ini : ";
    for($i = 0; $i < count($arr); $i++){
      $sum += $arr[$i];
      echo $arr[$i];
      if($i === count($arr)-1) echo "<br>";
      else echo ","; 
    }
    $hasil = $sum / $divisor; 
    echo "Adalah " . round($hasil) . "<br><br>";
  }

  echo cari_mean([1, 2, 3, 4, 5]); // 3
  echo cari_mean([3, 5, 7, 5, 3]); // 5
  echo cari_mean([6, 5, 4, 7, 3]); // 5 
  echo cari_mean([1, 3, 3]); // 2 
  echo cari_mean([7, 7, 7, 7, 7]); // 7 

  ?>
</body>
</html>