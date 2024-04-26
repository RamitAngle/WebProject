<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); $id=$_GET['id']; ?>
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

        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
            <?php $res=mysqli_query($db,"SELECT* from otts WHERE id=$id limit 1");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '

                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="admin/uploads98/'.$row['image'].'" height="600"  class="card-img-top" alt="..." /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder">'.$row['title'].'</h1>
                        <div class="small mb-1">'.$row['ld'].'</div>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration">CBFC :</span>
                            <span>'.$row['CDFC'].'</span>
                            </br>
                            <span class="text-decoration">Launguage :</span>
                            <span>'.$row['launguage'].'</span>
                            </br>
                            <span class="text-decoration">Platform :</span>
                            <span>'.$row['platform'].'</span>
                        </div>
            
                        <p class="lead"></p>
                        <div class="d-flex">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.$row['song_link'].'">Song Download</a></div>
                        </div>
                        <br>
                        <div class="d-flex">  
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.$row['movie_link'].'">Movie Download</a></div>
                        </div>
                    </div>
                </div>
            </div> ';
        } ?>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                
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
