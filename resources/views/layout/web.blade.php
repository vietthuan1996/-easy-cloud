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
                                DỊCH VỤ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('service') }}">Tổng quan</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GIẢI PHÁP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('solution') }}">Tổng quan</a>
                            </div>
                        </li>
                        <li class="nav-item" class="">
                            <a class="nav-link pr-5" href="{{ route('contact')}}">LIÊN HỆ̣</a>
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
                    <p>
                        {{ $informationSetting == null ? '' : ($informationSetting->describe == null ? '' :strip_tags($informationSetting->describe))}}
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center column">
                    <h4>Liên kết</h4>
                    <div col-12>
                        @if(!is_null($serviceSetting))
                            @foreach($serviceSetting as $service)
                        <p>
                            <a href="{{ $service->type_show == 0 ? $service->link : $service->slug }}">Giải pháp lưu trữ đám mây</a>
                        </p>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center column">
                    <h4>{{ $informationSetting == null ? '' : ($informationSetting->company_name == null ? '' :$informationSetting->company_name)}}</h4>
                    <div class="col-12">
                        <p>
                            <i class="fas fa-home"></i> {{ $informationSetting == null ? '' : ($informationSetting->address == null ? '' :$informationSetting->address)}}</p>
                        <p>
                            <i class="fas fa-phone-square"></i> {{ $informationSetting == null ? '' : ($informationSetting->hotline == null ? '' :$informationSetting->hotline)}}</p>
                        <p>
                            <i class="fas fa-envelope"></i> {{ $informationSetting == null ? '' : ($informationSetting->email == null ? '' :$informationSetting->email)}}</p>
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
