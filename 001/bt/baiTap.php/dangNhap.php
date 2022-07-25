<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (($username === "admin" && $password === "admin") ||
        ($username === "phideptrauxxx" && $password === "phideptrauxxx") ||
        ($username==="philaden_fa"&&$password==="123456789")) {
        echo " <h3>  Đăng Nhập thàng công, Chào Mừng "  .$username ."</h3>";
    } else{
        echo "<h3>Tài khoản không tồn tại</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <h1>Đăng Nhập</h1>
    <div><form action='' class="dangnhap" method='POST'> 
Tên đăng nhập : <input type='text' name='username' /> </div>
<div>Mật khẩu : <input type='password' name='password' />  
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> </div>


<a href="https://www.facebook.com/phi6623/">Đăng Ký Tài Khoản</a>
</form>
</body>
</html>