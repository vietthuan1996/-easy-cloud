@extends('layout.web')
@section('content')
<div class="index">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>ENTERPRISE
                <span class="wow slideInRight" data-wow-duration="2s" data-wow-delay="5s">CLOUD</span>
            </h1>
            <h2 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">EASY CLOUD</h2>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 col-12 feature">
        <div class="row justify-content-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @if(!is_null($service))
                    {{
                    $i = 1
                    }}
                    @foreach($service as $s)
                <li class="nav-item">
                    <a class="nav-link active green" id="pills-{{$i++}}-tab" data-toggle="pill" href="#pills-{{$i++}}" role="tab" aria-controls="pills-{{$i++}}" aria-selected="true">{{$s->name}}
                        <i class="icon fab fa-cloudversify"></i>
                    </a>
                </li>
                    @endforeach
                @endif
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link red" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Giải pháp bảo mật--}}
                        {{--<i class="icon fas fa-user-secret"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link yellow" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Dịch vụ máy chủ--}}
                        {{--<i class="icon fas fa-server"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center img">
                        <img src="{{ asset('img/cloud.gif') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-5 text-center content">
                        <h3 class="mb-5">
                            <a href="" class="blue">
                                <i class="icon fab fa-cloudversify"></i> Lưu Trữ Đám Mây</a>
                        </h3>
                        <p>
                            <span class="pb-5">
                                Đám mây lưu trữ riêng dành cho doanh nghiệp, giúp khách hàng đồng bộ và chia sẻ dữ liệu; hỗ trợ
                                tương tác nhóm và bảo vệ tính riêng tư bằng cách mã hóa dữ liệu từ phía người dùng.

                            </span>
                            <br>
                            <a href="" class="btn btn-see-more mt-4">CHI TIẾT</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center img order-sm-2">
                        <img src="{{ asset('img/security.gif') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-5 offset-sm-1 text-center content order-sm-1">
                        <h3 class="mb-5">
                            <a href="./giaiphap.html" class="red">
                                <i class="icon fas fa-user-secret"></i> Giải Pháp Bảo Mật</a>
                        </h3>
                        <p>
                            <span class="mb-2">
                                Giải pháp hạn chế tấn công DDOS (DDOS Secure) kết hợp cùng hệ thống Firewall tiên tiến mang đến
                                sự bảo mật cho hệ thống, giảm tối đa tổn thất từ các cuộc tấn công bên ngoài.

                            </span>
                            <br>
                            <a href="" class="btn btn-see-more mt-4">CHI TIẾT</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center img">
                        <img src="{{ asset('img/server.gif') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-5 text-center content">
                        <h3 class="mb-5">
                            <a href="" class="yellow">
                                <i class="icon fas fa-server"></i> Dịch Vụ Máy Chủ</a>
                        </h3>
                        <p>
                            <span class="mb-2">
                                Turbo Solutions cung cấp các dịch vụ cho thuê máy chủ cấu hình cao, chỗ đặt máy chủ với chi phí phù hợp, mang lại tối đa
                                lợi nhuận trong đầu tư hạ tầng công nghệ thông tin.
                            </span>
                            <br>
                            <a href="" class="btn btn-see-more mt-4">CHI TIẾT</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section2-->
</div>
@endsection
