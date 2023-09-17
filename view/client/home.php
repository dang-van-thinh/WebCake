
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
    <div class="container">
        
        <div class="row">
            <h3 class="p-4 d-flex justify-content-center text-uppercase fw-bold">Bánh trung thu</h3>
            <?php 
                if(isset($hhtt)):foreach($hhtt as $key=>$item):
            ?>
            <div class="col-md-3 col-sm-4">
                <div class="card my-4 product-item" id="">
                    <div class="img_hover p-1">
                        <a href="?act=chitiet&id=<?=$item['ma_hh']?>&idloai=<?= $item['ma_loai']?>">
                            <img src="<?=$item['anh']?>" alt="" class="img_product" id="imgProduct">
                        </a>
                        <input type="hidden" name="" id="idHangHoa" value="<?=$item['ma_hh']?>">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h5 class="card-title my-2 text-uppercase"><?=$item['ten_hh']?></h5>
                            <div>
                                <span class="text-danger fs-4 fw-bold" id="price"><?=$item['don_gia']?></span>
                                <span>&#8363</span>
                            </div>
                            
                        </div>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info addToCart"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php endif ?>
            <!-- end sản phẩm  -->
            
            <div class="d-flex justify-content-center my-3">
                <a href="#" class="btn btn-outline-warning">Xem thêm</a>
            </div>
        </div> 
        <!-- end row -->

        <div class="row">
            <h3 class="p-4 d-flex justify-content-center text-uppercase fw-bold">Bánh mới nhất</h3>
            <?php 
                if(isset($hhmoi)):foreach($hhmoi as $key=>$item):
            ?>
            <div class="col-md-3 col-sm-4">
                <div class="card my-4 product-item" >
                    <div class="img_hover p-1">
                        <a href="?act=chitiet&id=<?=$item['ma_hh']?>&idloai=<?= $item['ma_loai']?>">
                            <img src="<?=$item['anh']?>" alt="" class="img_product">
                        </a>
                        <input type="hidden" name="" id="idHangHoa" value="<?=$item['ma_hh']?>">
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h5 class="card-title my-2 text-uppercase"><?=$item['ten_hh']?></h5>
                            <div>
                                <span class="text-danger fs-4 fw-bold" id="price"><?=$item['don_gia']?></span>
                                <span>&#8363</span>
                            </div>
                            
                        </div>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-success">Mua bánh</a>
                            <a href="#" class="btn btn-outline-info addToCart"><i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php endif ?>
            <!-- end sản phẩm  -->
            
            <div class="d-flex justify-content-center my-3">
                <a href="#" class="btn btn-outline-warning">Xem thêm</a>
            </div>
        </div> 
        <!-- end row 2 -->
    </div> 
    <!-- end home main --> 
    
     <!-- form đặt bánh -->
    <?php if(isset($_SESSION['email']) && (isset($_SESSION['password']))):?>
        <div class="my-4 container-fluid">
            <div class="d-flex justify-content-center" id="background_form">
                <form action="" method="post" class="border p-4 my-3 ">
                    <div class="text-uppercase">
                        <h3 class="text-danger fw-bold">Đặt bánh online ngay !</h3>
                        <p class="text-white text-center">Chờ chi nữa</p>
                    </div>
                   <div class="mt-3 text-white">
                        <div>
                            <label for="hoten" class="form-label">Họ tên</label>
                            <input type="text" name="hoten" id="hoten" placeholder="Điền họ tên của bạn" class="form-control">
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" placeholder="Điền email của bạn" class="form-control">
                        </div>
                        <div>
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" placeholder="Điền số điện thoại của bạn" class="form-control">
                        </div>
                        <div>
                            <label for="noidung" class="form-label">Nội dung</label>
                            <textarea name="noidung" id="" cols="30" rows="10" placeholder="Nhập nội dung của bạn ở đây " class="form-control"></textarea>
                        </div>
                        <div class="text-center mt-3">
                            <input type="submit" value="Đặt ngay" name="datngay" class="btn btn-danger">
                        </div>
                   </div>
                </form>
            </div>
        </div>
    <?php endif?>
        <!--end form đặt bánh -->

    <!-- tin tức -->
    <div class="row mx-5">
        <div class="text-uppercase text-center fw-bold">
            <h3>Tin tức</h3>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <div class="img_hover p-1">
                    <a href="#">
                        <img src="../view/assets/img/customize/avatar-tt-1.webp" alt="" class="img_new">
                    </a>
                </div>
                <div class="card-body">
                    <div class="">
                        <h6 class="card-title my-2">Tên sản phẩm 1</h6>
                        <div class="card-text">
                            <p>
                            Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola 
                            Trắng thơm ngậy cùng với lớp sữa chua ở giữa và trên cùng là lớp Mousse Chanh Leo tươi thanh mát. Trang trí trên cùng là lớp mứt Chanh Leo và Socola.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tin tức -->
        <div class="col-md-4">
            <div class="card my-4">
                <div class="img_hover p-1">
                    <a href="#">
                        <img src="../view/assets/img/customize/avatar-tt-1.webp" alt="" class="img_new">
                    </a>
                </div>
                <div class="card-body">
                    <div class="">
                        <h6 class="card-title my-2">Tên sản phẩm 1</h6>
                        <div class="card-text">
                            <p>
                            Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola 
                            Trắng thơm ngậy cùng với lớp sữa chua ở giữa và trên cùng là lớp Mousse Chanh Leo tươi thanh mát. Trang trí trên cùng là lớp mứt Chanh Leo và Socola.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tin tức -->
        <div class="col-md-4">
            <div class="card my-4">
                <div class="img_hover p-1">
                    <a href="#">
                        <img src="../view/assets/img/customize/avatar-tt-1.webp" alt="" class="img_new">
                    </a>
                </div>
                <div class="card-body">
                    <div class="">
                        <h6 class="card-title my-2">Tên sản phẩm 1</h6>
                        <div class="card-text">
                            <p>
                            Bánh được làm từ 3 lớp Gato xen lẫn lớp Mousse Vanilla và Socola 
                            Trắng thơm ngậy cùng với lớp sữa chua ở giữa và trên cùng là lớp Mousse Chanh Leo tươi thanh mát. Trang trí trên cùng là lớp mứt Chanh Leo và Socola.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tin tức -->
    </div>
    <!--end tin tức -->
    
   