<div class="container-fluid my-3"> 
    <div>
        <h3>Thêm mới khách hàng</h3>
    </div>
    <?php if(isset($_COOKIE['success'])):?>
    <!-- toast success -->
    <div class="toast align-items-center fade show text-success" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?= $_COOKIE['success']?>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    <!--end toast success -->
    <?php endif ?>
    <?php if(isset($_COOKIE['fail'])):?>
    <!-- toast fail -->
    <div class="toast align-items-center fade show text-danger" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?= $_COOKIE['fail']?>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    <!--end toast fail -->
    <?php endif ?>
    <div>
        <form action="AdminController.php?ad=addkh" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="makh" class="form-label fw-bold">Mã khách hàng</label>
                        <div>
                        <input type="text" name="makh" id="makh" readonly value="Auto mã" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="tenkh" class="form-label fw-bold">Họ và tên</label>
                        <div>
                        <input type="text" name="tenkh" id="tenkh" placeholder="Họ và tên" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="email" class="form-label fw-bold">Địa chỉ Email</label>
                        <div>
                        <input type="text" name="email" id="email" placeholder="Địa chỉ Email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="" class="form-label fw-bold">Kích hoạt ?</label>
                        <div class="">
                       <div class="btn-group mx-3">
                            <label for="1" class="form-check-label">Kích hoạt</label>
                            <input type="radio" name="kichhoat" id="1" value="1" class="form-check-input">
                       </div>
                       <div class="btn-group">
                            <label for="0" class="form-check-label">Chưa kích hoạt</label>
                            <input type="radio" name="kichhoat" id="0" value="0" class="form-check-input">
                       </div>
                    </div>
                    </div>
                    <div class="mt-2">
                        <label for="matkhau" class="form-label fw-bold">Mật khẩu</label>
                        <div>
                        <input type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="rematkhau" class="form-label fw-bold">Nhập lại mật khẩu</label>
                        <div>
                        <input type="password" name="rematkhau" id="rematkhau" placeholder="Nhập lại mật khẩu" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="" class="form-label fw-bold">Chức năng ?</label>
                        <div class="">
                       <div class="btn-group mx-3">
                            <label for="vaitro_1" class="form-check-label">Khách hàng</label>
                            <input type="radio" name="vaitro" id="vaitro_1" value="0" class="form-check-input">
                       </div>
                       <div class="btn-group">
                            <label for="vaitro_0" class="form-check-label">Nhân viên</label>
                            <input type="radio" name="vaitro" id="vaitro_0" value="1" class="form-check-input">
                       </div>
                    </div>

                    <div class="mt-2">
                        <label for="anhkh" class="form-label fw-bold">Ảnh</label>
                        <div>
                        <input type="file" name="anhkh" id="anhkh" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group mt-3">
                <input type="submit" value="Thêm mới" class="btn btn-success mx-2" name="themkh">
                <a href="#" class="btn btn-dark mx-2">Nhập lại</a>
                <a href="?ad=dskh" class="btn btn-info mx-2">Danh sách</a>
            </div>
        </form>
        
            

    </div>
</div>