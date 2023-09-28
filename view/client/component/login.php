<div class="card">
            <div class="card-body">
            <?php if(isset($_COOKIE['fail']) || isset($_COOKIE['success']) ):?>
              <!-- toast fail -->
              <div class="toast align-items-center fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                  <div class="toast-body">
                    <div <?= isset($_COOKIE['fail'])? 'class="text-danger"' : 'class="text-success"' ?> >
                      <?= isset($_COOKIE['fail'])? $_COOKIE['fail'] : $_COOKIE['success'] ?>
                    </div>
                  </div>
                  <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
              </div>
              <!--end toast fail -->
              <?php endif ?>
              <p class="mb-4">Vui lòng nhập Email và mật khẩu để đăng nhập</p>
              <form id="formAuthentication" class="mb-3" action="../../controller/LoginController.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email "
                    autofocus
                  />
                  <?php if(isset($_COOKIE['error'])): ?>
                    <span class="badge text-danger"><?=$_COOKIE['error']?> </span>
                  <?php endif?>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="?lg=forgot">
                      <small>Quên mật khẩu?</small>
                    </a>
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
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <input class="btn btn-primary d-grid w-100" type="submit" name="signin">Sign in</input>
                </div>
              </form>

              <p class="text-center">
                <span>Bạn là khách hàng mới ?</span>
                <a href="?lg=register">
                  <span>Tạo tài khoản ngay thôi</span>
                </a>
                <div class="mt-3 text-center">
                    <a href="../../controller/index.php">Trở về</a>
                </div>
              </p>
            </div>
          </div>