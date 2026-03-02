<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function kiemTraSoNguyenTo($n) {
        if($n < 2){
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
           return true;
    }
    $n = 5;
    if(kiemTraSoNguyenTo($n)){
        echo "[$n] Là số nguyên tố";
        }else{
              echo "[$n] Không phải số nguyên tố";
        }
    ?>
</body>
</html>