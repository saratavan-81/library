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
<div class="admin"> 
<?php

?>
      <nav class="navbar  fixed-top shadow " style="background-color: #240351;">
        <div class="container-fluid" >
          <img src="./image/img/7.svg" alt="" width="60" height="60" class="d-inline-block align-text-top">

        </div>
      </nav>
      <br><br><br><br>      

        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb"><nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">صفحه اصلی</a></li>
          <li class="breadcrumb-item"><a href="a-index.php">صفحه ادمین</a></li>

<?php if (basename($_SERVER['PHP_SELF']) == 'a-etelat.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">صفحه  اطلاعات ادمین </a></li>

<?php elseif (basename($_SERVER['PHP_SELF']) == 'hame bookaa.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">  همه ی کتاب های کتابخانه</a></li>

  <?php elseif (basename($_SERVER['PHP_SELF']) == 'hame personel.aa.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">   همه ی پرسنل </a></li>

  <?php elseif (basename($_SERVER['PHP_SELF']) == 'sabtpersonel.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href="">ثبت نام پرسنل</a></li>

  <?php elseif (basename($_SERVER['PHP_SELF']) == 'hame karbarana.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href=""> همه کاربران کتابخانه</a></li>

  
  <?php elseif (basename($_SERVER['PHP_SELF']) == 'hame ranandegan.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href=""> همه رانندگان کتابخانه</a></li>

  <?php elseif (basename($_SERVER['PHP_SELF']) == 'sabt ranandegan.php') : ?>
  <li class="breadcrumb-item"><a class="nav-link tcolor p-0" href=""> ثبت نام رانندگان </a></li>

  <?php endif; ?>
        </ol>
      </nav>
                
      <div class="mb-5"></div>
      
      <div  class=" conteiner row gx-3">
      <div class="list-group   col-2">
        <a  class="list-group-item list-group-item-action disabled col-6 list-group-flush" aria-current="true" >
          <div class="d-flex w-100 justify-content-start">
            <br><br>
              <small><img src="./image/img/19.svg " class="img-fluid align-items-center" alt="..." height="50px" width="50px"><span class="text-center"><?php echo $_SESSION["name"]." ".$_SESSION["family"]; ?></span> </small>
          </div>    
        </a>
        </a>






 
        <a href="./a-etelat.php"  class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-start align-items-center btn-outline-dark" style="background-color:#240351; color: white;">     <br><br>
            <img src="./image/img/22.svg" class="img-fluid" alt="..." height="80px" width="80px">
<p>اطلاعات ادمین</p>
        </a>


        
        <div class="dropdown dropend list-group-flush">
        <a href="#" class="list-group-item list-group-item-action  d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark " data-bs-toggle="dropdown" style="background-color:#240351; color: white;">      <br><br>
          <img src="./image/img/15.svg" class="img-fluid " alt="..." height="80px" width="80px" >
          <p>نمایش کتاب های کتابخانه</p>

        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header">  کتاب ها </h6></li>
          
            <li><a class="dropdown-item" href="./hame bookaa.php"> نمایش همه کتاب ها</a></li>
          </ul>
        </div>
        <div class="dropdown dropend">
        <a href="#" class="list-group-item list-group-item-action   d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark " data-bs-toggle="dropdown" style="background-color:#240351; color: white;">   <br><br>
            <img src="./image/img/16.svg" class="img-fluid" alt="..." height="50px" width="50px">
<p>امور پرسنلی</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> پرسنل</h6></li>
          <li><a class="dropdown-item" href="./hame personel.aa.php"> نمایش همه پرسنل  </a></li>
            <li><a class="dropdown-item" href="./sabtpersonel.php">ثبت نام پرسنل</a></li>
            
          </ul>
        </div>
        <div class="dropdown dropend">
        <a href="#"  class="list-group-item list-group-item-action   d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown"  style="background-color:#240351; color: white;">      <br><br>
            <img src="./image/img/17.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>امور کاربران عضو کتابخانه</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> کاربران</h6></li>
            <li><a class="dropdown-item" href="./hame karbarana.php">نمایش همه ی کاربران عضو کتابخانه</a></li>
          </ul>
          </div>
          <div class="dropdown dropend">
        <a  href="#" class="list-group-item list-group-item-action   d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown"  style="background-color:#240351; color: white;">      <br><br>
            <img src="./image/img/18.svg" class="img-fluid" alt="..." height="50px" width="50px">
<p>امور رانندگان کتابخانه</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> رانندگان</h6></li>
            <li><a class="dropdown-item" href="./hame ranandegan.php">نمایش همه ی رانندگان کتابخانه</a></li>
            <li><a class="dropdown-item" href="./sabt ranandegan.php"> ثبت نام رانندگان کتابخانه</a></li>


          </ul>
          </div>
          <div class="dropdown dropend">
        <a href="#"  class="list-group-item list-group-item-action   d-flex justify-content-start align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown"  style="background-color:#240351; color: white;">      <br><br>
            <img src="./image/img/6.svg" class="img-fluid" alt="..." height="60px" width="60px">
<p>بازگشت به ...</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="./a-index.php">صفحه ادمین</a></li>
            <li><a class="dropdown-item" href="./index.php">صفحه اصلی</a></li>
            <li><a class="dropdown-item" href="./config/logout.php">خروج از حساب کاربری </a></li>


        </ul>
          </div>
 
   
        <a   class="list-group-item list-group-item-action " style="background-color:#240351; height: 200%;">
   
  

</a>
      </div>

