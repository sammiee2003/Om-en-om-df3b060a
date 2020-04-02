<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" width= 600px; height= 600px>
    <?php 
    for ($row = 1; $row <= 8; $row ++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col ++) {
            $total = $row + $col;
            if ($total % 2 == 0) {
                echo "<td height=40px width=40px bgcolor=#0000></td>";
            } else {
                echo "<td height=40px width=40px bgcolor=#ffcocb></td>";
            }
        }
        echo "</tr>";
    }
    ?>

</body>
</html>