<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enterprise Cloude - Easay Cloud</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <!-- menu -->
        <div class="menu row">
            <nav class="navbar navbar-light fixed-top navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home')}}">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home')}}">TRANG CHỦ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CÔNG NGHỆ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('service') }}">Tổng quan</a>
                                <a class="dropdown-item" href="{{ route('service.detail', 1) }}">Chi tiết</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GIẢI PHÁP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('solution') }}">Tổng quan</a>
                                <a class="dropdown-item" href="{{ route('solution.detail', 1) }}">chi tiết</a>
                            </div>
                        </li>
                        <li class="nav-item" class="">
                            <a class="nav-link pr-5" href="{{ route('contact')}}">LIỆN HỆ</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- /menu -->
        @yield('content')
        <!-- footer -->
        <div class="footer col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 text-center column">
                    <h4>Giới thiệu</h4>
                    <p>Seafile.VN là sản phẩm lưu trữ đám mây thế hệ mới được Turbo Solutions tích hợp triển khai, dùng đồng
                        bộ và chia sẻ dữ liệu; hỗ trợ tương tác, làm việc nhóm; bảo vệ tính riêng tư đến từng người dùng.</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center column">
                    <h4>Liên kết</h4>
                    <div col-12>
                        <p>
                            <a href="">Giải pháp lưu trữ đám mây</a>
                        </p>
                        <p>
                            <a href="">Giải pháp lưu trữ đám mây</a>
                        </p>
                        <p>
                            <a href="">Giải pháp lưu trữ đám mây</a>
                        </p>
                        <p>
                            <a href="">Giải pháp lưu trữ đám mây</a>
                        </p>
                        <p>
                            <a href="">Giải pháp lưu trữ đám mây</a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center column">
                    <h4>Turbo sulotions</h4>
                    <div class="col-12">
                        <p>
                            <i class="fas fa-home"></i> 1237/17 Hoàng Sa, Phường 5, Quận Tân Bình, TP.HCM</p>
                        <p>
                            <i class="fas fa-phone-square"></i> 0902.636.836</p>
                        <p>
                            <i class="fas fa-envelope"></i> info@turbo.vn</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row text-center copyright mt-4">
                <div class="col-12">
                    <p>Copyright&copy; EnterpriseCloud</p>
                </div>
            </div>
        </div>
        <!-- /footer -->
    </div>
</body>
<script>
    $(document).ready(function() {
        console.log(1)
    })
</script>

</html>
