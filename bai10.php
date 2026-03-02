<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function tachChuoi($chuoi, $kyTuPhanCach) {
        return explode($kyTuPhanCach, $chuoi);
    }
    $danhSach = "phan,thanh,trung";
    $TraVe = tachChuoi($danhSach, ",");
    print_r($TraVe);
    ?>
</body>
</html>