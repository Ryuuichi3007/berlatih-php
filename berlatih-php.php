<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berlatih-PHP</title>
</head>
<body>
  <h1>Berlatih PHP Part 3 Yooooo</h1>

  <?php
  
  echo "<h3>Palindrome Angka</h3>";

  function palindrome_angka($n){
    echo "The Number Before Palindrome is ==> " . $n . "<br>";
    if($n < 10){
      $hasil = $n + 1;
      echo "The Next Palindrome is ==> " . $hasil . "<br><br>";
    }
    else{
      $sum = 0;
      while($n != $sum){
        $number = $n;  
        while(floor($number)){  
          $rem = $number % 10;  
          $sum = $sum * 10 + $rem;  
          $number = $number/10;
        }
        // echo "Isi n " . $n . "<br>";
        if($n === $sum) break;
        else{
          $n++;
          $sum = 0;
        }
      }
      echo "The Next Palindrome is ==> " . $sum . "<br><br>";
    }
    
  }

  echo palindrome_angka(8); // 9 
  echo palindrome_angka(10); // 11 
  echo palindrome_angka(117); // 121 
  echo palindrome_angka(175); // 181 
  echo palindrome_angka(1000); // 1001 

  echo "<h3>Papan Catur</h3>";

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

  echo "<h3>CARI RANGKING 1(NILAINYA PALING TINGGI)</h3>";

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