<div class="container-fluid mt-3">
    <div class="">
        <h3>Quản lý sản phẩm</h3>
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
    <div class="container-fluid">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" name="allItem" id="" class="form-check-input">
                </th>
                <th>Mã HH</th>
                <th>Tên hàng hóa</th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Ảnh</th>
                <th>Lượt xem</th>
                <th>
                    <a href="?ad=addsanpham" class="btn btn-danger">
                        Thêm mới 
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hh as $key=>$item):?>
            <tr>
                <td>
                    <input type="checkbox" name="" id="" class="form-check-input">
                </td>
                <td><?= $item['ma_hh'] ?></td>
                <td><?= $item['ten_hh'] ?></td>
                <td><?= $item['don_gia'] ?></td>
                <td><?= $item['giam_gia'] ?></td>
                <td>
                    <img src="<?= $item['anh'] ?>" alt="<?= $item['anh'] ?>" class="img_kh">
                </td>
                <td><?= $item['so_luot_xem'] ?></td>
                <td>
                    <a href="?ad=dshh&idhh=<?= $item['ma_hh'] ?>"
                    onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này ?')"
                     class="btn btn-warning">
                     <i class="fas fa-trash-alt"></i>
                    </a>
                    <a href="?ad=edithanghoa&idhh=<?= $item['ma_hh'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                </td>
            </tr>
            <?php endforeach?>
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