
        <div class="public">
            <div class="login_inner_wrapper ">
                <form action="?lg=login" method="post">
                    <div class="card p-3 form_login" style="width: 30rem;">
                        <div class="my-3 mx-auto">
                            <h3>Đăng nhập</h3>
                        </div>
                        <?php if(isset($_COOKIE['fail'])): ?>
                            <p class="alert alert-danger"> <?=$_COOKIE['fail']?> </p>
                        <?php endif ?>
                        <?php if(isset($_COOKIE['success'])): ?>
                            <p class="alert alert-success"> <?=$_COOKIE['success']?> </p>
                        <?php endif ?>
                       <div class="mt-3">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" placeholder="Nhập email .." name="email">
                       </div>
                       <div class="mt-3">
                            <label for="" class="form-label fw-bold">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                       </div>
                       <div class="mt-3 d-flex justify-content-between">
                            <div>
                                <input type="checkbox" name="remember_user" id="remember_user" class="form-check-input">
                            <label for="remember_user" class="form-check-label">Nhớ tài khoản</label>
                            </div>
                            <div class="">
                                <a href="?lg=forgot">Quên mật khẩu</a>
                            </div>
                       </div>
                       <input type="submit" value="Đăng nhập" class="btn btn-outline-success my-3" name="signin">
                       <div class="mt-3">
                        <span>Bạn chưa có tài khoản ?</span>
                        <a href="?lg=register">Đăng ký ngay</a>
                        </div> 
                        <div class="mt-3 text-center">
                            <a href="index.php" class="">Trở về</a>
                        </div> 
                    </div>
                </form>
            </div>
        </div>