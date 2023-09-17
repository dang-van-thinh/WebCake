<div class="container-fluid mt-3">
    <div class="">
        <h3>Quản lý loại hàng</h3>
    </div>
    <div class="container-fluid">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" name="allItem" id="" class="form-check-input">
                </th>
                <th>Mã loại</th>
                <th>Tên loại hàng</th>
                <th>Số lượng</th>
                <th>Giá Cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá TB</th>
                <th>
                    <a href="?ad=addloaihang" class="btn btn-danger">
                        Thêm mới 
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lh as $key=>$item):?>
                <?php 
                $idloai = $item['ma_loai'];
                $sl = demSLTheoLoai($idloai);
                $topgia = getGiaSanPhamLonNhatTheoLoai($idloai);
                $btgia  =getGiaSanPhamNhoNhatTheoLoai($idloai);
                $giatb = ($topgia['don_gia'] + $btgia['don_gia']) / 2;
                    ?>
            <tr>
                <td>
                    <input type="checkbox" name="" id="" class="form-check-input">
                </td>
                <td><?=$item['ma_loai']?></td>
                <td><?=$item['ten_loai']?></td>
                <td><?=$sl['sl']?></td>
                <td><?=$topgia['don_gia']?></td>
                <td><?=$btgia['don_gia']?></td>
                <td><?=$giatb?></td>
                <td>
                    <a href="#" class="btn btn-warning"><i class="fas fa-trash-alt"></i></a>
                    <a href="#" class="btn btn-secondary"><i class="far fa-edit"></i></a>
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