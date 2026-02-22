<?php
$n = 200; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .chessboard {
            display: grid;
            grid-template-columns: repeat(<?php echo $n; ?>, 30px);
            width: max-content;
            border: 30px solid #ffcc00;
        }
        .cell {
            width: 30px;
            height: 30px;
        }
        .color1 {
            background-color: #934f13;
        }

        .color2 {
            background-color: #000;
        }
    </style>
    
</head>
<body>
 
    <div class="chessboard">
        <?php
        for ($row = 0; $row < $n; $row++) {
            for ($col = 0; $col < $n; $col++) {
                $class = ($row + $col) % 2 == 0 ? 'color1' : 'color2';
                echo "<div class='cell $class'></div>";
            }
        }
        ?>
    </div>
   
</body>
</html>