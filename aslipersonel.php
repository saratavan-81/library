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
       <link rel="stylesheet" href="./style.css">

</head>
<body>
      
  <nav class="navbar  fixed-top shadow " style="background-color: #6610f2;">
    <div class="container-fluid" >
      <img src="./image/home.png" alt="" width="60" height="60" class="d-inline-block align-text-top">

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

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb"><nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">        <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
      <li class="breadcrumb-item active" aria-current="page">صفحه پرسنل</li>
    </ol>
  </nav>

    
      
               
      <div class="mb-5"></div>
      <div  class=" conteiner row gx-3">
      <div class="list-group   col-2">
        <a  class="list-group-item list-group-item-action disabled col-6 list-group-flush" aria-current="true" >
          <div class="d-flex w-100 justify-content-between">
            <br><br>
            <small><img src="./image/journal-bookmark-fill.svg " class="img-fluid" alt="..." height="50px" width="50px"></small>
          </div>    
        </a>
        </a>
        <div class="dropdown dropend">
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown" style="background-color:#6610f2; color: white;">   <br><br>
            <img src="./image/book.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>نمایش کتاب های کتابخانه</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> کتاب ها</h6></li>
          <li><a class="dropdown-item" href="./book adabiatp.html">ادبیات و فرهنگ</a></li>
          <li><a class="dropdown-item" href="./book ejtemaiip.html"> اجتماعی</a></li>
          <li><a class="dropdown-item" href="./book shimip.html">  سیاسی</a></li>
          <li><a class="dropdown-item" href="./book romanp.html">  رمان </a></li>
          <li><a class="dropdown-item" href="./book falsafep.html">فلسفه و منطق </a></li>
          <li><a class="dropdown-item" href="./book mazhabi va dinip.html"> مذهبی و دینی</a></li>
          <li><a class="dropdown-item" href="./book riaziatp.html">  ریاضیات</a></li>
          <li><a class="dropdown-item" href="./book fizikp.html">  فیزیک</a></li>
          <li><a class="dropdown-item" href="./book shimip.html">  شیمی</a></li>
          <li><a class="dropdown-item" href="./book bazi va sargarmip.html">  بازی و سرگرمی</a></li>
          <li><a class="dropdown-item" href="./book ashpazip.html">  اشپزی</a></li>
          <li><a class="dropdown-item" href="./book varzeshp.html">  ورزشی</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#"> نمایش همه کتاب ها</a></li>        
        </ul>
        </div>
        <div class="dropdown dropend">
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown" style="background-color:#6610f2; color: white;">      <br><br>
            <img src="./image/journal-check.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>امور کتاب های کتابخانه</p>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
          <li><h6 class="dropdown-header"> مدیریت کتاب ها</h6></li>
          <li><a class="dropdown-item" href="#">افزودت کتاب </a></li>
          <li><a class="dropdown-item" href="#">ویرایش اطلاعات کتاب  </a></li>
        </ul>
        </div>
        <a href="#"  class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center btn-outline-dark" style="background-color:#6610f2; color: white;">     <br><br>
            <img src="./image/person-fill.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>نمایش  همه ی کاربران عضو کتابخانه</p>
        </a>
        <a  href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center  btn-outline-dark" style="background-color:#6610f2; color: white;">     <br><br>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info text-dark ">
                99+
                </span>
            <img src="./image/journal-arrow-up.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>نمایش کتاب های به امانت رفته شده </p>
        </a>
      
        <a  href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center  btn-outline-dark" style="background-color:#6610f2; color: white;">        <br><br>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info text-dark">
                99+
                </span>
            <img src="./image/lightbulb-fill.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>صفحه در خواست امانت کتاب توسط افراد عضو </p>
        </a>
        
        <a  href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center btn-outline-dark " style="background-color:#6610f2; color: white;">        <br><br>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info text-dark ">
                99+
                </span>
            <img src="./image/shield-check.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>تایید ویرایش ااطلاعات کاربران </p>
        </a>
   
        <a  href="#" class="list-group-item list-group-item-action list-group-item-warning  d-flex justify-content-between align-items-center  btn-outline-dark" style="background-color:#6610f2; color: white;">     <br><br>
            <img src="./image/file-arrow-up-fill.svg" class="img-fluid" alt="..." height="25px" width="25px">
