<div class="card">
            <div class="card-body">
              <h4 class="mb-2">Thật tồi tệ . Bạn quên mật khẩu? 🔒</h4>
              <p class="mb-4">Nhập email để khôi phục mật khẩu </p>
              <form id="formAuthentication" class="mb-3" action="../../model/quenmk.php" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <button class="btn btn-primary d-grid w-100" name="forgot">Gửi link đến email</button>
              </form>
              <div class="text-center">
                <a href="?lg=login" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                  Trở lại đăng nhập
                </a>
              </div>
            </div>
          </div>