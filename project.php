<!DOCTYPE html>
<html>
<head>
	<title> Project</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="project.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Porject</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="project.php">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" id="">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="">contact</a>
        </li>
      </ul>
      <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/roberto-lopez.jpg" alt="Los Angeles" class="d-block" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/wallpaperbetter.jpg" alt="Germany" class="d-block" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Germany</h3>
        <p>Thank you, Germany!</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/ducati.jpg" alt="Big bike" class="d-block" width="1100" height="500">  
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the  Ducati bike!</p>
      </div>  
    </div>
  </div>
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section class="my-3">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/wallpaperbetter.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Project.</h2>
      <p class="py-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <a href="about.php" class="btn btn-success"> check More</a>
  </div>
</div>
</div>
</section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center"> Login</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div><br>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div><br>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" autocomplete="off" class="form-control">
        </div><br>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div><br>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments">
          </textarea>
          </div><br>
          <button type="submit" class="btn btn-success">Submit
          </button>
      </form>
    </div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">91-8072151658</p>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>