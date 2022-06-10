<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/app.css">
        <title>Trang đăng ký</title>
    </head>
    <body>
        <div id="wrapper">
        <form action="sign_in_process.php" method="POST" id="form-login">
            <h1 class="form-heading">Đăng ký</h1>
                <div class="form-group">  
                    <input type="text" name="name_login" size="50" class="form-input" placeholder="Tên đăng ký"/>
                </div> 

                <div class="form-group">
                    <input type="password" name="pws" class="form-input" placeholder="Mật khẩu"/>
                </div>
            
                <div class="form-group">
                        <input type="text" name="email"  class="form-input" placeholder="email"/>
                </div>        
                <div class="form-group">
                        <input type="text" name="names" class="form-input" placeholder="tên" />
                </div>    
            
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
    </div>
    </body>
</html>