<p>صفحه اصلی</p>
        </a>
   
        <a   class="list-group-item list-group-item-action " style="background-color:#6610f2; color: white;">
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
<br><br>
<br>
<br><br>
<br><br>
<br><br>
<br>    <br><br>
<br><br>
<br><br>
<br>    <br><br>
<br><br>
<br><br>
<br>    <br><br>
<br><br>
<br><br>
<br>
    
    </a>
    </div>
    <div class=" col-9">
  
      
        <p>
    
          <br><br><br>
          <div class="container">
            <div class="row align-items-center">
              <div class=" col-md-6">
                <h4 class="fw-bold mb-4">کتابخانه سارا </h4>
                <p> سلام خدمت کاربران سایت <br>کتابخانه سارا به منظور سهولت در تهیه کتاب برای شما عزیزان طرح ریزی شده است تا
                  <mark>  با خیال اسوده ، در کمترین زمان و بدون حضور در کتابخانه</mark>
                  نسبت به ثبت نام  ،ویرایش اطلاعات ،اگاهی از کتاب های کتابخانه، تمدید عضویت ، تمدید امانت ، زمان اتمام امانت اقدام کنید.
                  <strong>امیدوار هستیم که توانسته باشیم با این اقدام درصد کتابخانی در جامعه را افزایش و رفاه و اسوده خاطری را برای شما به ارمغان اورده باشیم</strong>
                  <u>.خواهشمند هستیم تا در صورت حضور در کتابخانه تمام پروتکل های بهداشتی را رعایت کنید</u></p>
                </p>
          </div>      
              <div class=" col-6">
                <img src="./image/home.png" class="img-fluid" alt="...">
          
          
              </div>
              </div>
              </div>
              <br><br><br><br>    <br><br><br><br>
              <br><br><br><br>
          

            <div class="row ">
              <div class="col-sm-6">
              <div class="card  border-warning">
                <div class="card-header bg-warning text-dark">
                  گفتگو مدیر کتابخانه با پرسنل در تاریخ 1400/1/15
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-info">Go somewhere</a>
                </div>
              </div>
              </div>
              <div class="col-sm-6">
                <div class="card  border-warning">
                  <div class="card-header text-dark bg-warning">
                    گفتگو جلسه پرسنل و مدیر کتابخانه در تاریخ 1401/1/17            
                        </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-info">Go somewhere</a>
                  </div>
                </div>
                </div>
                <div class="col-sm-6">
                  <div class="card  border-warning">
                    <div class="card-header bg-warning text-dark">
                      اطلاعیه امروز در مورد کرونا و  تاثیر شرایط ان بر  کتابخانه                     
                          </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-info ">Go somewhere</a>
                    </div>
                  </div>
                  </div>
                    <br><br>
                    <div class="col-sm-6">
                      <div class="card  border-warning">
                        <div class="card-header bg-warning text-dark">
                          گفتگو ی امروز سرپرست پرسنل با کادر پرسنل کتابخانه    
                          </div>
                            <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="#" class="btn btn-info">Go somewhere</a>
                        </div>
                      </div>
    </div>
    
    </div>
    <br><br><br><br>
 <div class="row">
  <div class="col-6">

    <div class="card mb-6" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./image/1.gif" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>




    </div>
    <div class="col-6">

    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./image/1.gif" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="col-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./image/1.gif" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="col-6">

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="./image/1.gif" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>


 </div>
    
    
    
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1" >
              <div class="card card-body">
                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body ">
                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-body">
                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
              </div>
            </div>
          </div>
         
    
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active " data-bs-interval="2000">
          <img src="./image/1.gif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./image/2.gif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item " data-bs-interval="2000">
          <img src="./image/11.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
    </div>
    </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <div class="col-12">
<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active " data-bs-interval="3000">
      <img src="./image/aa.gif" class="d-block w-50 h-25 mx-auto" alt="..." >
      <div class="carousel-caption d-none d-md-block">
    
      </div>
    </div>
 
    
    <div class="carousel-item " data-bs-interval="3000">
      <img src="./image/ww.gif" class="d-block w-50 h-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>  <div class="carousel-item " data-bs-interval="3000">
      <img src="./image/قق.gif" class="d-block w-50 h-25 mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
    
    
  </div>
  
</div>   <br><br>
  </div>

