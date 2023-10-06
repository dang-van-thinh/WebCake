
<div class="row">
  <section class="col-lg-2 bg-body-tertiary px-3">
  <?php $kh = getOneKH($_SESSION['idkh']) ?>
    <section class="p-4">
      <a href="">
        <img src="<?= $kh['anh'] ?>" alt="" style="width: 100px">
        
      </a>
    </section>
    <section>
      <ul class="nav py-1 fw-bold flex-column" id="menu_admin">
        <!-- Layouts -->
        <li class="mx-auto">
          <h3>Quản lý</h3>
        </li>
          <li class="nav-item mb-3">
              <a href="?ad=addsanpham" class="nav-link d-flex px-3">
                <i class="nav-icon fas fa-hamburger px-2"></i>
                <div class="mx-2">Quản lý sản phẩm</div>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="?ad=addkh" class="nav-link d-flex mx-4">
                <i class="nav-icon fas fa-users"></i>
                <div class="mx-2">Quản lý tài khoản</div>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="?ad=bl" class="nav-link d-flex mx-4">
                <i class="nav-icon fas fa-comment"></i>
                <div class="mx-2">Quản lý bình luận</div>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="?ad=dsloaihang" class="nav-link d-flex mx-4">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <div class="mx-2">Quản lý danh mục</div>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="?ad=home" class="nav-link d-flex mx-4">
                <i class="nav-icon fas fa-chart-line"></i>
                <div>Thống kế hóa đơn</div>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a href="?ad=thongke" class="nav-link d-flex mx-4">
                <i class="nav-icon fas fa-chart-pie"></i>
                <div>Thống kế biểu đồ </div>
              </a>
            </li>
        </li>
      </ul>
    </section>
  </section>
