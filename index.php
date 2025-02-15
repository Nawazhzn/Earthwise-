<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php")
?>
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
<nav class="navbar fixed-top navbar-expand-md navbar-dark p-md-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      
      <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="img/earth-wise-logo.png" alt="logo" class="nav-logo" ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?php echo BASE_URL . '/index.php' ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="article.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white aa" href="gallery.php">Gallery</a>
          </li>
          <div class="nav-divider"></div>
          <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a class="nav-link text-white" href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul >
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="nav-link text-white" >Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php' ?>" class="nav-link text-white" >Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>" class="nav-link text-white">Login</a></li>
      <?php endif; ?>
          
        </ul>
        
      </div>
    </div>
  </nav>

  

  <!--* Cover Section -->
  <div class='cover-section'>
    <div class='cover-image'></div>
    <div class='container'>
      <div class='row cover-content'>
        <div class='col'>
          <div class='row'>
            <div class='col'>
              <div class='cover-text'>SAVE NATURE<br />SAVE THE FUTURE</div>
            </div>
          </div>
          <div class='row'>
            <div class='col col-lg-2'>
              <button type="button" class="btn cover-button btn-outline-light">MORE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--* Cover Cards -->
  <div class="cover-card-section">
    <div class="container-fluid cover-card-container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
          <div class="card cover-card text-left flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-1-1.png"></img>
              <h5 class="card-title">CARBON DIOXIDE</h5>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-1">
                    <img class="arrow-icon" src="img/home/arrow-icon.png"></img>
                  </div>
                  <div class="col-auto">
                    <p class="card-text">416</p>
                  </div>
                  <div class="col">
                    <p class="card-sup">parts per million</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
          <div class="card cover-card text-left flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-1-2.png"></img>
              <h5 class="card-title">GLOBAL TEMPERATURE</h5>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-1">
                    <img class="arrow-icon" src="img/home/arrow-icon.png"></img>
                  </div>
                  <div class="col-auto">
                    <p class="card-text">2.1</p>
                  </div>
                  <div class="col">
                    <p class="card-sup"><sup>o</sup>F since 1880</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
          <div class="card cover-card text-left flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-1-3.png"></img>
              <h5 class="card-title">ARCTIC ICE MINIMUM</h5>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-1">
                    <img class="arrow-icon" src="img/home/arrow-icon.png"></img>
                  </div>
                  <div class="col-auto">
                    <p class="card-text">13.1</p>
                  </div>
                  <div class="col">
                    <p class="card-sup">percent per decade</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 d-flex">
          <div class="card cover-card text-left flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-1-4.png"></img>
              <h5 class="card-title">SEA LEVEL</h5>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-1">
                    <img class="arrow-icon" src="img/home/arrow-icon.png"></img>
                  </div>
                  <div class="col-auto">
                    <p class="card-text">3.3</p>
                  </div>
                  <div class="col">
                    <p class="card-sup">mm per year</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cover-bottom-text">Vital Signs of our planet</div>
      </div>
    </div>
  </div>

  <!--* Main Content Area -->
  <div class="container-fluid news-container">
    <div class='news-section'>
      <h1 class="topic">LATEST NEWS</h1>
      <p class="sub-topic">
      What is climate change? Is it the same as global warming? When did climate become a hot topic in the world’s agenda? <br /> What are its main causes and consequences? 
      </p>
      <div class="container-fluid news-container">
        <div class="row my-4">
          <div class="col">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 d-flex">
                  <div class="card news-card flex-fill">
                    <figure class="image">
                      <img src="img/home/news-1.jpg" alt="waves">
                    </figure>
                    <div class="card-box">
                      <h2 class="title">How our planet has changed over time</h2>
                      <section class="content">
                        <p>It can be challenging to visualize the effects of climate change when it happens over time and on such a large scale
                        </p>
                        <p class="date">January 12, 2021</p>
                        <div class="row justify-content-end">
                          <div class="col">
                            <p class="button">Read more</p>
                          </div>
                          <div class="col-1">
                            <span class="material-icons">arrow_forward</span>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 d-flex">
                  <div class="card news-card flex-fill">
                    <figure class="image">
                      <img src="img/home/news-2.jpg" alt="waves">
                    </figure>
                    <div class="card-box">
                      <h2 class="title">NASA and the new urgency of climate change</h2>
                      <section class="content">
                        <p>Environmental Defense Fund’s MethaneSAT is to be “launch ready” 
                        in September 2022. Credit: Ball Aerospace Corp.
                        </p>
                        <p class="date">January 12, 2021</p>
                        <div class="row justify-content-end">
                          <div class="col">
                            <p class="button">Read more</p>
                          </div>
                          <div class="col-1">
                            <span class="material-icons">arrow_forward</span>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 d-flex">
                  <div class="card news-card flex-fill">
                    <figure class="image">
                      <img src="img/home/news-3.jpg" alt="waves">
                    </figure>
                    <div class="card-box">
                      <h2 class="title">Protesting Climate Change </h2>
                      <section class="content">
                        <p>Young People Take to Streets in a Global Strike,
                        Anxious about their future on a hotter planet and angry at world leaders
                         
                        </p>
                        <p class="date">January 12, 2021</p>
                        <div class="row justify-content-end">
                          <div class="col">
                            <p class="button">Read more</p>
                          </div>
                          <div class="col-1">
                            <span class="material-icons">arrow_forward</span>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn">VIEW ALL</button>
      </div>
    </div>
  </div>

  


