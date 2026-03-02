<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function kiemTraChanLe($n){
       $ketQua = ($n % 2 ==0) ? "Số chẵn" : "Số lẻ";
       return "Số [$n]Là: [$ketQua]";
    }
    $n = 2;
    echo kiemTraChanLe($n) ;
    ?>
</body>
</html>