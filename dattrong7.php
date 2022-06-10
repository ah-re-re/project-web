<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> nhadat1 </title>
<link rel="stylesheet" href="styles.css" />
<link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');
        *{
        padding: 0;
        margin: 0;
        }
        body{
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            line-height: 1.15;
            color: #111
            ;
        }
        #wrapper {
            max-width: 1170px;
            margin: 0 auto;
        }
        .headline{
            text-align: center;
            margin: 40px 0px;
        }

        h3{
            font-size: 18px;
            color: #111;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #bebebe;
            display: inline-block;
            color:#555;
            font-weight: 600;
        }
        ul.products{
            list-style: none;
            display:flex;
            flex-wrap:wrap;
            justify-content: space-between;
        }
        ul.products li{
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }        
        .content{
            width:960px;
            margin: 0px;
        }
        .text-center{
            text-align: center;
        }
        .text-center img{
            width: 600px;
        }
        .information{
            padding-left: 100px;
            margin-top: 50px;
        }
        .information p{
            line-height: 2;
            font-size: medium;
        }
    </style>
     <header class="header" id="header">
        <div class="navigation">
          <div class="nav-center container d-flex">
            <a href="#" class="logo"><img src="images/estate.png"></a>
            <ul class="nav-list d-flex">
              <li class="nav-item">
                <a href="trangchu.php" class="nav-link">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a href="nhadatban.php" class="nav-link">Nhà đất bán</a>
              </li>
              <li class="nav-item">
                <a href="nhadatthue.php" class="nav-link">Nhà đất cho thuê</a>
              </li>
              <li class="nav-item">
                <a href="dattrong.php" class="nav-link">Đất trồng</a>
              </li>
            </ul>
            <div class="hamburger">
                <i class="bx bx-menu-alt-left"></i>
              </div>
            </div>
          </div>
    <div id="wrapper">
        <div class="headline">
            <h3>THÔNG TIN CHI TIẾT </h3>
        </div>
    <div id="content">
        <div class="text-center">
            <img src="images/11.jpg" alt="" class="">  
        </div>
        <div class="information">
            <h1>KHU NGHỈ DƯỠNG ĐÃ HOÀN THIỆN TẠI LƯƠNG SƠN, ĐẦY ĐỦ TIỆN ÍCH GIẢI TRÍ, GIÁ CHỈ HƠN 3TR/M2</h1>
            <p>Giá nhà: Thỏa thuận</p>
            <p>Vị trí: Lương Sơn, Hòa Bình</p>
            <p>Mô tả</p>
            <p>Khuôn viên hoàn thiện tại Lương Sơn, giá đầu tư chỉ 3, x tr/m2.
                - Tổng diện tích khuôn viên 3634m2 trong đó có 400m thổ cư còn lại đất vườn.
                - Khuôn viên hoàn thiện bao gồm 1 căn biệt thự 2 tầng hoàn thiện, bể bơi vô cực, khu bếp nướng...
                - Toàn bộ diện tích đã đc xây dựng tường bao ranh giới rõ ràng, trên đất được trồng nhiều cây ăn quả, cây bóng mát cổ thụ, đã được trải thảm cỏ Nhật toàn bộ.
                - Vị trí đắc địa, nằm trong vùng lõi phát triển nhất của huyện Lương Sơn, xung quanh là các dự án lớn của huyện.
                - View cánh đồng bao la cực thoáng, sát ngay Dự Án Thành Phố thể Thao, tiềm năng tăng trưởng tốt.
                - Giao thông thuận tiện, cách trục liên xã chỉ 30m, cách trung tâm hành chính của huyện ~ 3km, cách TT Hà Nội chỉ 40km.
                - Pháp lý rõ ràng, sổ sách sạch có thể công chứng trong ngày.
                - Phù hợp nghỉ dưỡng, kinh doanh homestay...
                - Địa chỉ: Lương Sơn, Hòa Bình.
                - Giá bán: 3. X tr/m.
                LH: 0977711*** gặp chính chủ.</p>
            <p></p>
        </div>
    </div>    
    
        <footer class="footer">
            <div class="row">
              <div class="col d-flex">
                <h4>INFORMATION</h4>
                <a href="">Nhà đất bán</a>
                <a href="">Nhà đất cho thuê</a>
                <a href="">Đất trồng</a>
                <a href="">Chính sách bảo mật</a>
              </div>
      
              <div class="col d-flex">
                <span><i class="bx bxl-facebook-square"></i></span>
                <span><i class="bx bxl-instagram-alt"></i></span>
                <span><i class="bx bxl-github"></i></span>
                <span><i class="bx bxl-twitter"></i></span>
                <span><i class="bx bxl-pinterest"></i></span>
              </div>
            </div>
          </footer>
        </body>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="./js/slider.js"></script>
        <script src="./js/index.js"></script>
      </html>
