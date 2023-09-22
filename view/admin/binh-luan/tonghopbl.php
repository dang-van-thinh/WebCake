<div class="container-fluid mt-3">
    <div class="">
        <h3>Tổng hợp bình luận</h3>
    </div>
    <div class="container-fluid">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id="Allcheckbox" class="form-check-input"></th>
                <th>Tên hàng hóa</th>
                <th>Số BL</th>
                <th>BL mới</th>
                <th>BL cũ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($bl as $key=>$item):?>
                <tr>
                    <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                    <td><?=  getOneHangHoa($item['ma_hh'])['ten_hh'] ?></td>
                    <td><?= getOneBinhLuan($item['ma_hh'])['tongbl']?></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="?ad=ctbl&idhh=<?=$item['ma_hh']?>" class="btn btn-warning"><i class="fas fa-info-circle"></i></a>
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