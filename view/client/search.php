<div class="container margin_top">
    <!-- tiêu đề danh mục -->
    <div class="d-flex justify-content-between">
        <div class="my-3 text-uppercase">
            <h3 class="pt-4">từ khóa tìm kiếm : <?= $search ?></h3>
        </div>
        <div class="my-3 ">
            <form action="" method="post" class="p-4">
                <div class="btn-group">
                    <h5 class="">Sắp xếp theo: </h5>
                    <input type="submit" name="" value="Từ thấp đến cao" class="btn_filter">
                    <input type="submit" name="" value="Từ cao xuống thấp">
                </div>
            </form>
        </div>
    </div>
    <!-- hàng hóa -->
    <div class="row">
        <?php foreach($hhsearch as $key=>$item):?>
        <div class="col-lg-3 col-md-4 col-sm-6 ">
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
                            <span class="text-danger fs-4 fw-bold" id="price"><?= number_format($item['don_gia'],0,',','.') ?></span>
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