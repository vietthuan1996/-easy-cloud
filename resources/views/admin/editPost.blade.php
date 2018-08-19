@extends('layout.admin')
@section('content')
{{--  form  --}}
<div class="col-md-12">
    <div class="card">
        <form method="get" action="/" class="form-horizontal" id="createValidation">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Sửa bài</h4>
            </div>
            <div class="card-content">
                {{--  title  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Tiêu đề</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" class="form-control">
                        </div>
                    </div>
                </div>
                {{-- /title --}}

                {{--  image  --}}
                <div class="row text-center">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{asset('/img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input required type="file" name="..." />
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                {{-- /image --}}

                {{--  describe  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Mô tả</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="describe" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                {{-- /describe --}}

                {{--  content  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Nội dung</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="content" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                {{-- content --}}

                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{--  form  --}}

<div class="col-md-12 text-center">
    <a href="{{ route('admin.tab.create')}}" class="btn btn-info">Thêm Tab</a>
</div>

{{--  tab  --}}
<div class="col-md-12">
    <div class="card">
        <form method="get" action="/" class="form-horizontal" id="tabValidation">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Tab</h4>
            </div>
            <div class="card-content">
                <div class="row">
                    <label class="col-sm-2 label-on-left">Tiêu đề</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required type="text" class="form-control" name="title">
                        </div>
                    </div>
                </div>
                {{-- /title --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Nội dung</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="content" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                {{-- content --}}

                <div class="col-xs-12 text-right">
                    <a href="" class="btn btn-warning">Xóa</a>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{--  tab  --}}
<script type="text/javascript">
    function setFormValidation(id) {
        $(id).validate({
            errorPlacement: function(error, element) {
                $(element).closest('div').addClass('has-error');
            }
        });
    }

    $(document).ready(function() {
        setFormValidation('#createValidation');
        setFormValidation('#tabValidation');


    });
</script>
@endsection
