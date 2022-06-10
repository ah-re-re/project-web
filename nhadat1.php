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
         <?php 
         include_once "dbconnect/dbconnect.php";
        $id = $_GET['id'];
        
        $sql = "SELECT * FROM `nha_dat_ban` WHERE `id`=$id";
        $ressut = mysqli_query($conn,$sql);
        while ($roww = mysqli_fetch_array($ressut)) {


                                        
                ?>
        <div class="text-center">
            <img src = <?php echo "./images/".$roww["anh"];?> >  
        </div>
        <div class="information">
            <h1><?php echo $roww["gioi_thieu"]; ?></h1>
            <p>Giá nhà: <?php echo $roww['gia'];?></p>
            <p>Liên hệ: <?php echo $roww['lien_he'];?></p>
            <p>Vị trí: <?php echo $roww['vi_tri'];?></p>
            <p>Mô tả</p>
            <p><?php echo $roww['mo_ta'];?></p>
            <p></p>
        </div>
        <?php
    }
    ?>
        <!-- <div class="text-center">
            <img src="images/11.jpg" alt="" class="">  
        </div>
        <div class="information">
            <h1>BÁN CĂN 4 PHÒNG NGỦ TẦNG ĐẸP VINHOMES SKYLAKE, PHẠM HÙNG, MỸ ĐÌNH, NAM TỪ LIÊM, LH: 0983786***</h1>
            <p>Giá nhà: 12.5 tỷ</p>
            <p>Vị trí: Vinhomes Skylake Phạm Hùng, Dương Đình Nghệ, Mỹ Đình, Nam Từ Liêm</p>
            <p>Mô tả</p>
            <p>Căn đẹp, giá tốt:

                1. 4PN Tòa S102, S206, S3 05. Diện tích 141 - 153m2 thông thuỷ.
                
                Bán 12,5 tỷ.
                
                2. 4PN S318 tầng đẹp. Full nội thất.
                
                Bán 12 tỷ.
                
                Ngoài ra chúng tôi được chủ nhà gửi bán độc quyền quỹ căn 1, 2, 3, 4 phòng ngủ, penthouse, skyvilla đáp ứng được nhu cầu quý khách.
                
                Anh chị quan tâm xin liên hệ hotline Do Villas: 098.378.6.*** để được miễn phí tư vấn, xem nhà, hỗ trợ chọn căn hợp phong thủy, thủ tục nhanh gọn, nhiệt tình, chuyên nghiệp.
                
                Do Villas cam kết:
                
                - Nguồn hàng chuyển nhượng nhiều nhất thị trường, giúp khách hàng có thêm nhiều lựa chọn và so sánh.
                
                - Miễn phí tư vấn và đi xem nhà trực tiếp các căn hộ để khách hàng so sánh và lựa chọn thật ưng ý.
                
                - Không sợ bị mua chênh vì khách hàng được gặp trực tiếp chủ nhà - đàm phán giá và ký hợp đồng đặt cọc, mua bán trực tiếp.
                
                - Cam kết đồng hành cùng khách hàng hỗ trợ miễn phí thủ tục pháp lý, sang tên sổ đỏ cho khách hàng.
                
                - Luôn tận tâm - chuyên nghiệp - trung thực - uy tín.
                
                Do Villas nhận ký gửi mua bán cho thuê: Nhà phố, biệt thự - liền kề - chung cư cao cấp các dự án.
                
                Trân trọng cảm ơn!</p>
            <p></p>
        </div> -->
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
