<!DOCTYPE html>
<html lang="">
<head>
    <title>Chessboard</title>
</head>
<body>
<h1>Chessboard Using a Nested For Loop</h1>
<table width="400px" border="7px">
    <?php
    for ($row=0; $row<=7; $row++) {
        echo "<tr>";
        for ($col=0; $col<=7; $col++) {
            $total = $row + $col;
            if ($total%2 == 0)
                echo "<td height='30px' width='30px' bgcolor='#FFFFFF'></td>";
            else
                echo "<td height='30px' width='30px' bgcolor='#000000'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
