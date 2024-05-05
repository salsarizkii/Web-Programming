<!-- Nama = Salsa Rizki Saputri
NIM  = L0122147 -->

<!DOCTYPE html>
<html>
<head>
    <title>Pola Pattern</title>
    <style>
        .lightGreen-box {
            width: 175px;
            height: 175px;
            background-color: #D9EDBF;
            display: inline-block;
        }

        .darkgreen {
            width: 175px;
            height: 175px;
            background-color: #2C7865;
            display: inline-block;
        }

        .white-box {
            width: 175px;
            height: 175px;
            background-color: white;
            display: inline-block;
        }

        div {
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body>
    <?php
    $rows = 5;

    for ($i = $rows; $i > 0; $i--) {
        echo '<div>';
        for ($j = $rows; $j > 0; $j--) {
            if ($j > $rows - $i + 1){
                echo '<div class="white-box"></div>';
            } else {
                if ($i % 2 == 0) {
                    if ($j % 2 == 0) {
                        echo '<div class="lightGreen-box"></div>';
                    } else {
                        echo '<div class="darkgreen"></div>';
                    }
                } else {
                    if ($j % 2 == 0) {
                        echo '<div class="darkgreen"></div>';
                    } else {
                        echo '<div class="lightGreen-box"></div>';
                    }
                }
            }
        }
        echo '</div>';
    }
    ?>
</body>
</html>
