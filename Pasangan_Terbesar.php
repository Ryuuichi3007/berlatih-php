<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasangan Terbesar</title>
</head>
<body>
  <h1>Pasangan Terbesar</h1>

  <?php
  
  echo "<h3>Pasangan Serasi Nihh</h3>";

  function pasangan_terbesar($angka){
    echo "The previous Number : " . $angka . "<br>";
    $array = str_split($angka);
    $jumlah = count($array);
    for($i = 0; $i < $jumlah-1; $i++){
      $arr[$i] = $array[$i] . $array[$i+1];
      // echo $arr[$i];
    }
    echo "Max Two Digits Number : " . max($arr) . "<br><br>";
  }

  echo pasangan_terbesar(641573); // 73 
  echo pasangan_terbesar(12783456); // 83 
  echo pasangan_terbesar(910233); // 91 
  echo pasangan_terbesar(71856421); // 85 
  echo pasangan_terbesar(79918293); // 99 

  ?>
</body>
</html>