<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    function kiemTraNamNhuan($nam) {
    if ($nam % 400 == 0) {
        return true;
    }
    if ($nam % 4 == 0 && $nam % 100 != 0) {
        return true;
    }
    return false;
}
    $nam = 2026; 
    if (kiemTraNamNhuan($nam)) {
        echo "Năm $nam là năm nhuận."; 
    } else {
        echo "Năm $nam KHÔNG PHẢI là năm nhuận."; 
}
    ?> 
</body>
</html>