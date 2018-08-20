@extends('layout.web')
@section('content')
<div class="place-server row">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>Máy Chủ Lưu Trữ Seafile
                <i class="icon fas fa-server"></i>
            </h1>
            <h2>Chúng tôi cung cấp máy chủ thương hiệu Dell/HP với cấu hình mạnh mẽ. Kết hợp cùng hạ tầng trung tâm dữ liệu tiêu
                chuẩn, mang lại tính ổn định và tốc độ kết nối cao nhất.</h2>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 container feature">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Máy Chủ Lưu Trữ Đám Mây</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Bản Quyền Seafile Pro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">So Sánh Phiên Bản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">Câu hỏi thường gặp</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row mt-4">
                        <!-- green -->
                        <div class="col-12 col-sm-4">
                            <ul class="list-group green text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>Phù hợp doanh nghiệp dưới 20 nhân sự</small>
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
                        <!-- blue -->
                        <div class="col-12 col-sm-4">
                            <ul class="list-group blue text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>Phù hợp doanh nghiệp dưới 20 nhân sự</small>
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
                        <!-- /blue -->
                        <!-- orange -->
                        <div class="col-12 col-sm-4">
                            <ul class="list-group orange text-center">
                                <li class="list-group-item active text-center">
                                    <h5>Green Edition</h5>
                                    <h3>2.500.000 đồng</h3>
                                    <small>Phù hợp doanh nghiệp dưới 20 nhân sự</small>
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
                        <!-- /orange -->
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-sm-3 four">
                            <i class="fas fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officia eveniet repellat perspiciatis nemo natus? Dolorum unde assumenda maxime odio voluptatum?
                        </div>
                        <div class="col-12 col-sm-3 four">
                            <i class="fas fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officia eveniet repellat perspiciatis nemo natus? Dolorum unde assumenda maxime odio voluptatum?
                        </div>
                        <div class="col-12 col-sm-3 four">
                            <i class="fas fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officia eveniet repellat perspiciatis nemo natus? Dolorum unde assumenda maxime odio voluptatum?
                        </div>
                        <div class="col-12 col-sm-3 four">
                            <i class="fas fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Officia eveniet repellat perspiciatis nemo natus? Dolorum unde assumenda maxime odio voluptatum?
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="row mt-4">
                        <p>Bản quyền đám mây lưu trữ Seafile phiên bản Pro được tính theo số lượng người dùng trong thời gian
                            một năm, bao gồm chi phí bản quyền và hỗ trợ kỹ thuật từ đội ngũ chuyên viên Seafile.</p>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Số lượng Users</th>
                                    <th scope="col"> Chi phí / Năm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Từ 5 đến 50</td>
                                    <td>1.100.000 VNĐ/User</td>
                                </tr>
                                <tr>
                                    <td>Từ 5 đến 50</td>
                                    <td>1.100.000 VNĐ/User</td>
                                </tr>
                                <tr>
                                    <td>Từ 5 đến 50</td>
                                    <td>1.100.000 VNĐ/User</td>
                                </tr>
                                <tr>
                                    <td>Từ 5 đến 50</td>
                                    <td>1.100.000 VNĐ/User</td>
                                </tr>
                                <tr>
                                    <td>Từ 5 đến 50</td>
                                    <td>1.100.000 VNĐ/User</td>
                                </tr>
                                <tr>
                                    <td>Từ 1000 user trở lên</td>
                                    <td>
                                        <a href="" class="btn-info-custom">Liên hệ chúng tôi</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <p>Chi phí gia hạn hàng năm chỉ bằng 50% chi phí ban đầu khi quý doanh nghiệp đăng ký gia hạn trong
                            vòng 06 tháng kể từ ngày hết hạn. Sau thời gian trên, chi phí gia hạn là 75% so với giá ban đầu.
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    <div class="row mt-4">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Tính Năng Chính</th>
                                    <th scope="col">Tính Năng Chi Tiết</th>
                                    <th scope="col">Open Source</th>
                                    <th scope="col">Seafile Pro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Đồng bộ và chia sẻ</td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td>Đồng bộ và chia sẻ</td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td>Đồng bộ và chia sẻ</td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td>Đồng bộ và chia sẻ</td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Đồng bộ đa nền tảng</td>
                                    <td>Có</td>
                                    <td>Có</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <div class="row mt-4">
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                        <div class="col-12 col-sm-4 mt-3">
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing.?</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, esse quia? Suscipit laboriosam tempore
                                minus saepe vel fugit. Sint, voluptatem!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section2-->
</div>
@endsection
