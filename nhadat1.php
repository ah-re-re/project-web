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
     <header class="header" id="header">  <!-- header -->
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
          </div>  <!-- header -->
    <div id="wrapper">
        <div class="headline">
            <h3>TH??NG TIN CHI TI???T </h3>
        </div>
    <div id="content">
         <?php                                          
         include_once "dbconnect/dbconnect.php";    //g???i table nha dat ban theo id t??? database
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
            <p>Gi?? nh??: <?php echo $roww['gia'];?></p>
            <p>Li??n h???: <?php echo $roww['lien_he'];?></p>
            <p>V??? tr??: <?php echo $roww['vi_tri'];?></p>
            <p>M?? t???</p>
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
            <h1>B??N C??N 4 PH??NG NG??? T???NG ?????P VINHOMES SKYLAKE, PH???M H??NG, M??? ????NH, NAM T??? LI??M, LH: 0983786***</h1>
            <p>Gi?? nh??: 12.5 t???</p>
            <p>V??? tr??: Vinhomes Skylake Ph???m H??ng, D????ng ????nh Ngh???, M??? ????nh, Nam T??? Li??m</p>
            <p>M?? t???</p>
            <p>C??n ?????p, gi?? t???t:

                1. 4PN T??a S102, S206, S3 05. Di???n t??ch 141 - 153m2 th??ng thu???.
                
                B??n 12,5 t???.
                
                2. 4PN S318 t???ng ?????p. Full n???i th???t.
                
                B??n 12 t???.
                
                Ngo??i ra ch??ng t??i ???????c ch??? nh?? g???i b??n ?????c quy???n qu??? c??n 1, 2, 3, 4 ph??ng ng???, penthouse, skyvilla ????p ???ng ???????c nhu c???u qu?? kh??ch.
                
                Anh ch??? quan t??m xin li??n h??? hotline Do Villas: 098.378.6.*** ????? ???????c mi???n ph?? t?? v???n, xem nh??, h??? tr??? ch???n c??n h???p phong th???y, th??? t???c nhanh g???n, nhi???t t??nh, chuy??n nghi???p.
                
                Do Villas cam k???t:
                
                - Ngu???n h??ng chuy???n nh?????ng nhi???u nh???t th??? tr?????ng, gi??p kh??ch h??ng c?? th??m nhi???u l???a ch???n v?? so s??nh.
                
                - Mi???n ph?? t?? v???n v?? ??i xem nh?? tr???c ti???p c??c c??n h??? ????? kh??ch h??ng so s??nh v?? l???a ch???n th???t ??ng ??.
                
                - Kh??ng s??? b??? mua ch??nh v?? kh??ch h??ng ???????c g???p tr???c ti???p ch??? nh?? - ????m ph??n gi?? v?? k?? h???p ?????ng ?????t c???c, mua b??n tr???c ti???p.
                
                - Cam k???t ?????ng h??nh c??ng kh??ch h??ng h??? tr??? mi???n ph?? th??? t???c ph??p l??, sang t??n s??? ????? cho kh??ch h??ng.
                
                - Lu??n t???n t??m - chuy??n nghi???p - trung th???c - uy t??n.
                
                Do Villas nh???n k?? g???i mua b??n cho thu??: Nh?? ph???, bi???t th??? - li???n k??? - chung c?? cao c???p c??c d??? ??n.
                
                Tr??n tr???ng c???m ??n!</p>
            <p></p>
        </div> -->
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
