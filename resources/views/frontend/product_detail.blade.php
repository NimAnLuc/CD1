@extends('layout.site')
@section('title','Chi tiet')
@section('content')

    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-12 text-start">
                        <h2>Chi tiết sản phẩm</h2>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-2">
                                    <div class="col-lg-4 col-xl-3">
                                        <div class="position-relative">
                                            <div class="fruite-img">
                                                <img src="./images/ao.jpeg" class="img-fluid" width="500px" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Quần Áo</div>
                                        </div>
                                    </div>
                                <div class="col-lg-4">
                                    <div>
                                        <h4>Áo</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">50.000đ</p>
                                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>


</body>
</html>

@endsection