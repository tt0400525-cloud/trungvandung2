<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function chuyenDoiInHoa($chuoi) {
       return strtoupper($chuoi);    
}
    //Gọi hàm
    $chu  = "Gojo Saturo";
    $ketQua = chuyenDoiInHoa($chu);
    echo $ketQua;
    ?>
</body>
</html>