<!-- Modal -->
<div class="modal fade" id="model1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How is the climate change happening?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>As we know, earth’s climate is changing throughout the history. Most of the climate changes have small variations. In present, the global warming is happened as a result of human activity since the 20th century. Scientists have enabled satellites and different type of technical advanced devices to see the big picture and collect information about the climate change. Those data collected over many years. They analyze the changes and identify the periods of climate changes.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="model2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Why is the climate change happening?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>There are many reasons for climate changes. Main 2 reasons are natural and human inducted factors. These climate changes are always happened on earth. Greenhouse gases in the atmosphere absorbs the heat radiation. After the industrial revolution, the amount of greenhouse gases increased in atmosphere. It makes more heat retention and an increase in surface temperatures. The Intergovernmental Panel on Climate Change, which consist of more than 1,300 scientists from all the countries, forecasts a temperature rise of 2.5 to 10 degrees Fahrenheit over the next century. The drought seasons in southwest will be more intense and the cold waves will become low everywhere. The temperature is the summer season will be increased and the reduction of soil moisture is a main reason for that. In the mid-century, the ice level in the arctic ocean going to be very low in summer. The thing is temperature rise will not be linear. Part of what makes climate change so urgent is that temperatures will continue to increase long after greenhouse gas emissions are curbed. Scientists are telling that the melting of glaziers going to be increase the sea water level and it will change the entire climate system on the earth.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="model3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">What are the effects of climate change?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Climate changes happen because of physical environment, eco systems and human inducted factors. From those, human caused climate change is very harmful for the sustainability. Most of the climatic changes are already visible. Extreme weather events, glazier retreat, seasonal changes, sea level rise and declines in arctic sea ice are some examples. Since 1980s, ocean has taken up around 20% to 30% of human inducted CO2. This is a reason for ocean acidification. The ocean is also warming since 1970s. Also, the ocean absorbed more than 90% of heat in the atmosphere. The impact from the climate change to the eco systems and humans is very high. When it combines with climate variability, it can happen food insecurity and it can be a harmful effect to the fresh water supply.  Also, it leads to make a negative effect to the human health. Climate changes also have an effect to the desertification and land degradation all around the world. In near future, the change of the climate will be a huge problem. As prevention methods we can reduce greenhouse gas emissions and adapt to unchangeable climatic effects. By focusing limited time frame we can find the impacts for global climate change, ecosystems and human societies and change those issues that affect for the long term climate change impacts.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="model4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">What is being done to solve climate change?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Climate change is one of the most complex issues facing us today. It involves many dimensions – science, economics, society, politics and moral and ethical questions – and is a global problem, felt on local scales, that will be around for decades and centuries to come. Carbon dioxide, the heat-trapping greenhouse gas that has driven recent global warming, lingers in the atmosphere for hundreds of years, and the planet (especially the oceans) takes a while to respond to warming. So even if we stopped emitting all greenhouse gases today, global warming and climate change will continue to affect future generations. In this way, humanity is “committed” to some level of climate change.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--* Section 3 - Climate Change -->
  <div class='sec-3'>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex">
          <div class="card sec-3-card flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-3-1.png"></img>
              <h5 class="card-title">EVIDENCE</h5>
              <p class="card-text">How do we know<br />climate change is<br />real? </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model1">
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex">
          <div class="card sec-3-card flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-3-2.png"></img>
              <h5 class="card-title">CAUSES</h5>
              <p class="card-text">Why is climate<br />change is<br />happening?</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model2">
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex">
          <div class="card sec-3-card flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-3-3.png"></img>
              <h5 class="card-title">EFFECTS</h5>
              <p class="card-text">What are the<br />effects of climate<br />change?</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model3">
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 d-flex">
          <div class="card sec-3-card flex-fill">
            <div class="card-body">
              <img class="icon-image" src="img/home/home-3-4.png"></img>
              <h5 class="card-title">SOLUTION</h5>
              <p class="card-text">What is being done<br />to solve climate<br />change?</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model4">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--* Gallery Section -->
  <div class="gallery-content">
    <div class="container-fluid">
      <h1 class="topic">EXPLORE GALLERY</h1>
      <p class="sub-topic">
      Our image gallery is a complete photo gallery with photos of harsh moments of climate change. <br>It is a valuable place to see what these harsh conditions looks like are.
      </p>
    </div>
  </div>
  <div class="gallery-section">
    <div class="container-fluid">
      <div class="button-overlay">
       <a href="gallery.php" button type="button" class="btn">VIEW ALL</button></a>
      </div>
      <div class="photo-overlay"></div>
      <div class="row">
        <div class="column">
          <img src="img/home/gallery/gallery-8.jpg">
          <img src="img/home/gallery/gallery-3.jpg">
          <img src="img/home/gallery/gallery-11.jpg">
        </div>
        <div class="column">
          <img src="img/home/gallery/gallery-7.jpg">
          <img src="img/home/gallery/gallery-4.jpg">
        </div>
        <div class="column">
          <img src="img/home/gallery/gallery-5.jpg">
          <img src="img/home/gallery/gallery-1.jpg">
          <img src="img/home/gallery/gallery-6.jpg">
        </div>
        <div class="column">
          <img src="img/home/gallery/gallery-2.jpg">
          <img src="img/home/gallery/gallery-9.jpg">
          <img src="img/home/gallery/gallery-10.jpg">
        </div>
      </div>
    </div>
  </div>

  <!--* Footer Section -->
  <div class="footer-dark">
    <footer>
      <div class="container-fluid footer-container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-3 footer-col-1">
            <img src="img/earth-wise-logo.png" />
            <p>Climate change includes both global warming driven by human-induced emissions of greenhouse gases and the resulting large-scale shifts in weather patterns. 
            Though there have been previous periods of climatic change</p>
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
  


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
</body>

</html>