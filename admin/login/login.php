<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập ADMIN</title>    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div id="wrapper">
            <form action='login.php?do=login' method='POST' id="form-login">   <!-- tạo form  -->
                
                    <h1 class="form-heading">Đăng Nhập ADMIN</h1>
                    <div class="form-group">
                            <input type='text' name='user' class="form-input" placeholder="Tên đăng nhập"/>
                    </div>  
                    <div class="form-group">
                            <input type='password' name='password' class="form-input" placeholder="Mật khẩu" />
                    </div>    
                
                <input type='submit' name="dangnhap" value='Đăng nhập' />  
                <!-- name="dangnhap" == _POST['dangnhap'] -->
                
            </form>
        </div>
    </body>
</html>

<?php 
    
    
    include_once "../connecting/connecting.php";          //kết nối database
    if(isset($_POST['dangnhap'])){                         // name="dangnhap" == _POST['dangnhap']
        $user= $_POST['user'];          
        $password= $_POST['password'];
        $sql = "SELECT * FROM admin WHERE user='".$user."' AND password='".$password."'";
        $rowad = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($rowad);
        if($count>0){
            $_SESSION['loginn'] = $user;
            header("location:../index.php");
            
        }else{
            echo '<script>alert("login again")";</script>';
             header("location:login.php");
        }
    }    

?>