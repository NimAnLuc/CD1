@extends('layout.site')
@section('title','San Pham')
@section('content')



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

</body>
</html>

@endsection