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
                <a href="trangchu.php" class="nav-link">Trang ch???</a>
              </li>
              <li class="nav-item">
                <a href="nhadatban.php" class="nav-link">Nh?? ?????t b??n</a>
              </li>
              <li class="nav-item">
                <a href="nhadatthue.php" class="nav-link">Nh?? ?????t cho thu??</a>
              </li>
              <li class="nav-item">
                <a href="dattrong.php" class="nav-link">?????t tr???ng</a>
              </li>
            </ul>
            <div class="hamburger">
                <i class="bx bx-menu-alt-left"></i>
              </div>
            </div>
          </div>
    <div id="wrapper">
        <div class="headline">
            <h3>TH??NG TIN CHI TI???T </h3>
        </div>
    <div id="content">
        <div class="text-center">
            <img src="images/11.jpg" alt="" class="">  
        </div>
        <div class="information">
            <h1>CH??NH CH??? B??N ?????T M???T H??? SU???I HAI C???C ?????P! DT 29.300M2 PH??P L?? R?? R??NG, LH 0902436***</h1>
            <p>Gi?? nh??: 1.8 tri???u/m??</p>
            <p>V??? tr??: ???????ng ??T 91, X?? Ba Tr???i, Ba V??, H?? N???i</p>
            <p>M?? t???</p>
            <p>Di???n t??ch: 29.300m2.
                Gi??: 1.8tr/m2 (18 t???/ha).
                Hi???n tr???ng: V?????n c??y ??n qu???, c??y b??ng m??t, khu trang tr???i 3.000m2, nh?? ??i???u h??nh, nh?? nh??n vi??n, h??? th???ng t?????i ti??u,
                Ph??p l??: H???p ?????ng giao kho??n tr???ng c??y 50 n??m, c?? ?????t ??? (ONT) ghi tr??n h???p ?????ng.
                ?????t c?? k??? ho???ch chuy???n giao cho ?????a ph????ng, c???p s??? ?????.
                Quy ho???ch: Quy ho???ch ?????t ONT.
                (Quy ho???ch Huy???n Ba V?? ?????n 2030 ???? ???????c Th??? t?????ng ph?? duy???t).
                Li??n h??? l??m vi???c ch??nh ch???: 0902436***.</p>
            <p></p>
        </div>
    </div>    
    
        <footer class="footer">
            <div class="row">
              <div class="col d-flex">
                <h4>INFORMATION</h4>
                <a href="">Nh?? ?????t b??n</a>
                <a href="">Nh?? ?????t cho thu??</a>
                <a href="">?????t tr???ng</a>
                <a href="">Ch??nh s??ch b???o m???t</a>
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
