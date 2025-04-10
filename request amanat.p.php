<?php
 include_once('./header/personel-header.php');
include './config/dbname2.php';
?>

<div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">دنبال چه میگردید؟</a>
          <form class="d-flex" method="get">
            <input class="form-control me-2" name="search" type="search" placeholder="بنویسید..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">جستجو</button>
          </form>
        </div>
      </nav>
        <table class="table table-hover table-bordered a-ranandecolor  align-middle">
            <thead>

              <tr class="table-dark">
                <th scope="col">شماره</th>
                <th scope="col">  نام کاربر </th>
                <th scope="col">نام خانوادگی کاربر</th>
                <th scope="col">  وضعیت </th>
              </tr>
            </thead>
            <tbody>
            <?php
            if (!isset($_GET["search"])){
            $amanat=$database->prepare("SELECT * FROM amanat WHERE vaziat=0 GROUP BY codekarbar");
            $amanat->execute();
            $all=$amanat->fetchAll(PDO::FETCH_ASSOC);
            $i=0;
            foreach ($all as $item):
            $i++;
            ?>
              <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $item["namekarbar"] ?></td>
                  <td><?php echo $item["familykarbar"] ?></td>
                <td><a type='button'  class='btn btn-outline-success'  href="./p-amanat.php?codemeli=<?php echo $item["codekarbar"] ?>">درحال انتظار...</a>
                </td>
            </tr>
            <?php
            endforeach;
            }
            ?>



            <?php
            include 'config/dbname.php';
            if (isset($_GET['search'])) :
                $filtervalues = $_GET['search'];
                $query = "SELECT ROW_NUMBER() OVER() AS 'ردیف',
              namekarbar,
              familykarbar,
       codekarbar
            FROM amanat
            WHERE  CONCAT(namekarbar,familykarbar,codekarbar) LIKE '%$filtervalues%' GROUP BY codekarbar";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) :
                    foreach ($query_run as $items) : ?>
                        <tr>
                            <td><?= $items['ردیف']; ?></td>
                            <td><?= $items['namekarbar']; ?></td>
                            <td><?= $items['familykarbar']; ?></td>
                            <td><a  class='btn btn-outline-success'  href="./p-amanat.php?codemeli=<?php echo $items["codekarbar"] ?>">درحال انتظار...</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                else :
                    ?>

                    <tr>
                        <td colspan="9">جستجوی شما نتیجه ای در بر نداشت</td>
                    </tr>
                <?php
                endif;
            endif;
            ?>
    
   

 
            </tbody>
          </table>  
        

    
    
       
             
         
        </div>
        </div>
      
        <?php
include 'footer/p-footer.php';
?>
    

           

<!--
    <div class=" col-10">
     <br><br><br>
     <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">دنبال چه میگردید؟</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="بنویسید..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">جستجو</button>
          </form>
        </div>
      </nav>
        <table class="table table-hover table-bordered border-success  align-middle text-center">
            <thead>
          
            </thead>
            <tbody>
              <tr class="table-light border-success">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModall"  >
                    ...</button></td>
                    <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabell" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable  ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">  کتاب های  </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                      

                                 
                                            <thead>
                                                                    
                                              <tr class="table-dark">
                                                <th scope="col">شماره</th>
                                                <th scope="col"> عنوان کتاب  </th>
                                                <th scope="col">نویسنده کتاب  </th>
                                                <th scope="col">مترجم کتاب  </th>
                                                <th scope="col">  کد کتاب   </th>
                                                <th scope="col">  موضوع    </th>
                                                <th scope="col">  سال انتشار    </th>
                                                <th scope="col">  وضعیت  </th>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                              </tr>
                                            </thead>
                                              <tr class="table-light border-success">
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                
                                            </tr>
                                              <tr class="table-secondary border-success">
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-success border-success">
                                                <th scope="row">4</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-light border-success">
                                                <th scope="row">5</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr class="table-secondary border-success">
                                                <th scope="row">6</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr >
                                                <th scope="row">7</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                
                                              </tr>
                                              <tr class="table-success border-success">
                                                <th scope="row">8</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                              <tr class="table-light border-success">
                                                <th scope="row">9</th>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>@twitter</td>
                                                <td>Mark</td>
                                
                                              </tr>
                                        
                                            
                                
                                
                                            
                                        
                                   
                                
                                    
                                   
                                
                                 
                                            </tbody>         
                                            </table>                
                                    <br><br><br><br>
                                <div class="col-12 col-md-6 ps-6 justify-content-end">
                                  <button type="submit" class="btn btn-primary  rounded-pill btn-lg" data-bs-toggle="collapse" href="#collapseExample" id="liveToast"> ثبت</button>
                                  <button type="button" class="btn btn-secondary   rounded-pill" data-bs-dismiss="modal">بستن</button>
                      
                                  <div class="toast-container position-fixed bottom-0 start-0 p-3">
                                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                      <div class="toast-header " dir="ltr">
                                        <img src="./image/p.png" class="rounded me-2" alt="..." height="40px" width="40px">
                                        <strong class="me-auto">Bootstrap</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                      </div>
                                      <div class="toast-body">
                                        Hello, world! This is a toast message.
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <br><br>
                                  <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                      اطلاعات شما با موفقیت ثبت شد.
                                    </div>
                                  </div>
                                </div>
                                </div>
                                </div>
          </div>                      

            </tr>
            
              <tr class="table-secondary border-success">
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
                    ...</button></td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class= "btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  >
                    ...</button></td>


              </tr>
              <tr class="table-success border-success">
                <th scope="row">4</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

            

              </tr>
              <tr class="table-light border-success">
                <th scope="row">5</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

                
              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">6</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

           

              </tr>
              <tr >
                <th scope="row">7</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-success border-success">
                <th scope="row">8</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>

                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

              </tr>
              <tr class="table-light border-success">
                <th scope="row">9</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">10</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

         
              </tr>
              <tr >
                <th scope="row">11</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

               
              </tr>
              <tr class="table-success border-success">
                <th scope="row">12</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
              <tr class="table-light border-success">
                <th scope="row">13</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

               
              </tr>
              <tr class="table-secondary border-success">
                <th scope="row">14</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>

                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

              </tr>
              <tr>
                <th scope="row">15</th>
                <td >Larry the Bird</td>
                <td>@twitter</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>

                
              </tr>
              <tr class="table-success border-success">
                <th scope="row">16</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
               <td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-success ">...</button></td>


              </tr>
            


            
        
   

    
   

            </tbody>
          </table>  
        

    
    
    
        
             
         
        </div>
        </div>
      
    
    
-->
           

          
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
     crossorigin="anonymous">
    </script>
    </body>