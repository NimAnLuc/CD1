@extends('layout.site')

@section('title', 'Trang chủ')

@section('content')
<div class="slider">
    <img src="{{ asset('images/slider_1.webp') }}" alt="Slider">
    <img src="{{ asset('images/slider_2.webp') }}" alt="Slider">
    <img src="{{ asset('images/slider_3.webp') }}" alt="Slider">
</div>

<div class="row">
    <div class="col-md-2">
        <section class="product-category">
            <h2>Danh Mục</h2>
            <div class="category-list">
                <div class="product">
                    <h3>Tất cả Sản Phẩm</h3>
                    <p>Description of product 1</p>
                    <a href="#">Views Product</a>
                </div>
                <div class="product">
                    <h3>Kính</h3>
                    <p>Description of product 1</p>
                    <a href="#">Views Product</a>
                </div>
                <div class="product">
                    <h3>Áo</h3>
                    <p>Description of product 1</p>
                    <a href="#">Views Product</a>
                </div>
                <div class="product">
                    <h3>Quần</h3>
                    <p>Description of product 1</p>
                    <a href="#">Views Product</a>
                </div>
                <div class="product">
                    <h3>Giày</h3>
                    <p>Description of product 1</p>
                    <a href="#">Views Product</a>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="product-new">
            <h2>Sản Phẩm Mới</h2>
            <div class="product-list">
                <div class="product">
                    <img src="{{ asset('images/giayhello.jpeg') }}" alt="Product 1">
                    <h3>Giày Hello Kitty</h3>
                    <p>Giành cho ai có sở thich</p>
                    <span class="price">$19.99</span>
                    <a href="#">Add to cart</a>
                </div>
                <div class="product">
                    <img src="{{ asset('images/quantrang.jpeg') }}" alt="Product 1">
                    <h3>Quần Jean Trắng</h3>
                    <p>Trắng mắt xanh</p>
                    <span class="price">$29.99</span>
                    <a href="#">Add to cart</a>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="sale-products">
            <h2>Sản Phẩm Giảm Giá</h2>
            <div class="product">
                <img src="{{ asset('images/kinh.jpeg') }}" alt="Product 1">
                <h3>Kính Mát</h3>
                <p>Kính Siêu Đẹp</p>
                <span class="price">$9.99</span>
                <a href="#">Add to cart</a>
            </div>
            <div class="product">
                <img src="{{ asset('images/aokhoac.jpeg') }}" alt="Product 1">
                <h3>Áo Khoác Da</h3>
                <p>Áo Khoác Cực Ấm dành cho FA</p>
                <span class="price">$39.99</span>
                <a href="#">Add to cart</a>
            </div>
        </section>
    </div>
    <div class="col-md-2">
        <section class="post-new">
            <h2>Bản Tin</h2>
            <div class="product">
                <img src="{{ asset('images/anh1.png') }}" alt="Product 1">
                <h3>Quần Áo Đại Hạ Giá</h3>
            </div>
            <div class="product">
                <img href="#" src="{{ asset('images/anh1.png') }}" alt="Product 1">
                <h3 >Kính Mắt Mẫu D501 ra mắt</h3>
            </div>
        </section>
    </div>
</div>
@endsection
@section('scripts')
<script>
// Lấy tất cả các slide
const slides = document.querySelectorAll('.slider img');
const autoSlideInterval = 3000; 

let currentSlide = 0;

// Ẩn tất cả các slide trước khi bắt đầu
slides.forEach((slide, index) => {
    if (index !== currentSlide) {
        slide.style.display = 'none';
    }
});

// Hàm chuyển đổi slide tự động
function nextSlide() {
    // Ẩn slide hiện tại
    slides[currentSlide].style.display = 'none';

    // Tăng chỉ số slide
    currentSlide = (currentSlide + 1) % slides.length;

    // Hiển thị slide tiếp theo
    slides[currentSlide].style.display = 'block';
}

// Bắt đầu chuyển đổi slide tự động
setInterval(nextSlide, autoSlideInterval);
</script>
@endsection