<div class="container">
 
  <br><br><br><br>
  <br><br><br><br>

              <h1 class="display-5  text-center">Display 5</h1>
  <div class="container">
    <div class="row  justify-content-evenly  " style="height: 300px; ">
      <div class="col-3  align-self-center  bg-light  p-4  border">
        1
      </div>
      <div class="col-3  align-self-center  bg-light  p-4  border">
        2
      </div>
      <div class="col-3  align-self-center  bg-light  p-4  border">
        3
      </div>

      <br><br><br><br>

  <div class="container">
    <div class="row justify-content-evenly  ">
      <div class="col-3  align-self-end  bg-light  p-4  border">
        1
      </div>
      <div class="col-3  align-self-end  bg-light  p-4  border">
        2
      </div>
      <div class="col-3  align-self-end  bg-light  p-4  border">
        3
      </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    <div style="height: 150px; overflow: hidden;" >
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-1.40,5.42 C150.00,150.00 349.20,-49.98 500.27,30.08 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(246, 245, 245);">
        </path></svg></div>
        
    <footer class="bg-light">
   <div class="conteiner ">  
     <div class="row ">  
       <div class="col-4 ">
         
         <h3 class="fw-bold">
           libraly
         </h3>
         <p>
           کتابخانه سارا کتابخانه دارای اعتماد با انواع کتاب ها در خدمت همگان .
         </p>
         <img src="./image/instagram.svg" class="img-fluid" alt="..." height="35px" width="35px">
         &nbsp;
         <img src="./image/telegram.svg" class="img-fluid" alt="..." height="35px" width="35px">
         &nbsp;

         <img src="./image/youtube.svg" class="img-fluid" alt="..." height="35px" width="35px">
         &nbsp;

         <img src="./image//whatsapp.svg" class="img-fluid" alt="..." height="35px" width="35px">
<br><br>
       </div>
       <div class="col-8"> 
         <div class="row">  
           <div class="col-3"> 
             <h6 class="fw-bold footer-h">
               بخش های وبسایت
             </h6>
             <ul class="list-unstyled">
               <li>
                 <a class="footer"  href="#">صفحه اصلی</a>
               </li>
               <li class="my-2">
                <a class="footer" href="#">افزئدن کتاب </a>
               </li>
               <li class="my-2">
                <a class="footer" href="#">ویرایش اطلاعات کتاب</a>
               </li>
               <li class="my-2">
                <a class="footer" href="#">حذف کتاب   </a>
               </li>
               <li class="my-2">
                <a class="footer" href="#"> نمایش همه کاربران عضو کتابخانه</a>
               </li>
               <li class="my-2">
                <a class="footer" href="#"> نمایش کتاب های به امانت رفته شده</a>
               </li>
               <li class="my-2">
                <a class="footer" href="#">  صفحه در خواست امانت کتاب توسط کاربران  
                </a>
               </li>
               <li class="mt-2">
                <a class="footer " href="#"> تایید ویرایش اطلاعات کاربران </a>
               </li>
               <li class="mt-2">
                <a class="footer " href="#"> نمایش همه کتاب های کتابخانه    </a>
               </li>
             </ul>
              </div>
              &nbsp;           &nbsp;           &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;



           <div class="col-3">  
            <h6 class="fw-bold footer-h">
              درباره کتابخانه
            </h6>
            <ul class="list-unstyled">
              <li class="my-2">
               <a class="footer" href="#">قوانین کتابخانه </a>
              </li>
              <li class="my-2">
               <a class="footer" href="#">صفحه درباره کتابخانه  </a>
              </li>

           
            </ul>
             </div>
             &nbsp;           &nbsp;           &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;

             &nbsp;
             &nbsp;


           <div class="col-3">  
            <h6 class="fw-bold footer-h">
              راه های ارتبلاطی با ادمین
            </h6>
            <ul class="list-unstyled">
              <li>
                <a class="footer"  href="#">090059061459   تلفن همراه </a>
              </li>
              <li class="my-2">
               <a class="footer" href="#"> 3-2240253     تلفن ثابت </a>
              </li>
              <li class="my-2">
               <a class="footer" href="#">saratavan81@gmail.com      ایمیل ادمین </a>
              </li>
      
                   </ul>
             </div>
           </div>

         </div>
       </div>
    </footer>
           

          
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
    </body>