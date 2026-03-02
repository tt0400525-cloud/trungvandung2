<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     function demSoTu($chuoi){
        return str_word_count($chuoi);

     }
     $n = "met quá";
     $ketQua = demSoTu($n);
     echo "Chuỗi: '$n' <br>";
     echo "Số từ trong chuỗi trên là: " . $ketQua;
    ?> 
</body>
</html>