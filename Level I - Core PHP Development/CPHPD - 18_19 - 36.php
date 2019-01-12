<?php
#Šahovska tabla 
?>
<!DOCTYPE html>
 <html> 
 <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 
<h3>Chess Board using Nested For Loop</h3>
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 270px wide (8 columns x 60px) -->
  <?php
  //Vanjska petlja koja ispisuje redove (osam redova ukupno)
  for($row=1;$row<=8;$row++){

      echo "<tr>";

      //Unutrašnja petlja koja ispisuje pločice
      for($col=1;$col<=8;$col++){

          //Total varijabla nam određuje da li je pločica bijela ili crna, odnosno da li je parna ili neparna
          //Total nam pomaže i u tome da jedan red krene sa bijelom a drugi red krene sa crnom pločicom
          //jer je on uvijek zbir brojača iz vanjske petlje i brojača iz unutrašnje petlje
          $total=$row+$col;

          //Ako je total modulo 2 = 0, onda je to parni broj i imamo bijelu pločicu, a u suprotnom imamo neparan broj i crnu pločicu
          if($total%2==0){
              echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }else{
              echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
      }

      echo "</tr>";
   }
   ?>
</table>
</body>
</html>