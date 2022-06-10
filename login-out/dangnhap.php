<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="wrapper">
            <form action='dangnhap.php?do=login' method='POST' id="form-login">
                
                    <h1 class="form-heading">Đăng Nhập</h1>
                    <div class="form-group">
                            <input type='text' name='name_login' class="form-input" placeholder="Tên đăng nhập"/>
                    </div>  
                    <div class="form-group">
                            <input type='password' name='pws' class="form-input" placeholder="Mật khẩu" />
                    </div>    
                
                <input type='submit' name="dangnhap" value='Đăng nhập' />
                <a href='sign_in.php' title='Đăng ký'>Đăng ký</a>
            </form>
        </div>
    </body>
</html>

<?php 
    session_start();
    include_once "../dbconnect/dbconnect.php";
    if(isset($_POST['dangnhap'])){
        $name_login= $_POST['name_login'];
        $pws= $_POST['pws'];
        $sql = "SELECT * FROM signin WHERE name_login='".$name_login."' AND pws='".$pws."' LIMIT 1";
        $row = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['login'] = $name_login;
            header("location:../trangchu.php");
        }else{
            echo '<script>alert("login again")";</script>';
            header("location:dangnhap.php");
        }
    }    

?>