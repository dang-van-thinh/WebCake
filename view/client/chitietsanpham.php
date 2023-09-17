<div class="margin_top">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4 my-4">
                <div class="">
                    <img src="<?= $onehh['anh']?>" alt="" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-8 my-4">
                <div class="border p-4">
                    <div>
                        <h3 class="text-uppercase"><?= $onehh['ten_hh']?></h3>
                        <hr>
                    </div>
                    <div>
                        <p>Giá: <span class="text-danger fw-bold"><?= $onehh['don_gia']?></span>đ</p>
                        <div class="">Số lượng:
                            <div class="d-flex-inline btn-group">
                                <button class="btn btn-outline-dark">+</button>
                                <input class="form-control " value="1">
                                <button class="btn btn-outline-dark">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-secondary">Thêm vào giỏ hàng</button>
                        <button class="btn btn-danger ">Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- comment và bình luận -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Thông tin sản phẩm</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Bình luận</button>
            </li>
        </ul>
        <div class="tab-content p-4 border mb-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <?php if($onehh['mota']!=""):?>
                    <p><?= $onehh['mota']?></p>
                <?php else:?>
                    <p>Đang cập nhật thông tin sản phẩm</p>
                <?php endif?>   
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="d-flex justify-content-between">
                    <div>
                        <p>0 Bình luận</p>
                    </div>
                    <div>
                        <p>Sắp xếp</p>
                    </div>
                </div>
                <hr>
                <div class="btn-group">
                    <div class=" p-2">
                        <img src="../view/assets/img/customize/just-shop-logo.png" alt="" class="img_user">
                    </div>
                    <div class="">
                        <form action="" method="post">
                            <textarea name="" id="" cols="120" rows="4" class="form-control" placeholder="Bình luận "></textarea>
                            <input type="submit" value="Đăng" class="btn btn-outline-info mt-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end comment và bình luận -->
        <!-- more -->
        <div class="my-4">
            <div class="text-center">
                <h3 class="text-uppercase text-warning-emphasis fw-bold">Có thể bạn cũng thích</h3>
                <p class="text-secondary fw-bold">Sản phẩm tương tự</p>
            </div>
            <div class="row">
                <?php foreach($top4 as $key=>$item):?>
                    <div class="col-md-3 col-sm-4">
                        <div class="card my-4 product-item">
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
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>