<div class="container-fluid mt-3"> 
    <div>
        <h3>Chỉnh sửa thông tin khách hàng</h3>
    </div>
    
    <div>
        <form action="?ad=editkh" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="makh" class="form-label fw-bold">Mã khách hàng</label>
                        <div>
                        <input type="text" name="makh" id="makh" readonly value="<?= $onekh['ma_kh'] ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="tenkh" class="form-label fw-bold">Họ và tên</label>
                        <div>
                        <input type="text" name="tenkh" id="tenkh" placeholder="Họ và tên" class="form-control" value="<?= $onekh['hoten']?>">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="email" class="form-label fw-bold">Địa chỉ Email</label>
                        <div>
                        <input type="text" name="email" id="email" placeholder="Địa chỉ Email" class="form-control" value="<?= $onekh['email']?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="" class="form-label fw-bold">Kích hoạt ?</label>
                        <div class="">
                       <div class="btn-group mx-3">
                            <label for="1" class="form-check-label">Kích hoạt</label>
                            <input type="radio" name="kichhoat" id="1" value="1" class="form-check-input" <?= $onekh['kich_hoat']==1? 'checked':''?>>
                       </div>
                       <div class="btn-group">
                            <label for="0" class="form-check-label">Chưa kích hoạt</label>
                            <input type="radio" name="kichhoat" id="0" value="0" class="form-check-input" <?= $onekh['kich_hoat']==0? 'checked':''?>>
                       </div>
                    </div>
                    </div>
                    <div class="mt-2">
                        <label for="matkhau" class="form-label fw-bold">Mật khẩu</label>
                        <div>
                        <input type="text" name="matkhau" id="matkhau" placeholder="Mật khẩu" class="form-control" value="<?= $onekh['matkhau']?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-2">
                        <label for="" class="form-label fw-bold">Chức năng ?</label>
                        <div class="">
                       <div class="btn-group mx-3">
                            <label for="vaitro_1" class="form-check-label">Khách hàng</label>
                            <input type="radio" name="vaitro" id="vaitro_1" value="0" class="form-check-input" <?=$onekh['vai_tro']==0 ? 'checked':''?> >
                       </div>
                       <div class="btn-group">
                            <label for="vaitro_0" class="form-check-label">Nhân viên</label>
                            <input type="radio" name="vaitro" id="vaitro_0" value="1" class="form-check-input" <?=$onekh['vai_tro']==1 ? 'checked':''?> >
                       </div>
                    </div>

                    <div class="mt-2">
                        <label for="anhkh" class="form-label fw-bold">Ảnh</label>
                        <div>
                            <img src="<?= $onekh['anh']?>" alt="" class="img_kh">
                            <input type="text" name="anhkh" hidden class="form-control" value="<?= $onekh['anh']?>">
                            <input type="file" name="anhkh2" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group mt-3">
                <input type="submit" value="Lưu lại" class="btn btn-success mx-2" name="capnhat">
                <a href="?ad=dskh" class="btn btn-info mx-2">Danh sách</a>
            </div>
        </form>
        
            

    </div>
</div>