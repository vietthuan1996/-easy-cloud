@extends('layout.admin')
@section('content')
<div class="col-md-12">
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('fail'))
        <p class="alert alert-danger">{{ Session::get('fail') }}</p>
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
        <form method="post" action="{{ route('admin.editInformation') }}" class="form-horizontal" enctype="multipart/form-data" id="createValidation">
            {{ csrf_field() }}
            <input type="hidden" name="imageExist" value="{{ $information == null ? '' : $information->logo }}">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thông tin công ty</h4>
            </div>
            <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Logo</label>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{ asset( $information == null ? '' : ($information->logo == null ? '' : $information->logo))}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" {{$information == null ? 'required' : ($information->logo == null ? 'required' : '')}}/>
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                {{--  Company_name --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Tên công ty</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="company_name" class="form-control" value="{{ $information == null ? '' : ($information->company_name == null ? '' :$information->company_name)}}">
                        </div>
                    </div>
                </div>
                {{--  /Company_name     --}}

                {{--  Address  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Địa chỉ</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="address" class="form-control" value="{{ $information == null ? '' : ($information->address == null ? '' :$information->address)}}">
                        </div>
                    </div>
                </div>
                {{--  /Address  --}}
                {{--  Hotline  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Hotline/Phone</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="phone" class="form-control" value="{{ $information == null ? '' : ($information->hotline == null ? '' :$information->hotline)}}">
                        </div>
                    </div>
                </div>
                {{--  /Hotline  --}}
                {{--  Email  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Email</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="email" name="email" class="form-control" value="{{ $information == null ? '' : ($information->email == null ? '' :$information->email)}}">
                        </div>
                    </div>
                </div>
                {{--  Email  --}}

                {{--  Website  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Website</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" name="website" class="form-control" value="{{ $information == null ? '' : ($information->website == null ? '' :$information->website)}}">
                        </div>
                    </div>
                </div>
                {{--  Website  --}}

                {{--  Giới thiệu  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Giới thiệu</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" id="describe" name="describe" rows="10">
                                {{ $information == null ? '' : ($information->describe == null ? '' : $information->describe)}}
                            </textarea>
                        </div>
                    </div>
                </div>
                {{--  Giới thiệu  --}}

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
        CKEDITOR.replace( 'describe' );
    });
</script>
@endsection
