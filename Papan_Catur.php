<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papan Catur</title>
</head>
<body>
  <h1>Papan Catur</h1>

  <?php
  
  echo "<h3>Maen Catur</h3>";

  function papan_catur($angka){
    echo "Papan Catur Parameter: " . $angka . "<br>";
    for($i = 1; $i <= $angka; $i++){
      if($i % 2 == 0){
        for($j = 1; $j < $angka+$angka; $j++){
          if($j % 2 == 0) echo "#";
          if($j % 2 != 0) echo ".";
          if($j === $angka+$angka) echo "<br>";
        }
      }
      if($i % 2 != 0){
        for($j = 1; $j <= $angka+$angka; $j++){
          if($j % 2 == 0&& $j < $angka+$angka) echo ".";
          if($j % 2 != 0) echo "#";
        }
      }
      echo "<br>";
    }
    echo "<br>";
  }

  echo papan_catur(4);
  echo papan_catur(8);
  echo papan_catur(5);

  ?>
</body>
</html>