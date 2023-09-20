<!-- header -->
<div class="fixed-top fw-bold">
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand px-3" href="?act=home">
            <img src="../view/assets/img/customize/just-shop-logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 fs-5 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="?act=home">Trang chủ</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh mục
                </a>
                <ul class="dropdown-menu">
                    <?php foreach($loai as $key=>$item):?>
                        <li class="fs-6">
                            <a class="dropdown-item" href="?act=loaihh&iddm=<?=$item['ma_loai']?>"><?=$item['ten_loai']?></a>
                        </li>
                    <?php endforeach?>
                </ul>
            </li>
    
          </ul>
          <div class="d-flex mx-5">
            <ul class="navbar-nav me-5 px-5">
                <li class="nav-item">
                    <div class="my-2">
                        <form action="" method="post" class="input-group">
                            <button name="" type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                            <input type="text" name="" id="" class="form-control" placeholder="Tìm kiếm">
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?act=cart" >
                        <div class="btn btn-outline-success">
                            <i class="fas fa-shopping-cart"><span id="numberCart" class=""></span></i>
                        </div>
                    </a>
                </li>
                <?php if(isset($_SESSION['email']) && (isset($_SESSION['password'])) && (isset($_SESSION['img']))):?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if($_SESSION['img'] == ""):?>
                            <img src="../view/assets/img/customize/avatar-macdinh.webp" alt="" class="img_user">
                        <?php else:?>
                            <img src="<?= $_SESSION['img']?>" alt="" class="img_user">
                        <?php endif?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="?act=chitietkh&idkh=<?= $_SESSION['idkh']?>">Hồ sơ 
                                <span class="ms-5 text-success"><i class="fas fa-info"></i></span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Cài đặt
                                <span class="ms-5"></span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" onclick="return confirm('Bạn có muốn đăng xuất ?')" href="LoginController.php?logout">Đăng xuất
                                <span class="ms-5 text-danger"><i class="fas fa-sign-out-alt"></i></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php else:?>
                <!-- login success -->
                <li class="nav-item">
                    <div class="my-2">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a class="btn btn-outline-success" href="?act=login" >
                                    Đăng Nhập
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-success" href="?act=register" >
                                    Đăng ký
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end login success -->
            <?php endif ?>
            </ul> 
          </div>
        </div>
      </div>
    </nav>
</div>




                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav px-5 nav navbar-brand">
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
                </div>
                
                    
            </div>