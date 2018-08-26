@extends('layout.admin')
@section('content')
    <div class="col-md-12">
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <form method="post" action="{{ route('admin.changePassword') }}" class="form-horizontal" id="createValidation">
                {{ csrf_field() }}
                    <div class="row">
                        <label class="col-sm-2 label-on-left">Mật khẩu hiện tại</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input required type="password" name="currentPassword" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 label-on-left">Mật khẩu mớỉ</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input required type="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 label-on-left">Xác nhận mật khẩu</label>
                        <div class="col-sm-10">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"></label>
                                <input required type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{--  /Hotline  --}}


                    <div class="col-xs-12 text-right">
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function(error, element) {
                    $(element).closest('div').addClass('has-error');
                }
            });
        }

        $(document).ready(function() {
            setFormValidation('#createValidation');
        });
    </script>
@endsection
