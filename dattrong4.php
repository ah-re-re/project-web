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
            <h1>CHỈ 600TR SỞ HỮU NGAY CĂN HỘ MẶT VỊNH, SỞ HỮU LÂU DÀI TẠI HẠ LONG</h1>
            <p>Giá nhà: 3 tỷ</p>
            <p>Vị trí: Phường Hùng Thắng, Hạ Long, Quảng Ninh</p>
            <p>Mô tả</p>
            <p>Tên dự án: A La Carte Halong Bay.
                Chủ đầu tư: TasecoLand.
                Tổng diện tích: 5.125m2.
                Mật độ xây dựng: 61,41%.
                Quy mô: 41 tầng nổi và 2 tầng hầm.
                Hình thức bàn giao: Hoàn thiện nội thất.
                Sở hữu: Sổ hồng lâu dài.
                
                Chức năng các tầng.
                Tầng 41: Rooftop Bar, Sake Bar, nhà hàng Nhật.
                Tầng 40: Pool Bar, nhà hàng Ý, 2 bể bơi vô cực.
                Tầng 39: Dịch vụ và kỹ thuật.
                Tầng 4 - 38: Căn hộ.
                Tầng 3: Phòng họp, hội thảo.
                Tầng 2: Bể bơi trong nhà, Yoga, Gym, Bar.
                Tầng 1: Sảnh lễ tân, nhà hàng, café, cửa hàng kem.</p>
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
