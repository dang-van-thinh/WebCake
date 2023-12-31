<div class="container-fluid mt-3">
    <div class="">
        <h3>Quản lý sản phẩm</h3>
    </div>
    <?php if (isset($_COOKIE['success'])) : ?>
        <!-- toast success -->
        <div class="toast align-items-center fade show text-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= $_COOKIE['success'] ?>
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
                        <input type="checkbox" name="allItem" id="checkedAll" class="form-check-input">
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
                <?php foreach ($hh as $key => $item) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="item" class="form-check-input checked">
                        </td>
                        <td id="idhh"><?= $item['ma_hh'] ?></td>
                        <td class="text-uppercase"><?= $item['ten_hh'] ?></td>
                        <td><?= number_format($item['don_gia']) ?></td>
                        <td><?= number_format($item['giam_gia']) ?></td>
                        <td>
                            <img src="<?= $item['anh'] ?>" alt="<?= $item['anh'] ?>" class="img_kh">
                        </td>
                        <td><?= $item['so_luot_xem'] ?></td>
                        <td>
                            <a href="?ad=dshh&idhh=<?= $item['ma_hh'] ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này ?')" class="btn btn-warning">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            <a href="?ad=edithanghoa&idhh=<?= $item['ma_hh'] ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="mt-3">
            <div class="btn-group">
                <a href="#" id="selectAll" class="btn btn-dark">Chọn tất cả</a>
                <a href="" id="unchecked" class="btn btn-info">Bỏ chọn tất cả</a>
                <a href="?ad=dshh" id="delsp" class="btn btn-success">Xóa các mục đã chọn</a>
            </div>
        </div>
    <!-- perpage -->
        <div class="mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i=0; $i < $number_curent; $i++) :?>
                        <li class="page-item"><a class="page-link" href="?ad=dshh&offset=<?=$i+'1'?>"><?=$i+'1'?></a></li>
                    <?php endfor?>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>