<div class="margin_top">
    <div class="container my-3">
        <form action="?act=updatekh" method="post" enctype="multipart/form-data" class="border p-4">
            <div class="my-3">
                <h3 class="">Thông tin khách hàng</h3>
                <input type="hidden" name="idkh" value="<?=$kh['ma_kh']?>">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form_img">
                        <img src="<?=$kh['anh']?>" alt="" class="" width="100%">
                        <input type="text" name="anh" hidden id="" value="<?=$kh['anh']?>">
                    </div>
                    <input type="file" name="anh2" id="" class="form-control my-2" value="Brower">
                </div>
                <div class="col-md-4">
                    <div class="mt-3">
                        <label for="ten_kh" class="form-label">Tên khách hàng</label>
                        <input type="text" name="ten_kh" id="ten_kh" value="<?=$kh['hoten']?>" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" readonly id="" 
                        value="<?=$kh['matkhau']?>" class="form-control">
                    </div>
                    <div class="mt-3 dropdown">
                        <a href="#" id="changeDropdown" class="btn btn-warning mt-2 dropdown">Đổi mật khẩu</a>
                        <div style="display:none" id="changePassword">
                            <div class="mt-3">
                                <label for="oldpass">Mật khẩu cũ</label>
                                <input type="text" name="old_password" id="oldpass" 
                                class="form-control" placeholder="Nhập mật khẩu cũ">
                                <span class="badge text-danger">
                                <?=
                                (isset($_COOKIE['error'])?$_COOKIE['error']:'');
                                ?>
                                </span>
                            </div>

                            <div class="mt-3">
                                <label for="newpass">Mật khẩu mới</label>
                                <input type="text" name="new_password" id="newpass" 
                                class="form-control" placeholder="Nhập mật khẩu mới">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="<?=$kh['email']?>" class="form-control">
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="mt-3">
                        <label for="" class="form-label"><span class="text-danger">(*)</span>Địa chỉ</label>
                        <input type="text" name="diachi" value="<?=$kh['dia_chi']?>" class="form-control fs-6" placeholder="Xóm,số nhà /Thôn,dường/Xã,phường/Huyện,quận/Thành phố,tỉnh">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label"><span class="text-danger">(*)</span>Số điện thoại</label>
                        <input type="text" name="phone" value="<?=$kh['phone']?>" class="form-control fs-6" placeholder="Số điện thoại ví dụ :0932******">
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="updatekh" class="btn btn-success">
                            <i class="fas fa-save"></i> Lưu
                        </button>
                    </div>
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