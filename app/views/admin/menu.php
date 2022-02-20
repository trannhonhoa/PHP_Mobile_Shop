<!-- ===================================================== -->
<div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white tabindex=" -1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Core
                    </div>
                </li>
                <li>
                    <a href="<?php echo BASE_URL ?>/login/dashboard" class="nav-link px-3 active">
                        <span class="me-2">
                            <i class="bi bi-speedometer"></i>
                        </span>
                        <span>DashBoard</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr>
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Quản lý
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseCatPro" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="bi bi-tags-fill"></i>
                        </span>
                        <span>Danh mục sản phẩm</span>
                        <i class="bi bi-chevron-down right-icon ms-auto"></i>
                    </a>
                    <div class="collapse px-3" id="collapseCatPro">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/categoryproduct/add_category">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Thêm Mới</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/categoryproduct/list_category">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Liệt Kê</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseCatPost" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="bi bi-bookmark-heart"></i>
                        </span>
                        <span>Danh mục bài viết</span>
                        <i class="bi bi-chevron-down right-icon ms-auto"></i>
                    </a>
                    <div class="collapse px-3" id="collapseCatPost">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/categorypost/add_post">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Thêm Mới</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/categorypost/list_post">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Liệt Kê</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapsePro" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="bi bi-aspect-ratio-fill"></i>
                        </span>
                        <span>Sản Phẩm</span>
                        <i class="bi bi-chevron-down right-icon ms-auto"></i>
                    </a>
                    <div class="collapse px-3" id="collapsePro">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/product/add_product">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Thêm Mới</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/product/list_product">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Liệt Kê</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapsePost" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                        <i class="bi bi-app-indicator"></i>
                        </span>
                        <span>Bài Viết</span>
                        <i class="bi bi-chevron-down right-icon ms-auto"></i>
                    </a>
                    <div class="collapse px-3" id="collapsePost">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/post/add_post">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>

                                        <span>Thêm Mới</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/post/list_post">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Liệt Kê</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseOrdered" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="bi bi-cart4"></i>
                        </span>
                        <span>Đơn hàng</span>
                        <i class="bi bi-chevron-down right-icon ms-auto"></i>
                    </a>
                    <div class="collapse px-3" id="collapseOrdered">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a class="nav-link ps-3" href="<?php echo BASE_URL ?>/ordered">
                                        <span class="me-2">
                                            <i class="bi bi-speedometer"></i>
                                        </span>
                                        <span>Liệt Kê</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<main class="mt-5 pt-3">
    <div class="container-fluid">