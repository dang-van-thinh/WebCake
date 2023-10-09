<div class="container my-3">
    <div class="row">
        <div class="col">
            <div class="">
                <h3>Quản lý khách hàng</h3>
            </div>
        </div>
        <div class="col">
            <?php if(isset($_COOKIE['success'])):?>
                <!-- toast success -->
                <div class="toast align-items-center fade show text-success my-3" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                        <?= $_COOKIE['success']?>
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
                <!--end toast success -->
            <?php endif ?>
        </div>
    </div>
    <div class="container-fluid">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id="Allcheckbox" class="form-check-input"></th>
                <th>Mã khách hàng</th>
                <th>Họ và tên</th>
                <th>Địa chỉ Email</th>
                <th>Ảnh</th>
                <th>Vai trò</th>
                <th>
                    <a href="?ad=addkh" class="btn btn-danger">
                        Thêm mới 
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($khs as $key=>$kh): ?>
            <tr>
                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                <td><?= $kh['ma_kh'] ?></td>
                <td><?= $kh['hoten'] ?></td>
                <td><?= $kh['email'] ?></td>
                <td>
                    <?php if($kh['anh'] != ""):?>
                        <img src="<?= $kh['anh']?>" alt="<?= $kh['anh'] ?>" class="img_kh">
                    <?php else:?>
                        <img src="../view/assets/img/customize/avatar-macdinh.webp" alt="" class="img_kh">
                    <?php endif?>
                </td>
                <td><?= $kh['vai_tro']== 1 ? 'Quản trị viên':'Khách hàng' ?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này ?')" href="?ad=dskh&idkh=<?= $kh['ma_kh'] ?>" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
                    <a href="?ad=editkh&idkh=<?= $kh['ma_kh'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="mt-3">
        <div class="btn-group">
            <a href="#" class="btn btn-dark">Chọn tất cả</a>
            <a href="#" class="btn btn-info">Bỏ chọn tất cả</a>
            <a href="#" class="btn btn-success">Xóa các mục đã chọn</a>
        </div>
    </div>
    
    </div>
</div>