<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo wp_title(); ?></title>

<?php wp_head(); ?>
<link href=<?php echo esc_url(get_template_directory_uri()."/css/bootstrap.min.css");?> rel="stylesheet" type="text/css">
<link href="<?php echo esc_url(get_template_directory_uri() . "/css/owl.carousel.min.css"); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo esc_url(get_template_directory_uri() . "/css/aos.css"); ?>" rel="stylesheet" type="text/css">
<link href=<?php echo esc_url(get_template_directory_uri()."/css/base.css");?> rel="stylesheet" type="text/css">
<link href=<?php echo esc_url(get_template_directory_uri()."/css/style.css");?> rel="stylesheet" type="text/css">
<link href=<?php echo esc_url(get_template_directory_uri()."/css/media.css");?> rel="stylesheet" type="text/css">	
<link rel="icon" type="image/x-icon" href=<?php echo esc_url(get_template_directory_uri()."/images/favicon.ico");?>>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="main-cnt">
<!--Header Start -->
<header class="main-header mb-2" id="myHeader">
<nav class="navbar navbar-expand-xl navbar-light">
  <div class="container align-items-center">

    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img alt="Credits365" src="<?php echo esc_url(get_template_directory_uri()."/images/credits-logo.svg");?>"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav gap-xl-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="dropend">
              <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <div class="topright-btn d-flex gap-3 mt-3 mb-3 mb-xl-0 mt-xl-0">
        <a href="#" class="btn btn-secondary">Contact Us</a>
        <a href="#" class="btn btn-primary">Login</a>
      </div>
    </div>

  </div>
</nav>
</header>
<!--Header End-->
          