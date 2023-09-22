<div class="container-fluid mt-3">
    <div class="">
        <h3>Chi tiết bình luận</h3>
    </div>
    <div class="container-fluid">
        <div>
           <p class="h4 fs-3">Tên hàng hóa: <span class="fs-4 text-uppercase text-danger"><?= $ten_hh['ten_hh']?></span></p>
        </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id="Allcheckbox" class="form-check-input"></th>
                <th>Nội dung</th>
                <th>Ngày BL</th>
                <th>Người BL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bl as $key=>$item):?>
            <tr>
                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                <td><?= $item['noi_dung']?></td>
                <td><?= $item['ngay_bl']?></td>
                <td><?= $item['hoten']?></td>
                <td>
                    <a href="?ad=ctbl&delbl=<?=$item['ma_bl']?>" onclick="return confirm('Bạn có muốn xóa bình luận khỏi sản phẩm này không ?')" class="btn btn-warning"><i class="fas fa-trash"></i></a>
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