@extends('layout.web')
@section('content')
<div class="place-server row">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>Chỗ đặt máy chủ (colo)
                <i class="fas fa-globe-africa"></i>
            </h1>
            <h2>Chúng tôi tự hào mang đến cho khách hàng dịch vụ chỗ đặt máy chủ với sự ổn định với tốc độ kết nối cao nhất!</h2>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 container feature">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Chỗ đặt máy chủ riêng lẻ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Chỗ đặt máy chủ theo rack</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Dịch vụ cộng thêm</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row mt-3">
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group text-center">
                                <li class="list-group-item text-center">
                                    <h5>Chỗ Đặt Máy Chủ</h5>
                                    <h3>COLO</h3>
                                    <small>Chu kỳ thanh toán: 3 tháng</small>
                                </li>
                                <li class="list-group-item">Trung Tâm Dữ Liệu</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group green text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group orange text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group blue text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="row mt-3">
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group text-center">
                                <li class="list-group-item text-center">
                                    <h5>Chỗ Đặt Máy Chủ</h5>
                                    <h3>COLO</h3>
                                    <small>Chu kỳ thanh toán: 3 tháng</small>
                                </li>
                                <li class="list-group-item">Trung Tâm Dữ Liệu</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group green text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group orange text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                        <!-- green -->
                        <div class="col-12 col-sm-3">
                            <ul class="list-group blue text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>VNĐ / tháng</small>
                                </li>
                                <li class="list-group-item">Máy chủ: Máy chủ VPS</li>
                                <li class="list-group-item">Trung tâm dữ liệu: VDC / Viettel</li>
                                <li class="list-group-item">Dung lượng lưu trữ: 500 GB</li>
                                <li class="list-group-item">Tài khoản người dùng: Không giới hạn*</li>
                                <li class="list-group-item">Băng thông mạng: 100Mbps</li>
                                <li class="list-group-item">Tích hợp Web/Mail: Không</li>
                                <li class="list-group-item">Thương hiệu doanh nghiệp: Không</li>
                                <li class="list-group-item">Sao lưu dữ liệu: Hàng tháng</li>
                                <li class="list-group-item">Hỗ trợ kỹ thuật: 24/7</li>
                                <li class="list-group-item">
                                    <a href="" class="btn-info-custom">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /green -->
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    <div class="row mt-4">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Dịch vụ cộng thêm</th>
                                    <th scope="col"> Cước phí / Tháng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tăng băng thông thêm 100 Mbps (Quốc tế: 5 Mbps)</td>
                                    <td> 2.400.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Tăng băng thông thêm 100 Mbps (Quốc tế: 5 Mbps)</td>
                                    <td> 2.400.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Tăng băng thông thêm 100 Mbps (Quốc tế: 5 Mbps)</td>
                                    <td> 2.400.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Tăng băng thông thêm 100 Mbps (Quốc tế: 5 Mbps)</td>
                                    <td> 2.400.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Tăng băng thông thêm 100 Mbps (Quốc tế: 5 Mbps)</td>
                                    <td> 2.400.000 VNĐ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section2-->
</div>
@endsection
