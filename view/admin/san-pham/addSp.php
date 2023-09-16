<div class="container-fluid mt-3"> 
    <div>
        <h3>Thêm mới sản phẩm</h3>
    </div>
    <?php if(isset($_COOKIE['success'])):?>
    <!-- toast success -->
    <div class="toast align-items-center fade show text-success" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?= $_COOKIE['success']?>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    <!--end toast success -->
    <?php endif ?>
    <?php if(isset($_COOKIE['fail'])):?>
    <!-- toast fail -->
    <div class="toast align-items-center fade show text-danger" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          <?= $_COOKIE['fail']?>
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
    <!--end toast fail -->
    <?php endif ?>
    <div>
        <form action="?ad=addsanpham" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="mahanghoa" class="form-label fw-bold">Mã hàng hóa</label>
                        <div>
                        <input type="text" name="ma_hang" id="mahanghoa" readonly value="Auto mã" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="tenhanghoa" class="form-label fw-bold">Tên hàng hóa</label>
                        <div>
                        <input type="text" name="ten_hang" id="tenhanghoa" placeholder="Tên hàng hóa" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="gia" class="form-label fw-bold">Đơn giá</label>
                        <div>
                        <input type="text" name="gia" id="gia" placeholder="Giá hàng hóa" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="" class="form-label fw-bold">Hàng đặc biệt ?</label>
                        <div class="">
                       <div class="btn-group mx-3">
                            <label for="1" class="form-check-label">Đặc biệt</label>
                            <input type="radio" name="dac_biet" id="1" value="1" class="form-check-input">
                       </div>
                       <div class="btn-group">
                            <label for="0" class="form-check-label">Không đặc biệt</label>
                            <input type="radio" name="dac_biet" id="0" value="0" class="form-check-input">
                       </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="anh" class="form-label fw-bold">Hình ảnh</label>
                        <div>
                        <input type="file" name="anh" id="anh" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="ngay_nhap" class="form-label fw-bold">Ngày nhập</label>
                        <div>
                        <input type="date" name="ngay_nhap" id="ngay_nhap" placeholder="Ngày nhập" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="loai" class="form-label fw-bold">Loại hàng hóa</label>
                        <select name="loai_hang" id="" class="form-select">
                            <option value="">[Loại hàng]</option>
                            <?php foreach($loaihang as $key =>$item): ?>
                                <option value="<?=$key+'1'?>"><?=$item['ten_loai']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mt-2">
                        <label for="luot_xem" class="form-label fw-bold">Lượt xem</label>
                        <div>
                        <input type="text" name="luot_xem" id="luot_xem" placeholder="Lượt xem hàng hóa" class="form-control">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="gia_km" class="form-label fw-bold">Giá khuyến mãi (nếu có)</label>
                        <div>
                        <input type="number" name="gia_km" id="gia_km" placeholder="Giá khuyến mãi hàng hóa" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label for="mota" class="form-label fw-bold">Mô tả</label>
                <div class="mt-2">
                    <textarea name="mota" id="mota" cols="135" rows="5" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>
            </div>
            <div class="btn-group mt-3">
                <input type="submit" value="Thêm mới hàng hóa" class="btn btn-success mx-2" name="addhanghoa">
                <a href="#" class="btn btn-dark mx-2">Nhập lại</a>
                <a href="?ad=dshh" class="btn btn-info mx-2">Danh sách</a>
            </div>
        </form>
        
            

    </div>
</div>