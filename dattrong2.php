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
            <h1>NH?? V?????N VEN H??? VIP C???M L??NH, BA V??. CH??NH CH??? B??N G???P KHU NGH??? D?????NG VEN H??? X?? C???M L??NH!</h1>
            <p>Gi?? nh??: 27 t???</p>
            <p>V??? tr??: X?? C???m L??nh, Ba V??, H?? N???i</p>
            <p>M?? t???</p>
            <p>Ch??nh ch??? ??i n?????c ngo??i c???n chuy???n nh?????ng g???p trong th??ng 5.
                Khu ngh??? d?????ng cao c???p, y??n t??nh, c?? h??? 3ha, c??ch H?? N???i 60 ph??t.
                X?? C???m L??nh, Ba V??, H?? N???i. ?????y ????? ti???n nghi, nh?? s??n 4 ph??ng ng???, h???m r?????u, v?????n c??y,... L??n c???n l?? nhi???u nh?? v?????n, bi???t th??? ng?????i H?? N???i.
                
                ?????t 5,200m2 (s??? ?????, 300m2 ONT).
                H??? 30,000m2 (3 h??c ta, c???nh quan, ??ang th??? c??, kayak, ?????p v???t).
                Gi?? ch??? 27 t???.
                Li??n h??? ch??nh ch???: Mr. Nam 0776368*** (zalo).</p>
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
