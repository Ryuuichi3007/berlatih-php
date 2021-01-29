<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Huruf</title>
</head>
<body>
  <h1>Ubah Huruf</h1>

  <?php
  
  echo "<h3>Huruf CHANGE!!!!!</h3>";

  function ubah_huruf($string){
    $arr = str_split($string);
    echo "String sebelumnya : " . $string . "<br>";
    for($i = 0; $i < count($arr); $i++){
      $num[$i] = ord($arr[$i]) + 1;
    }
    echo "String setelah diubah : ";
    for($i = 0; $i < count($arr); $i++){
      echo chr($num[$i]);
    }
    echo "<br><br>";
  }

  echo ubah_huruf('wow'); // xpx
  echo ubah_huruf('developer'); // efwfmpqfs 
  echo ubah_huruf('laravel'); // mbsbwfm 
  echo ubah_huruf('keren'); // lfsfo 
  echo ubah_huruf('semangat'); // tfnbohbu 

  ?>
</body>
</html>