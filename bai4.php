<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fibonacci($n){
        if($n == 1){
            return 1;
        }
        if($n == 2){
            return 1;
        }
        if($n > 2){
            return fibonacci($n - 2) + fibonacci($n - 1);
        }
    }
    $so_n = 10;
    $ketQua = fibonacci($so_n);
    echo "Tại vị trí thứ [$so_n] trong dãy số, giá trị Fibonacci là: $ketQua ";
    ?>
</body>
</html>