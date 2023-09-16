
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Cake</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/assets/css/customize.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../view/assets/js/customize.js"></script>
</head>
<body>
    <div class="wrapper">
<!-- header -->
        <div class="fixed-top">
                <nav class="navbar navbar-expand-lg bg-warning bg-gradient mb-5">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <a href="">
                                <img src="../view/assets/img/customize/just-shop-logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
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
                                    <li><a class="dropdown-item" href="#">Bánh</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- login -->
                       
                        <?php
                        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                            echo '<div>
                                    <form action="" method="post">
                                        <label for="">
                                            <input type="submit"><i class="fas fa-search"></i></i></input>
                                        </label>
                                        <input type="text" placeholder="Tìm kiếm...">
                                    </form>
                                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                </div>';
                        }
                        else{
                            echo '<div>
                                    <a href="index.php?act=login" class="btn btn-outline-success">Đăng nhập</a>
                                    <a href="#" class="btn btn-outline-success">Đăng ký</a>
                                </div>';
                        }
                        ?>
                    </div>
                </nav>
            </div>
            

        <!-- slider -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade margin_top">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../view/assets/img/customize/banner-1.png" class="d-block w-100" alt="../view/assets/img/customize/banner-1.png">
                </div>
                <div class="carousel-item">
                    <img src="../view/assets/img/customize/banner-2.jpg" class="d-block w-100" alt="../view/assets/img/customize/banner-2.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../view/assets/img/customize/banner-3.jpg" class="d-block w-100" alt="../view/assets/img/customize/banner-3.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- home main -->
    <div class="container-fluid">
        
        <div class="row">
        <h3 class="p-4">Sản phẩm</h3>
            <div class="col-sm-3">
                <div class="card">
                    <div>
                        <img src="../view/assets/img/customize/pr-1.webp" alt="" class="img_product">
                    </div>
                    <div class="card-body">
                        <h5 class="card-tiitle">Tên sản phẩm 1</h5>
                        <span class="text-danger fs-4 fw-bold">120.000</span>
                        <p class="card-text">thông tin sản phẩm 1</p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sản phẩm  -->
            <div class="col-sm-3">
                <div class="card">
                    <img src="../view/assets/img/customize/pr-1.webp" alt="" class="img_product">
                    <div class="card-body">
                        <h5 class="card-tiitle">Tên sản phẩm 2</h5>
                        <span class="text-danger fs-4 fw-bold">120.000</span>
                        <p class="card-text">thông tin sản phẩm 2</p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sản phẩm  -->
            <div class="col-sm-3">
                <div class="card">
                    <img src="../view/assets/img/customize/pr-1.webp" alt="" class="img_product">
                    <div class="card-body">
                        <h5 class="card-tiitle">Tên sản phẩm 3</h5>
                        <span class="text-danger fs-4 fw-bold">120.000</span>
                        <p class="card-text">thông tin sản phẩm 3</p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sản phẩm  -->
            <div class="col-sm-3">
                <div class="card">
                    <img src="../view/assets/img/customize/pr-1.webp" alt="" class="img_product">
                    <div class="card-body">
                        <h5 class="card-tiitle">Tên sản phẩm 4</h5>
                        <span class="text-danger fs-4 fw-bold">120.000</span>
                        <p class="card-text">thông tin sản phẩm 4</p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sản phẩm  -->
        </div>
    </div> 
    <!-- end sản phẩm -->
    <div class="row"></div>

    <!-- footer -->
    <footer>
        <div class="row bg-warning bg-gradient">
            <span class="">Copyright &2342 2023</span>
            <span class="d-flex">Ngày bắt đầu : 11/9/2023</span>
        </div>
    </footer>
</body>
</html>