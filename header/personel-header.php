<?php
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link 
     rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" 
      integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q"
       crossorigin="anonymous">
       <link rel="stylesheet" href="./style/style.css">
       <link rel="stylesheet" href="../style/font.css">


</head>
<body>
<div class="personel"> 

  <nav class="navbar  fixed-top shadow " style="background-color:#240351;">
    <div class="container-fluid" >
      <img src="./image/img/7.svg" alt="" width="60" height="60" class="d-inline-block align-text-top">

      <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
        <img src="./image/search.svg" alt="" width="40" height="40" class="d-inline-block align-text-top">

      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">صفحه جستجو :</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
    
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="دنبال چه می گردید ؟" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">جستجو</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br><br>      

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb"><nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">        
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
      <li class="breadcrumb-item"><a href="p-index.php">صفحه پرسنل</a></li>

          <?php if (basename($_SERVER['PHP_SELF']) == 'p-etelat.php') : ?>
            <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">صفحه  اطلاعات پرسنل </a></li>

          <?php elseif (basename($_SERVER['PHP_SELF']) == 'hamebook.p.php') : ?>
            <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">  همه ی کتاب های کتابخانه</a></li>

            <?php elseif (basename($_SERVER['PHP_SELF']) == 'hame karbaran.p.php') : ?>
            <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">   همه ی کاربران عضو کتابخانه</a></li>

            <?php elseif (basename($_SERVER['PHP_SELF']) == 'hame book be amanat.p.php') : ?>
            <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">نمایش کتاب های به  امانت رفته شده</a></li>

            <?php elseif (basename($_SERVER['PHP_SELF']) == 'request amanat.p.php') : ?>
            <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href=""> درخواست امانت کتاب توسط افراد عضو</a></li>

    

            <?php endif; ?>

          
    </ol>
  </nav>

    
      
               
      <div class="mb-5"></div>
      
      <div  class=" conteiner row gx-3 ">
      <div class="list-group   col-2">
        <a  class="list-group-item list-group-item-action disabled col-6 list-group-flush" aria-current="true" >
            <div class="d-flex w-100 justify-content-start">
                <br><br>
                <small><img src="./image/img/19.svg " class="img-fluid align-items-center" alt="..." height="50px" width="50px"><span class="text-center"><?php echo $_SESSION["name"]." ".$_SESSION["family"]; ?></span> </small>
            </div>
        </a>
        </a>
        <a href="./p-etelat.php"  class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center btn-outline-dark" style="background-color:#240351; color: white;">     <br><br>
            <img src="./image/img/21.svg" class="img-fluid" alt="..." height="80px" width="80px">
<p>اطلاعات پرسنل</p>
        </a>
        
        <div class="dropdown dropend">
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown" style="background-color:#240351; color: white;">   <br><br>
            <img src="./image/img/8.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>نمایش کتاب های کتابخانه</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> کتاب ها</h6></li>

          <li><a class="dropdown-item" href="./hamebook.p.php"> نمایش همه کتاب ها</a></li>
        </ul>
        </div>
    
        <a href="./hame karbaran.p.php"  class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center btn-outline-dark" style="background-color:#240351; color: white;">     <br><br>
            <img src="./image/img/10.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>نمایش  همه ی کاربران عضو کتابخانه</p>
        </a>
        <a  href="./hame book be amanat.p.php" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center  btn-outline-dark" style="background-color:#240351; color: white;">     <br><br>
           
            <img src="./image/img/12.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>نمایش کتاب های به امانت رفته شده </p>
        </a>
      
        <a  href="./request amanat.p.php" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center  btn-outline-dark" style="background-color:#240351; color: white;">        <br><br>
      
            <img src="./image/img/13.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>صفحه در خواست امانت کتاب توسط افراد عضو </p>
        </a>

        <div class="dropdown dropend">
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown"style="background-color:#240351; color: white;">     <br><br>
          <img src="./image/img/1.svg" class="img-fluid" alt="..." height="80px" width="80px">
<p>   بازگشت به...</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="./p-index.php"> صفحه پرسنل</a></li>
          <li><a class="dropdown-item" href="./index.php"> صفحه اصلی  </a></li>
            <li><a class="dropdown-item" href="./config/logout.php"> خروج از حساب کاربری  </a></li>
        </ul>
        </div>
     
   
     
   
        <a   class="list-group-item list-group-item-action " style="background-color:#240351; color: white; height: 200%;">

    
    </a>
    </div>