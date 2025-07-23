<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Discussion project</title>
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Style CSS -->
     <link rel="stylesheet" href="public/style.css" />
</head>
<body>
<header class="bg-light">
<nav class="navbar container navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Discuss Group</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Latests Question</a>
      </li>
    </ul>

    <?php if(isset($_SESSION['user'])):?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php else:?>
      <div class="d-flex gap-2">
      <a href="/projects/6.Discuss%20Project/index.php" class="btn btn-outline-primary mr-2">Login</a>
      <a href="/projects/6.Discuss%20Project/client/register.php" class="btn btn-primary">Sign Up</a>
    </div>
      <?php endif;?>
  </div>
</nav>
</header>