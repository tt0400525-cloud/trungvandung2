<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function daoNguocChuoi($chuoi){
        $chuoi_dao_nguoc = "";
        $do_dai = strlen($chuoi);   
    for ($i = $do_dai - 1; $i >= 0; $i--) {
        $chuoi_dao_nguoc = $chuoi_dao_nguoc . $chuoi[$i];
    }
    return "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoi_dao_nguoc'";
}
     $n = "quang nguu"; 
     echo daoNguocChuoi($n);
    ?>
</body>
</html>