<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skor Terbesar</title>
</head>
<body>
  <h1>Skor Terbesar</h1>

  <?php
  
  function pricesort($a, $b){
    $a = $a['nilai']; 
    $b = $b['nilai'];
    if ($a == $b)
      return 0;
    return ($a > $b) ? -1 : 1;
  }
  
  function skor_terbesar($skor){
    usort($skor, "pricesort");
    echo "Array (<br>";
    foreach($skor as $i){
      echo "[" . $i['kelas'] . "] => Array <br> (<br>";
      echo "[nama] => " . $i['nama'] . "<br>";
      echo "[kelas] => " . $i['kelas'] . "<br>";
      echo "[nilai] => " . $i['nilai'] . "<br>";
      echo ")<br>";
      // print($i['nama'].":".$i['kelas'].":".$i['nilai']."\n") . "<br>";
    }
    echo ")<br>";
  }

  $skor = [ 
    [ 
    "nama" => "Bobby", 
    "kelas" => "Laravel", 
    "nilai" => 78 
    ], 
    [ 
    "nama" => "Regi", 
    "kelas" => "React Native", 
    "nilai" => 86 
    ], 
    [ 
    "nama" => "Aghnat", 
    "kelas" => "Laravel", 
    "nilai" => 90 
    ], 
    [ 
    "nama" => "Indra", 
    "kelas" => "React JS", 
    "nilai" => 85 
    ], 
    [ 
    "nama" => "Yoga", 
    "kelas" => "React Native", 
    "nilai" => 77 
    ], 
  ];

  echo skor_terbesar($skor);

  ?>
</body>
</html>