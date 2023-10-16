<div class="container">
    <div class="my-3">
        <h3>Thống kê hóa đơn</h3>
    </div>
    <table class="table border">
        <thead>
            <tr>
                <td>Mã loại</td>
                <td>Tên loại</td>
                <td>Số lượng</td>
                <td>Giá thấp nhất</td>
                <td>Giá cao nhất</td>
                <td>Giá TB</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($thongke as $item):
                extract($item);
            ?>
            <tr>
                <td><?= $ma_loai?></td>
                <td><?= $ten_loai?></td>
                <td><?= $sl?></td>
                <td><?=  number_format($min,0,',','.') ?> đ</td>
                <td><?=  number_format($max,0,',','.')?> đ</td>
                <td><?=  number_format($tb,0,',','.')?> đ</td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
</div>