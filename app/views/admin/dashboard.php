<?php
    $tongtien = 0;
    $donhang = 0;
    $dagiao = 0;
    $khachhang = 0;
    if(!empty($thongke)){

           foreach($thongke as $value){
            $tongtien += $value['doanhthu'];
            $donhang += $value['donhang'];
            $dagiao += $value['soluong'];

        }
    }
    if(!empty($user)){
        $khachhang = count($user);
    }
?>
<div class="row">
    <div class="col-md-12 fw-bold fs-3">
        Dashboard
    </div>

</div>
<div class="row">
    <div class="col-lg-3 col-md-4 mb-3">
        <div class="card text-white bg-primary h-100">
            <div class="card-header">Tổng doanh thu</div>
            <div class="card-body">

                <h5 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                        <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z" />
                    </svg>
                    <?php echo number_format($tongtien, 0,'.', ',')?> <sup>vnđ</sup>
                </h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk
                    of the card's content.</p> -->
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 mb-3">
        <div class="card text-white bg-success h-100">
            <div class="card-header">Đơn hàng</div>
            <div class="card-body">
                <h5 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                    </svg>
                    <?php echo $donhang ?>
                </h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk
                    of the card's content.</p> -->
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4  mb-3">
        <div class="card text-white bg-danger h-100">
            <div class="card-header">Số lượng đã giao</div>
            <div class="card-body">
                <h5 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    <?php echo $dagiao ?>

                </h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk
                    of the card's content.</p> -->
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 mb-3">
        <div class="card text-white bg-warning h-100">
            <div class="card-header">Khách hàng</div>
            <div class="card-body">
                <h5 class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                    </svg>
                    <?php echo $khachhang ?>

                </h5>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-6 mt-3 mt-md-0">
        <div class="card">
            <div class="card-header">Charts</div>
            <div class="card-body">
                <p>Thống kê doanh thu:
                    <span>
                        <select class="select-date" id="">
                            <option value="7">7 ngày qua</option>
                            <option value="28">28 ngày qua</option>
                            <option value="90">90 ngày qua</option>
                            <option value="365">365 ngày qua</option>
                        </select>
                    </span>
                </p>

                <div id="chart" style="height: 250px; max-width: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-3 mt-md-0">
        <div class="card">
            <div class="card-header">Charts</div>
            <div class="card-body">
                <div id="chartD" style="height: 250px; max-width: 100%;">

                </div>
            </div>
        </div>
    </div>
</div>