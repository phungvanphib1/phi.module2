<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        Tiền đầu tư ban đầu: <input type="text" name="dauTu"> <br>
        Lai suất năm: <input type="text" name="lai"> <br>
        Số năm đầu tư: <input type="text" name="namDauTu"> <br>
        <input type="submit" value="Tính">
    </form>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $dauTu = $_REQUEST ['dauTu'];
    $lai = $_REQUEST ['lai'];
    $namDauTu = $_REQUEST ['namDauTu'];
    $tong = 0;
    for($i=0;$i<=$namDauTu;$i++){
        $lai_1= $dauTu/10;
        $ketqua = $dauTu+($dauTu*$lai_1);
        $tong += $ketqua;
    }
    echo 'Giá Trị Đầu Tư của'. $namDauTu ." Năm :". $tong;
}

?>
</html>