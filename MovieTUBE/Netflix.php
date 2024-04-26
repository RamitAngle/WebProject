<!DOCTYPE html>
<html lang="en">
    <?php require_once("config.php");?>
    <html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> MovieTUB </title>

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="CSS/styles.css" rel="stylesheet" />

        <!-- NAvigaation Bar CSS-->
    <link rel="stylesheet" href="CSS/Navstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">MovieTUB</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">MovieTUB</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="Home.php">HOME</a></li>
          <li>
            <a href="All Movies.php">MOVIE's</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="Bollywood Movies.php">Bollywood</a></li>
              <li><a href="Hollywood Movies.php">Hollywood</a></li>
              <li><a href="Hindi Dubbed Movies.php">Hindi Dubbed</a></li>
              <li><a href="Punjabi Movies.php">Punjabi</a></li>
              <li><a href="Telugu Movies.php">Telugu</a></li>
              <li><a href="Tamil Movies.php">Tamil</a></li>
              <li><a href="Marathi Movies.php">Marathi</a></li>
            </ul>
          </li>
          <li>
            <a href="All Web Series.php">Ott's</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="Netflix.php">NETFLIX</a></li>
              <li><a href="Amazone Prime Video.php">AMAZON PRIME VIDEO</a></li>
              <li><a href="SonyLIV.php">SONY LIV</a></li>
              <li><a href="MX Player.php">MX PLAYER</a></li>
              <li><a href="ZEE5.php">ZEE 5</a></li>
              <li><a href="Disney+ Hotstar.php">DISNEY+ HOTSTAR</a></li>
            </ul>
          </li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="#">CONTACT US</a></li>
        </ul>
      </div>
      <form action="search.php" method="POST">
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search..." name="search">
          <button type="submit" name="submit-search"></button>
        </div>
      </div>
    </form>
    </div>
  </nav>
  <script src="js/Navscript.js"></script>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Netflix</h1>
                    <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
                </div>
            </div>
        </header>
        
        <!-- OTT's Grid View Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php $res=mysqli_query($db,"SELECT* from otts where platform = 'Netflix'");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Web Series</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="admin/uploads98/'.$row['image'].'" height="200"  class="card-img-top" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h3 class="fw-bolder">'.$row['title'].'</h3>

                                    <!-- Product price-->
                                    <span class="text-decoration">'.$row['sd'].'</span>
                                    <br>
                                    <h7 class="fw-bolder">CBFC: </h7>
                                    <span class="text-decoration">'.$row['CDFC'].'</span>
                                    <br>
                                    <h7 class="fw-bolder">Launguage: </h7>
                                    <span class="text-decoration">'.$row['launguage'].'</span>
                                    <br>
                                    <h7 class="fw-bolder">Platform: </h7>
                                    <span class="text-decoration">'.$row['platform'].'</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="ott detailspage.php?id='.$row['id'].'">Know More</a>
                                
                                </div>
                            </div>
                        </div>
                    </div> ';
                } ?>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
