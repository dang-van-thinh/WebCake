

          <div class="public">
            <div class="login_inner_wrapper ">
                <form action="?lg=forgot" method="post">
                    <div class="card p-3 form_login" style="width: 30rem;">
                        <div class="my-3 mx-auto">
                            <h3>Quên mật khẩu</h3>
                        </div>
                        <?php if(isset($_COOKIE['fail'])): ?>
                            <p class="alert alert-danger"> <?=$_COOKIE['fail']?> </p>
                        <?php endif ?>
                       <div class="mt-3">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Nhập email ..">
                       </div>
                       <input type="submit" value="Gửi mã tới Email" class="btn btn-outline-success my-3" name="forgot">
                       <div class="mt-3">
                        <span>Bạn đã có tài khoản ?</span>
                        <a href="?lg=login">Đăng nhập ngay</a>
                        <div class="mt-3 text-center">
                            <a href="index.php" class="">Trở về</a>
                        </div>
                   </div>
                    </div>
                </form>
            </div>
        </div>