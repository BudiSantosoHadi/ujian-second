<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <title>Ujian Looping Php</title>
</head>
<body>
    <div class="big-container">
        <table border="1" cellpadding="8">
            <thead class="hd_tbl">
                <th colspan="10">Logic 1.1</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                echo "<td>*</td>";
            }
         }
        ?>
       </tbody>
        </table>
        
        <table border="1" cellpadding="8">
            <thead class="hd_tbl">
                <th colspan="10">Logic 1.6</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x * 9) {
                    echo "<td>*</td>";
                }else {
                    echo "<td>-</td>";
                }
            }
         }
        ?>

            <table border="1" cellpadding="8">
            <thead class="hd_tbl">
                <th colspan="10">Logic 2.4</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x >= $y) {
                    echo "<td>*</td>";
                }else {
                    echo "<td>-</td>";
                }
            }
         }
        ?>

       </tbody>
        </table>

        <table border="1" cellpadding="8">
            <thead class="hd_tbl">
                <th colspan="10">Logic 2.5</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x+$y >= 10) {
                    echo "<td>*</td>";
                }else {
                    echo "<td>-</td>";
                }
            }
         }
        ?>
         </tbody>
        </table>
        <br>
        <table border="1" cellpadding="5.5">
            <thead class="hd_tbl">
                <th colspan="10">Logic 3.3</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x == $y) {
                    echo "<td>" . (($x * 2)-1) . "</td>";
                }
                elseif ($x+$y == 10) {
                    echo "<td>" . (($x * 2)-2) . "</td>";
                
                }else {
                    echo "<td>-</td>";
                }
            }
         }
        ?>
         </tbody>
        </table>
 
    <table border="1" cellpadding="5.5">
            <thead class="hd_tbl">
                <th colspan="10">Logic 3.4</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x == $y) {
                    echo "<td>" . (($x * 2)-1) . "</td>";
                }
                elseif ($x >= $y) {
                    echo "<td>A</td>";
                
                }else {
                    echo "<td>-</td>";
                }
            }
         }
        ?>
         </tbody>
        </table>
        <table border="1" cellpadding="5.5">
            <thead class="hd_tbl">
                <th colspan="10">Logic 3.6</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x == $y) { 
                    echo "<td>" . (($x * 2) - 1)   .  "</td>";
                }
                elseif ($x+$y == 10) {
                    echo "<td>" . (($x * 2) - 2)   . "</td>";
                }
                elseif ($x>$y && $x+$y < 10) {
                 echo "<td>A</td>";
                }
                elseif ($x<$y && $x+$y > 10) { 
                 echo "<td>B</td>";
                }
                else {
                    echo "<td>-</td>";  
                }
            }
         }
        ?>
         </tbody>
        </table>
         <br>

        <table border="1" cellpadding="8">
            <thead class="hd_tbl">
                <th colspan="10">Logic 3.6</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";   
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                if ($x+$y >= 10 && $y <= $x) {
                    echo "<td>*</td>";
                }
                elseif ($x <= 5 && $x + $y > 5 && $y - $x < 5) {
                  echo "<td>*</td>";
                    
                }else {
                    echo "<td></td>";
                }
               }
            }
             
        ?>
         </tbody>
        </table>

        <table border="1" cellpadding="5.5">
            <thead class="hd_tbl">
                <th colspan="10">Logic 3.6</th>
            </thead>
            <tbody>
            <?php
             echo "<td class='none-box'></td>";
             echo "<td class='num'> 1 </td>";
             echo "<td class='num'> 2 </td>";
             echo "<td class='num'> 3 </td>";
             echo "<td class='num'> 4 </td>";
             echo "<td class='num'> 5 </td>";
             echo "<td class='num'> 6 </td>";
             echo "<td class='num'> 7 </td>";
             echo "<td class='num'> 8 </td>";
             echo "<td class='num'> 9 </td>";
              for ( $x=1; $x <=9; $x++ ) {
                 echo "<tr>";
                 echo "<td class='num'>$x</td>";
              for ( $y=1; $y <= 9; $y++) {
                  echo "<td>*</td>";
                if ($x + $y == 1 && $x <= $y ) {
                    echo "<td> </td>";
                }
              }
             }
            ?>
         </tbody>
        </table>

    </div>
</body>
</html>