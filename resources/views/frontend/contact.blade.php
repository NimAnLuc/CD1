@extends('layout.site')

@section('title','Lien he')

@section('content')
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-primary">Get in touch</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="h-100 rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6915549836594!2d106.77485637451781!3d10.834899858113504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270410c624d9%3A0xa40db03775823d3e!2zMi8xODEgVMSDbmcgTmjGoW4gUGjDuiwgVMSDbmcgTmjGoW4gUGjDuiBCLCBRdeG6rW4gOSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrCBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1715332194338!5m2!1svi!2s"
                        width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="" class="">
                        <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                        <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email">
                        <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Your Message"></textarea>
                        <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex p-4 rounded mb-4 bg-white">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-2">123 Street New York.USA</p>
                        </div>
                    </div>
                    <div class="d-flex p-4 rounded mb-4 bg-white">
                        <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                        <div>
                            <h4>Mail Us</h4>
                            <p class="mb-2">info@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex p-4 rounded bg-white">
                        <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                        <div>
                            <h4>Telephone</h4>
                            <p class="mb-2">(+012) 3456 7890</p>
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
                <li><a>Chính sách thành viên</a></li>
                <li><a>Chính sách vận chuyển</a></li>
                <li><a>Chăm sóc khách hàng</a></li>
                <li><a>Phương thức thanh toán</a></li>
                <li><a>Chính sách đổi trả / bảo hành</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>HƯỚNG DẪN</h3>
            <ul>
                <li><a>Denny Member</a></li>
                <li><a>Mua hàng dễ dàng</a></li>
                <li><a>Hợp tác nhượng quyền</a></li>
                <li><a>Hướng dẫn mua hàng online</a></li>
                <li><a>Hướng dẫn kiểm tra hạng thẻ thành viên</a></li>
            </ul>
        </div>
    </section>
    <section class="copyright">
        <p>Design by: NimanLuc</p>
    </section>
</footer>
@endsection


