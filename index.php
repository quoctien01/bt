
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>
<body>
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4 ">
          <img alt="Bootstrap Image Preview" src="img/logo.png" class="img-logo img-responsive" />
        </div>
        <div id="pc" class="col-lg-5 col-md-7 col-sm-8 ">
          <div class="container-fluid">
            <ul class="nav justify-content-start">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Foods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div id="mobile">
          <nav class="navbar navbar-dark bg-dark justify-content-end">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
          <div class="collapse " id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <a class="nav-link " href="#">Home</a>
              <a class="nav-link" href="#">Categories</a>
              <a class="nav-link" href="#">Foods</a>
              <a class="nav-link " href="#">Contact</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid ">
    <div class="row search">
      <div class="col-md-12 search-center">
        <input type="text" placeholder="Search for food....">
        <button class="bg-success">Search</button>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-fluid">
      <h3 class="text-center" style="margin: 40px 0 30px">Explore Foods</h3>
      <div class="row">
        <div class="col">
        </div>
        <div class="col-md-3  col-sm-4 explore-food">
          <img class="img-reponsive" src="img/burger.jpg" alt="">
          <h4>MOMO</h4>
        </div>
        <div class="col-md-3 col-sm-4  explore-food">
          <img class="img-reponsive" src="img/momo.jpg" alt="">
          <h4>MOMO</h4>
        </div>
        <div class="col-md-3 col-sm-4  explore-food">
          <img class="img-reponsive" src="img/pizza.jpg" alt="">
          <h4>MOMO</h4>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
    <div class="container-fluid bg-success">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center" style="margin: 30px">Food Menu</h3>
            <div class="row row-foods">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12 ">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/menu-pizza.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Food Tile</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/menu-burger.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Smoky Burger</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
              </div>
            </div>
            <div class="row row-foods">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/menu-burger.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Nice Burger</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/menu-pizza.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Food Tile</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
              </div>
            </div>
            <div class="row row-foods">
              <div class="col-md-1">
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12 ">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/menu-burger.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Food Tile</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="row foods-menu">
                  <div class="col-md-4">
                    <img src="img/momo.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                    <h3>Chicken Steam Momo</h3>
                    <h3>$2.3</h3>
                    <p>Made with Italian Sauce, Chicken,and<br>organice vegetables.</p>
                    <button>Order Now</button>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
              </div>
            </div>
            <p class="text-center" style="margin: 30px ;color:red">See All Food</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-12 footer">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-center " style="margin:20px">All right reseved.Designed by CSE</p>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
