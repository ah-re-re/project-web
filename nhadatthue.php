<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nhà đất thuê </title>
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
            justify-content: flex-start;
        }
        ul.products li{
            flex-basis: 25%;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        ul.products li img{
            max-width: 100%;
            height: auto;
        }
        ul.products li .product-top a.buy-now{
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color: #446084;
            color: #fff;
            padding: 10px 0px;

        }
        ul.products li .product-info{
            padding:10px 0px;
        }
        ul.products li .product-info a{
            display:block;
            text-decoration: none;
        }
        ul.products li .product-info a.product-cat{
            font-size: 11px;
            text-transform: uppercase;
            color: #9e9e9e;
            padding:3px 0px;
        }
        ul.products li .product-info a.product-name{
            color:#334862;
            padding: 3px 0px;
        }
        ul.products li .product-info .product-price{
            color:#111;
            padding:2px 0px;
            font-weight: 600;
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
            <h3>CĂN HỘ NỔi BẬT </h3>
        </div>
        <ul class="products">
            <?php
                include_once "dbconnect/dbconnect.php";
                $sql = "SELECT * FROM nha_dat_ban WHERE ban_thue_dat='thue'";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                    
                

            ?> 
            <!--<li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="images/11.jpg" alt="" class="">
                        </a>
                    <a href="nhadat1.php" class="buy-now">Xem ngay</a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat">House</a>
                        <a href="" class="product-name">
                            Hinode Royal Park
                        </a>
                        <div class="product-price">$2999,7</div>
                    </div>
                </div>
            </li>-->
            <li>
                <div class="product-item">
                    <div class="product-top">
                     <a href="" class="product-thumb"><img src = <?php echo "./images/".$row["anh"];?> ></a>

                    <a href="nhadat1.php" class="buy-now">Xem ngay</a>

                    </div>
                    <div class="product-info">
                        <a href="" class="product-cat"><?php echo $row["ban_thue_dat"]; ?></a>
                        <a href="" class="product-name">
                            <?php echo $row['vi_tri'];?>
                        </a>
                        <div class="product-price"><?php echo '$'.$row['gia'];?></div>
                    </div>
                </div>
            </li>
            <?php 
            }
            ?>
        </ul>
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
