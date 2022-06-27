
<?php session_start(); ?>

    <!-- Link icon -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Link Font -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- Swiper js -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Link css-->
    <link rel="stylesheet" href="styles.css" />
    <title>Trang chủ</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">

      <div class="navigation">
        <div class="nav-center container d-flex">
          <a href="" class="logo"><img src="images/estate.png"></a>
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="user.php" class="nav-link">Trang chủ</a>
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
             <button class="button">
            <a href="./login-out/dangnhap.php" class="fontbutton">Đăng xuất</a> </button>
                
            <!-- <button class="button"> -->
              <!-- <a href="./login-out/sign_in.php" class="fontbutton">Đăng ký</a> </button> -->
              <button class="button">
                <a href="crurd/dangtin.php" class="fontbutton">Đăng tin</a> </button>
                <button class="button">
                <a href="admin/login/login.php" class="fontbutton">Admin</a> </button>
          </ul>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="swiper-container heroslider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="./images/pic1.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="./images/pic6.jpg" alt="" />
            </div>
          </div>
          <div class="swiper-button-next">
            <i class="bx bx-chevron-right swiper-icon"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="bx bx-chevron-left swiper-icon"></i>
          </div>
        </div>
      </div>

      <div class="content">
        <h1>Find your dream home</h1>
        <div class="search">
          <input type="text" placeholder="Type Address, City, State" />
          <a href="">Search</a>
        </div>
      </div>
    </header>

    <section class="section rent">
      <div class="title">
        <h1>Nhà cho thuê</h1>
        <p>
          Tìm kiếm bất động sản cho thuê từ các đại lý hàng đầu trong nước
        </p>
      </div>

      <div class="rent-center container">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic1.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic3.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic4.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic6.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section rent">
      <div class="title">
        <h1>Nhà đất bán</h1>
        <p>
          Tìm kiếm căn hộ từ các đại lý hàng đầu trong nước
        </p>
      </div>

      <div class="rent-center container">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic1.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic3.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic4.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic6.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section rent">
      <div class="title">
        <h1>Đất trồng</h1>
        <p>
          Tìm kiếm mẫu đất trồng hợp lí
        </p>
      </div>

      <div class="rent-center container">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic1.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic3.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic4.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic6.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Grid -->


    <!-- Contact -->
    

    <section class="section rent">
      <div class="title">
        <h1>Khám phá các danh sách nổi bật của chúng tôi</h1>
        <p>
          Các danh sách nổi bật này chứa các cơ hội bất động sản độc quyền trong thành phố
        </p>
      </div>

      <div class="rent-center container">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic4.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/pic1.jpg" alt="" />
            </div>
            <div class="pos">
              <span>FEATURED</span>
              <span>BUY</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="section contact">
      <div class="row">
        <div class="col">
          <h2>HỖ TRỢ TUYỆT VỜI</h2>
          <p>
            Chúng tôi yêu khách hàng của mình và họ có thể liên hệ với chúng tôi bất kỳ lúc nào trong ngày, chúng tôi sẽ phục vụ bạn 24/7
          </p>
          <a href="" class="btn btn-1">Contact</a>
        </div>
        <div class="col">
          <form action="">
            <div>
              <input type="email" placeholder="Email Address" />
              <a href="">Send</a>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Footer -->
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
