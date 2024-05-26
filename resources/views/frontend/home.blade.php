@extends('layout.site')

@section('title', 'Trang chủ')

@section('content')

@includeIf('ddsddsa')
<div class="slider">
    <x-slidershow/>

</div>

<div class="row">
    <div class="col-md-2">
        <section class="product-category">
            <h2>Danh Mục</h2>
            <div class="category-list">

                <x-category/>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="product-new">
            <h2>Sản Phẩm Mới</h2>
            <div class="product-list">
                <x-product/>
                <x-product/>

            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="sale-products">
            <h2>Sản Phẩm Giảm Giá</h2>
            <x-product/>
            <x-product/>
        </section>
    </div>
    <div class="col-md-2">
        <section class="post-new">
            <h2>Bản Tin</h2>
            <x-post/>
            <x-post/>
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