<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function phepTinh($a, $b, $phepTinh){
        $ketQua = 0;
    switch ($phepTinh) {
    case '+':       
        $ketQua = $a + $b;
        break;
    case '-':
        $ketQua = $a - $b;
        break;
    case '*':
        $ketQua = $a * $b;
        break;
    case '/':
        if($b == 0){
            return "Lỗi: không thể chia cho 0";
        }
        $ketQua = $a / $b;
        break;
    default:
       return "Lỗi: Phép tính không hợp lệ";
   }
      return $ketQua;
}
    echo phepTinh(20, 5, '+') . "<br>"; 
    echo phepTinh(20, 5, '-') . "<br>";
    echo phepTinh(20, 5, '*') . "<br>"; 
    echo phepTinh(20, 0, '/') . "<br>";
    echo phepTinh(20, 0, 'abcxyz') . "<br>";
    ?>
</body>
</html>