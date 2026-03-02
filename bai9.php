<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function demKyTuXuatHien($chuoi, $kyTu) {
    $dem = 0;

    for ($i = 0; $i < strlen($chuoi); $i++) {
        if ($chuoi[$i] == $kyTu) {
            $dem++;
        }
    }

    return $dem;
}

echo demKyTuXuatHien("phan thanh trung", "n");
?>
</body>
</html>