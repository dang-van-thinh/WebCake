<div class="margin_top">
    <div class="container my-3">
        <form action="" method="post" enctype="multipart/form-data" class="border p-4">
            <div class="my-3">
                <h3 class="">Thông tin khách hàng</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form_img">
                        <?php if($kh['anh'] == ""):?>
                        <img src="../view/assets/img/customize/avatar-macdinh.webp" alt="" class="" width="100%">
                        <?php else: ?>
                        <img src="<?=$kh['anh']?>" alt="" class="" width="100%">
                        <?php endif ?>
                    </div>
                    <input type="file" name="" id="" class="form-control my-2" value="Brower">
                </div>
                <div class="col-md-4">
                    <div class="mt-3">
                        <label for="ten_kh" class="form-label">Tên khách hàng</label>
                        <input type="text" name="ten_kh" id="ten_kh" value="<?=$kh['hoten']?>" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Mật khẩu</label>
                        <input type="password" name="" id="" value="" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="<?=$kh['email']?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    
                </div>
             </div>
        </form>
        <!-- thông tin đơn hàng mà khách hàng đã đặt -->
        <div class="row">
                <div class="my-3">
                    <h3>Thông tin sản phẩm khách hàng</h3>
                </div>
             </div>
       
    </div>
</div>