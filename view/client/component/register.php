<div class="card">
            <div class="card-body">
              <p class="mb-4 alert alert-success">Hãy tạo tài khoản đặt hàng ngay thôi</p>
              <form id="formAuthentication" class="mb-3" action="../../controller/LoginController.php" method="POST">
              <div class="mb-3">
                  <label for="hoten" class="form-label">Họ và tên</label>
                  <input
                    type="text"
                    class="form-control"
                    id="hoten"
                    name="hoten"
                    placeholder="Enter your name "
                    autofocus
                  />
                 
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email "
                    autofocus
                  />
                  <?php if(isset($_COOKIE['error'])): ?>
                    <span class="badge text-danger"> <?=$_COOKIE['error']?></span>
                  <?php endif?>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Mật khẩu</label>
            
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Nhập lại mật khẩu</label>
            
                  </div>
                  <div class=" input-group input-group-merge">
                    <input 
                      type="password"
                      id="repassword"
                      class="form-control border border-danger"
                      name="repassword"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                
                <div class="mb-3">
                  <input class="btn btn-primary d-grid w-100" type="submit" name="signup" value="Đăng ký">
                </div>
              </form>

              <p class="text-center">
                <span>Bạn đã có tài khoản ?</span>
                <a href="?lg=login">
                  <span>Đăng nhập ngay</span>
                </a>
                <div class="mt-3 text-center">
                    <a href="../../controller/index.php">Trở về</a>
                </div>
              </p>
            </div>
          </div>