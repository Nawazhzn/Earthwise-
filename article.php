<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Earth Wise</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/png" href="img/favicon.png" />
</head>

<body>
  <!--* Navbar  -->
  <nav class="navbar fixed-top navbar-expand-md navbar-dark p-md-3" style="background-color: #212529;" >
    <div class="container-fluid"  >
      <a class="navbar-brand" href="#"></a>
      <img src="img/earth-wise-logo.png" alt="logo" class="nav-logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white aa" href="#">Explore</a>
          </li>
          <!-- <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Sign Up</a>
          </li>
          <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Login</a>
          </li> -->
          <div class="nav-divider"></div>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Chanaka</a>
            <ul class="dropdown">
             <li>
              <a class="nav-link text-white" href="#">Dashboard</a>
             </li>
             <li>
              <a class="nav-link text-white" href="#">Logout</a>
             </li>
                
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br>

  <!--* Footer Section -->
  <div class="footer-dark">
    <footer>
      <div class="container-fluid footer-container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-3 footer-col-1">
            <img src="img/earth-wise-logo.png" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.</p>
          </div>
          <div class="col-md-4 col-lg-6 footer-col-2">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="article.php">Article</a></li>
              <li><a href="#">Explore</a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-3 footer-col-3">
            <h3>Subscribe to our Newsletter!</h3>
            <form>
              <div class="form-group">
                <input type="email" class="sub-email" placeholder="Enter Your Email"><br />
                <button type="submit" class="btn">Subscribe</button>
              </div>
            </form>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
          </div>
          <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a
              href="#"><i class="icon ion-social-instagram"></i></a></div>
        </div>
      </div>
      <div class="container-fluid copyright-section">
        <div class="container-fluid copyright-content">
          <div class="row">
            <div class="col">
              <p>EarthWise © 2021. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div> 




</body>
</html>