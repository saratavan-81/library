<button type='button' class='btn btn-outline-danger'><a class='text-black' data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">ویرایش</a></button>

<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropEditLabel" aria-hidden="true">
                  <div class="modal-dialog" id="modaldialogEdit">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropEditLabel"> <?= $items['namebook']; ?> ویرایش اطلاعات کتاب</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body p-0 px-4"></div>
                      <div class="col-9">
                        <div class="container">
                          <div class="row  justify-content-center">
                            <div class="col-md-12">
                              <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                برای ویرایش کردن اطلاعات طبق قانون کتابخانه عمل کرده در غیر اینصورت اطلاعات کتاب ثبت نخواهد شد. برای نمایش قانون فرم کتابخانه بر روی <a href="#" class="alert-link"> قانون اطلاعات کتابخانه </a> کلیک کنید
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="tellbookeditetalat">
                          <form class="container needs-validation text-primary border border-warning border-3 rounded" novalidate>
                            <div class="row ">
                              <div class="mb-3 col-md-6 shadow">
                                <label for="a"> عنوان کتاب جدید </label>
                                <input type="text" class="form-control" id="a" value="<?= $items['namebook']; ?>" name="name" required>
                                <div class="invalid-feedback">
                                  لطفا نام جدید کتاب را وارد کنید.
                                </div>
                              </div>
                              <br>
                              <div class="mb-3 col-md-6 shadow">
                                <label for="a">کد کتاب </label>
                                <input type="text" class="form-control" id="a" placeholder="فاطمه" name="name" required>
                                <div class="invalid-feedback">
                                  لطفا کد جدید کتاب را وارد کنید.
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="row ">
                              <div class=" col-md-6 shadow ">
                                <label for="c" class="form-label"> نام نویسنده </label>
                                <input type="text" class="form-control" id="c" placeholder="..." required>
                                <div class="invalid-feedback">
                                  لطفا رمز عبور را وارد کنید.
                                </div>
                              </div>
                              <br>
                              <div class="  col-md-6 shadow ">
                                <label for="lp" class="form-label">مترجم </label>
                                <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="lp" required>
                                <div class="invalid-feedback">
                                  لطفا ایمیل خود را وارد کنید.
                                </div>

                              </div>
                            </div>
                            <br>

                            <div class="row ">
                              <div class=" col shadow  ">
                                <label for="213.1" class="form-label"> انتخاب موضوع</label>
                                <input class="form-control" list="datalistOptions213.1" id="213.1" placeholder="انتخاب روز..." required>
                                <datalist id="datalistOptions213.1">
                                  <option value="ادبیات و فرهنگ">
                                  <option value="اجتماعی">
                                  <option value="سیاسی">
                                  <option value=" داستانی">
                                  <option value="رمان ">
                                  <option value="فلسفه و منطق">
                                  <option value="مذهبی و دینی">
                                  <option value="ریاضی">
                                  <option value="فیزیک">
                                  <option value="شیمی">
                                  <option value="بازی و سرگرمی">
                                  <option value="اشپزی">
                                  <option value="ورزشی">

                                </datalist>
                                <div class="invalid-feedback">
                                  لطفا روز تولد خود را وارد کنید.
                                </div>
                                <br>
                              </div>
                              <div class="row ">
                                <div class=" col-6 shadow">
                                  <label for="222.3" class="form-label">سال چاپ </label>
                                  <input class="form-control" list="11.2" id="222.3" placeholder="انتخاب روز..." required>
                                  <datalist id="datalistOptions">
                                    <?php for ($i = 1; $i <= 31; $i++) {
                                      echo "<option value='$i'>";
                                    } ?>
                                  </datalist>
                                  <div class="invalid-feedback">
                                    لطفا سال چاپ کتاب را وارد کنید.
                                  </div>

                                </div> <br>
                                <div class=" col-6 shadow  ">
                                  <label for="222.4" class="form-label">چاپ چندم؟</label>
                                  <input type="number" class="form-control" id="222.4" placeholder="..." required>
                                  <div class="invalid-feedback">
                                    لطفا روز تولد خود را وارد کنید.
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-12 shadow ">
                                  <label for="22" class="form-label">انتخاب تصویر جلد کتاب </label>
                                  <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="22" multiple required>
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <div class="invalid-feedback">
                                      لطفا اسکن صفحه اول و دوم شناسنامه خود را انتخاب کنید.
                                    </div>
                                  </div>
                                </div>


                              </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <div class="col-12 col-md-6 ps-6  shadow ">
                        <button type="submit" class="btn btn-primary  rounded-pill  " data-bs-toggle="collapse" href="#collapseExample" id="liveToast">Sign in</button>
                      </div>
                    </div>

                  </div>
                </div>