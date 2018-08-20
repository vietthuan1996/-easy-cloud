@extends('layout.web')
@section('content')
<div class="contact row">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>LIÊN HỆ
                <i class="fas fa-address-book"></i>
            </h1>
            <h2>Turbo Solutions rất hân hạnh được phục vụ Quý Khách!</h2>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 container">
        <div class="row">
            <div class="col-12 col-sm-6 order-sm-2">
                <h4>Gởi Tin Nhắn Cho Chúng Tôi</h4>
                <form>
                    <!-- email -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                                <b>Địa chỉ Email
                                    <span class="text-danger">*</span>
                                </b>
                            </label>
                        <input type="email" class="form-control" placeholder="Vui lòng nhập địa chỉ email">
                    </div>
                    <!-- email -->
                    <!-- name -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                                <b>Họ & tên
                                    <span class="text-danger">*</span>
                                </b>
                            </label>
                        <input type="text" class="form-control" placeholder="Vui lòng nhập họ tên">
                    </div>
                    <!-- name -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                                <b>Nội dung</b>
                            </label>
                        <textarea name="content" class="form-control" rows="10"></textarea>
                    </div>
                    <small id="emailHelp" class="form-text text-muted text-right">
                            <span class="text-danger">*</span> : bắt buộc</small>
                    <div class="form-group text-left">
                        <button type="submit" class="btn-info-custom">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-6 text-center order-sm-1 info">
                <h4>Turbo sulotions</h4>
                <div class="col-12 ">
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
        <div class="row" id="map"></div>

    </section>
    <!-- /section2-->
</div><script>
    var map;

    function initMap() {
        var myLatLng = {
            lat: 10.790580,
            lng: 106.665500
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
@endsection
