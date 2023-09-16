<!-- header -->
<div class="fixed-top fw-bold">
                <nav class="navbar navbar-expand-lg bg-warning bg-gradient mb-5">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="?act=home">
                                <img src="../view/assets/img/customize/just-shop-logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav px-5">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="?act=home">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Phản hồi</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Danh mục sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($loai as $key=>$item):?>
                                         <li>
                                            <a class="dropdown-item" href="?act=loaihh&iddm=<?=$item['ma_loai']?>"><?=$item['ten_loai']?></a>
                                        </li>
                                    <?php endforeach?>
                                </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- login -->
                       <div class="me-5">
                        <?php
                            if(isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['role'])): ?>
                                <div class="d-flex">
                                    <form action="" method="post" class="btn-group">
                                        <label for=""><button type="submit" class="btn btn-outline-dark"><i class="fas fa-search"></i></button></label>
                                        <input type="text" placeholder="Tìm kiếm..." class="form-control">
                                    </form>
                                    <div class="">
                                        <a href="?act=cart" class="btn btn-outline-success px-4 mx-4">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span id="numberCart"></span>
                                        </a>
                                    </div>
                                    <div class="dropdown me-5">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php if( $_SESSION['img'] !=""):?> 
                                            <img src="<?= $_SESSION['img']?>" alt="anhkhachhang" class="img_user">
                                            <?php else :?>
                                                <img src="../view/assets/img/customize/avatar-macdinh.webp" alt="anhkhachhang" class="img_user">
                                            <?php endif?>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="#" class="nav-link">Thông tin</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="nav-link" href="LoginController.php?logout" onclick="return confirm('Bạn có chắc muốn đăng xuất ?')">Đăng xuất</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a class="nav-link" href="#">Something</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div>
                                    <a href="index.php?act=login" class="btn btn-outline-success">Đăng nhập</a>
                                    <a href="?act=register" class="btn btn-outline-success">Đăng ký</a>
                                </div>
                            <?php endif ?>

                             <!-- alet toast -->
                            
                       </div>
                        
                    </div>
                </nav>
            </div>