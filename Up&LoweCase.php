<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tukar Besar Kecil</title>
</head>
<body>
  <h1>Tukar Besar Kecil</h1>

  <?php
  
  echo "<h3>Yang Kecil Henshin Jadi Gede && Yang Gede Henshin Jadi Kechcil :v</h3>";

  function tukar_besar_kecil($string){
    $arr = str_split($string);
    echo "String sebelumnya : " . $string . "<br>";
    for($i = 0; $i < count($arr); $i++){
      $asc[$i] = ord($arr[$i]);
      if($asc[$i] >= 65 && $asc[$i] <= 90) $asc[$i] += 32;
      else if($asc[$i] >= 97 && $asc[$i] <= 122) $asc[$i] -= 32;
    }
    echo "String setelah diubah : ";
    for($i = 0; $i < count($arr); $i++){
      echo chr($asc[$i]);
    }
    echo "<br><br>";
  }

  echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
  echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay" 
  echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!" 
  echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME" 
  echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

  ?>
</body>
</html>