<div class="public">
      <div class="login_inner_wrapper ">
          <form action="?lg=register" method="post">
              <div class="card p-3 form_login" style="width: 30rem;">
                  <div class="my-3 mx-auto">
                      <h3>Đăng ký</h3>
                  </div>
                  <?php if(isset($_COOKIE['error'])): ?>
                    <span class="badge text-danger"> <?=$_COOKIE['error']?></span>
                  <?php endif?>
                  <div class="mt-3">
                      <label for="email" class="form-label fw-bold">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email ..">
                  </div>
                  <div class="mt-3">
                      <label for="hoten" class="form-label fw-bold">Họ tên</label>
                      <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Nhập email ..">
                  </div>
                  <div class="mt-3">
                      <label for="password" class="form-label fw-bold">Mật khẩu</label>
                      <input type="password" id="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                  </div>
                  <div class="mt-3">
                  <label for="repassword" class="form-label fw-bold">Nhập lại Mật khẩu</label>
                  <input type="password" id="repassword" class="form-control border-danger" name="repassword" placeholder="Nhập mật khẩu">
              </div>
                  <div class="mt-3 d-flex justify-content-between">
                      <!-- đăng nhập bằng gg phát triển thêm -->
                  </div>
                  <input type="submit" value="Đăng ký" class="btn btn-outline-success my-3" name="signup">
                  <div class="mt-3">
                  <span>Bạn đã có tài khoản ?</span>
                  <a href="?lg=login">Đăng nhập ngay</a>
                  </div>
                  <div class="mt-3 text-center">
                      <a href="index.php" class="">Trở về</a>
                  </div>
              </div>
          </form>
      </div>
  </div>

