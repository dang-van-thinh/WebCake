<section class="col-lg-10 pt-2">
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse p-2" id="navbarNavDropdown">
        <li class="nav-item dropdown d-flex justify-content-end">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= $kh['anh'] ?>" alt="" width="48px" class="">
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="<?= $kh['anh'] ?>" alt="" class="rounded-circle" width="48px">

                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block"><?= $kh['hoten'] ?></span>
                        <small class="text-muted"><?= $_SESSION['email'] ?></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="LoginController.php?lg=logout">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                  </a>
                </li>
              </ul>
            </li>
      </div>
    </div>
  </nav>
  <!-- </section>
</div> -->