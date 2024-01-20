<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Art Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="web.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/oilpainting.jpg" alt="Oil painting" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Oil painting</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/findart.jpg" alt="Find Art" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Find Art</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/pencilart.jpg" alt="Pencil Art" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Pencil Art</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/modernart.jpg" alt="Modern Art" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Modern Art</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/illustrationart.jpg" alt="llustration Art" width="1100" height="500">
      <div class="carousel-caption">
        <h3>llustration Art</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img/surjya.jpg" class="img-fluid aboutimg">
            </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4"> I AM SHUVAM KUNDU</h2>
                    <p class="py-3">I am a IT student.This is my web page Art Gallery.</p>
                    <a href="about.php" class="btn btn-success"> Check More </a>
                </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/oil.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Oil Painting</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/find.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Find Art</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/pencil.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Pencil Art</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/modern.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Modern Art</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/llustration.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">llustration Art</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img/graffiti.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Graffiti Art</h4>
                        <p class="card-text">View More Click This</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our ART</h2>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature1.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature2.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature3.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature4.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature5.jpg" class="img-fluid pb-4">
            </div>       
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature6.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature7.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature8.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="img/nature9.jpg" class="img-fluid pb-4">
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our ART</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
               <label>User Name</label>
               <input type="text" name="user" autocomplete="off" class="form-control"> 
            </div>
            <div class="form-group">
               <label>Email Address</label>
               <input type="text" name="email" autocomplete="off" class="form-control"> 
            </div>
            <div class="form-group">
               <label>Mobile No</label>
               <input type="text" name="mobile" autocomplete="off" class="form-control"> 
            </div>
            <div class="form-group">
               <label>Comments</label>
               <textarea class="form-control" name="comments">
               </textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button> 
            </div>
        </form>
    </div>
</section>


<footer>
    <p class="p-3 bg-dark text-white text text-center">@shuvamartgallery</p>
</footer>








  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  
</body>
</html>



