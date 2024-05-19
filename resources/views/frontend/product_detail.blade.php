@extends('layout.site')
@section('title','Chi tiet')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
          <!-- Icon Font Stylesheet -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logo">
            <img src="./images/anh.png" alt="Logo">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="user-options">
            <a href="#">Login</a>
            <a href="#">Cart</a>
            <form action="#" method="GET">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

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

 <!-- Footer Section -->
 <footer class="footer" id="foooter">
    <section class="footer-content">
        <div class="footer-column">
            <h3>Thông tin</h3>
            <p>Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
            <p>Dĩ An - Bình Dương</p>
            <p>037.847.5508</p>
            <p>nimanluc@gmail.com</p>
        </div>
        <div class="footer-column">
            <h3>CHÍNH SÁCH</h3>
            <ul>
                <li><a >Chính sách thành viên</a></li>
                <li><a >Chính sách vận chuyển</a></li>
                <li><a >Chăm sóc khách hàng</a></li>
                <li><a >Phương thức thanh toán</a></li>
                <li><a >Chính sách đổi trả / bảo hành</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>HƯỚNG DẪN</h3>
            <ul>
                <li><a >Denny Member</a></li>
                <li><a >Mua hàng dễ dàng</a></li>
                <li><a >Hợp tác nhượng quyền</a></li>
                <li><a >Hướng dẫn mua hàng online</a></li>
                <li><a >Hướng dẫn kiểm tra hạng thẻ thành viên</a></li>
            </ul>
        </div>
    </section>
    <section class="copyright">
        <p>Design by: NimanLuc</p>
    </section>
</footer>
</body>
</html>

@endsection