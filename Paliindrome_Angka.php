<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrome Angka</title>
</head>
<body>
  <h1>Palindrome Angka</h1>

  <?php
  
  echo "<h3>Palindrome Angka Selanjutnya</h3>";

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

  ?>
</body>
</html>