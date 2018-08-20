@extends('layout.web')
@section('content')
<div class="tech row">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>GIẢI PHÁP <i class="fas fa-wrench"></i></h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aut dolores quas deleniti doloremque non natus
                provident fugiat rerum corrupti.</h2>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 col-12 feature">
        <div class="row">
            <div class="col-12 col-sm-6 text-center img">
                <img src="{{ asset('img/cloud-cate.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-5 text-center content ">
                <a href="">
                    <h3> Đám Mây Lưu Trữ Riêng </h3>
                    <p>Đám mây lưu trữ riêng cho doanh nghiệp mang đến những trải nghiệm khác biệt và hữu ích. Doanh nghiệp
                        không cần phải kết nối VPN khi muốn truy cập dữ liệu từ bên ngoài văn phòng. Doanh nghiệp có thể
                        gởi tài liệu dung lượng lớn cho đối tác mà không cần quá nhiều thao tác…</p>
                </a>
                <a href="" class="btn-info-custom"><i class="fas fa-angle-double-right"></i> CHI TIẾT</a>
            </div>
        </div>
    </section>
    <!-- /section2-->
</div>
@endsection
