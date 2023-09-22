<div class="margin_top">
    <div class="container my-3">
        <div class="my-3">
            <h3>Giỏ hàng </h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody id="show">
                
            </tbody>
            <tr>
                <td colspan="4" class="fw-bold">Tổng tiền:</td>
                <td colspan="2">
                    <span class="totalPrices"></span>
                </td>
            </tr>
        </table>
        <div class="my-5">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4">
                    <div class="border p-4">
                        <h5>Lưu ý</h5>
                        <ol>
                            <li>Kiểm tra lại thông tín trước khi ấn đặt hàng</li>
                            <li>Miễn phí vận chuyển cho mọi hóa đơn trên 500k</li>
                            <li>(*) trường thông tin không được bỏ trống</li>
                            <li>sd</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="" method="post" class="border p-4 border-success">
                        <h5>Thông tin khách hàng</h5>
                        <div>
                            <div class="mt-3">
                                <label for="" class="form-label">Tên khách hàng:</label>
                                <input type="text" name="" id="" value="<?= isset($kh)?$kh['hoten']:''?>" placeholder="Họ tên khách hàng" class="form-control">
                            </div>
                            <div class="mt-3">
                                <label for="" class="form-label"><span class="text-danger">(*)</span>Địa chỉ</label>
                                <input type="text" value="<?= isset($kh)?$kh['dia_chi']:''?>" class="form-control fs-6" placeholder="Xóm,số nhà /Thôn,dường/Xã,phường/Huyện,quận/Thành phố,tỉnh">
                            </div>
                            <div class="mt-3">
                                <label for="" class="form-label"><span class="text-danger">(*)</span>Số điện thoại</label>
                                <input type="text" value="<?= isset($kh)?$kh['phone']:''?>" class="form-control fs-6" placeholder="Số điện thoại ví dụ :0932******">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div>
                        <p class="fs-3 fw-bold">Tổng tiền: <span class="fs-4 fw-normal totalPrices"></span></p>
                    </div>
                    <div class="btn-group my-3">
                        <h4 class="">Vận chuyển: <span class="alert alert-success fw-normal text-success">Miễn phí</span></h4>
                        
                    </div>
                    <div>
                        <button class="btn btn-success">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>