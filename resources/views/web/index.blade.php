@extends('layout.web')
@section('content')
<div class="index row">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>ENTERPRISE
                <span class="wow slideInRight" data-wow-duration="2s" data-wow-delay="5s">CLOUD</span>
            </h1>
            <h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">EASY CLOUD</h2>
        </div>
        <div class="col-12 features">
            <div class="row">
                <!-- cloud -->
                <div class="col-12 col-sm-6 col-md-4 text-center cloud mb-3">
                    <a href="">
                        <div class="cta col-12 col-sm-10 offset-sm-1">
                            <i class="icon fab fa-cloudversify"></i>
                            <h2>Lưu trữ đám mây</h2>
                        </div>
                    </a>
                </div>
                <!-- /cloud -->
                <!-- secret -->
                <div class="col-12 col-sm-6 col-md-4 text-center secret mb-3">
                    <a href="">
                        <div class="cta col12 col-sm-10 offset-sm-1">
                            <i class="icon fas fa-user-secret"></i>
                            <h2>Giải pháp bảo mật</h2>
                        </div>
                    </a>
                </div>
                <!-- /secret -->
                <!-- server -->
                <div class="col-12 col-sm-6 col-md-4 text-center server mb-3">
                    <a href="">
                        <div class="cta col-12 col-sm-10 offset-sm-1">
                            <i class="icon fas fa-server"></i>
                            <h2>Dịch vụ máy chủ</h2>
                        </div>
                    </a>
                </div>
                <!-- server -->
            </div>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 col-12 feature">
        <div class="row">
            <div class="col-12 col-sm-6 text-center img">
                <img src="./assets/cloud.gif" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-5 text-center content">
                <h3 class="mb-5">
                    <a href="">
                                <i class="icon fab fa-cloudversify"></i> Lưu Trữ Đám Mây</a>
                </h3>
                <p>Đám mây lưu trữ riêng dành cho doanh nghiệp, giúp khách hàng đồng bộ và chia sẻ dữ liệu; hỗ trợ tương tác nhóm
                    và bảo vệ tính riêng tư bằng cách mã hóa dữ liệu từ phía người dùng.</p>
            </div>
        </div>
    </section>
    <!-- /section2-->
    <!-- section3 -->
    <section class="section3 col-12 feature">
        <div class="row">
            <div class="col-12 col-sm-6 text-center img order-sm-2">
                <img src="./assets/security.gif" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-5 offset-sm-1 text-center content order-sm-1">
                <h3 class="mb-5">
                    <a href="./giaiphap.html">
                                <i class="icon fas fa-user-secret"></i> Giải Pháp Bảo Mật</a>
                </h3>
                <p>Giải pháp hạn chế tấn công DDOS (DDOS Secure) kết hợp cùng hệ thống Firewall tiên tiến mang đến sự bảo mật cho
                    hệ thống, giảm tối đa tổn thất từ các cuộc tấn công bên ngoài.</p>
            </div>
        </div>
    </section>
    <!-- /section3 -->
    <!-- section4 -->
    <section class="section4 col-12 feature">
        <div class="row">
            <div class="col-12 col-sm-6 text-center img">
                <img src="./assets/server.gif" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-5 text-center content">
                <h3 class="mb-5">
                    <a href="">
                                <i class="icon fas fa-server"></i> Dịch Vụ Máy Chủ</a>
                </h3>
                <p>Turbo Solutions cung cấp các dịch vụ cho thuê máy chủ cấu hình cao, chỗ đặt máy chủ với chi phí phù hợp, mang
                    lại tối đa lợi nhuận trong đầu tư hạ tầng công nghệ thông tin.</p>
            </div>
        </div>
    </section>
    <!-- /section4 -->
</div>
@endsection
