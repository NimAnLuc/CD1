@extends('layout.site')
@section('title','San Pham')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

<!-- Slider -->
<div class="slider">
    <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
    <input type="radio" name="slider" class="slide-radio2" id="slider_2">
    <input type="radio" name="slider" class="slide-radio3" id="slider_3">
    <div class="slides">
        <div class="slide slide-1">
            <img src="./images/slider.jpg" >
        </div>
        <div class="slide slide-2">
            <img src="./images/slider.jpg">
        </div>
        <div class="slide slide-3">
            <img src="./images/slider.jpg">
        </div>
    </div>
    <div class="navigation">
        <label for="slider_1" class="manual-btn"></label>
        <label for="slider_2" class="manual-btn"></label>
        <label for="slider_3" class="manual-btn"></label>
    </div>
</div>


    <!-- Product Category -->

    <section class="product-category">
        <section class="product-category">
            <h2>Product Categories</h2>
            <div class="category-list">
                <div class="category">
                    <img src="./images/giay.jpeg" alt="Category 1">
                    <h3>Category 1</h3>
                    <p>Description of category 1</p>
                    <a href="#">View products</a>
                </div>
                <div class="category">
                    <img src="./images/ao.jpeg" alt="Category 2">
                    <h3>Category 2</h3>
                    <p>Description of category 2</p>
                    <a href="#">View products</a>
                </div>
                <!-- Add more categories here if needed -->
            </div>
        </section>
        
    </section>

    <!-- Product New -->
    <section class="product-new">
        <section class="new-products">
            <h2>New Products</h2>
            <div class="product-list">
                <div class="product">
                    <img src="./images/giay.jpeg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Description of product 1</p>
                    <span class="price">$19.99</span>
                    <a href="#">Add to cart</a>
                </div>
                <div class="product">
                    <img src="./images/ao.jpeg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Description of product 2</p>
                    <span class="price">$24.99</span>
                    <a href="#">Add to cart</a>
                </div>
                <!-- Add more products here if needed -->
            </div>
        </section>
    </section>

    <!-- Product Sale -->
<section class="sale-products">
    <h2>Sale Products</h2>
    
</section>

    <!-- Post New -->
    <section class="post-new">
        <!-- Your new post content goes here -->
    </section>

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