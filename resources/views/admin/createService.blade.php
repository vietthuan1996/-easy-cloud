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
        <form method="post" action="{{ route('admin.service.save') }}" class="form-horizontal" enctype="multipart/form-data" id="createValidation">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $service == null ? '' : $service->id }}">
            <input type="hidden" name="imageExist" value="{{ $service == null ? '' : $service->image }}">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Thêm bài</h4>
            </div>
            <div class="card-content">
                {{--  title  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Tiêu đề *</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" name="name" required="true" value="{{ $service == null ? '' : $service->name }} {{old('name')}}">
                        </div>
                    </div>
                </div>
                {{--  /title  --}}

                {{--  image  --}}
                <div class="row text-center">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{asset($service == null ? '/img/image_placeholder.jpg' : $service->image)}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image" {{ $service == null ? 'required' : $service->image == null ? 'required' : ''}}/>
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                {{--  /image  --}}

                {{--  describe  --}}
                <div class="row">
                    <label class="col-sm-2 label-on-left">Mô tả *</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="describe" rows="10">
                                {{ $service == null ? '' : $service->describe }}
                                {{old('describe')}}
                            </textarea>
                        </div>
                    </div>
                </div>
                {{--  /describe  --}}

                {{--  content  --}}
                <div class="row inputContent">
                    <label class="col-sm-2 label-on-left">Nội dung *</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea id="content" required class="form-control" name="content" rows="10">
                                {{ $service == null ? '' : $service->content }}
                                {{old('content')}}
                            </textarea>
                        </div>
                    </div>
                </div>
                {{--  content  --}}

                <div class="row">
                    <label class="col-sm-2 label-on-left">Đường link</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required  class="form-control" name="link" rows="10" value="{{ $service == null ? '' : $service->link }} {{old('link')}}">
                            </input>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left"></label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="radio" name="type_show" value="0" {{ $service == null ? '' : $service->type_show == 0 ? 'checked' : '' }}> Hiển thị dạng đường link<br>
                            <input type="radio" name="type_show" value="1" {{ $service == null ? '' : $service->type_show == 1 ? 'checked' : '' }}> Hiển thị dạng nội dung<br>
                            </input>
                        </div>
                    </div>
                </div>

                {{--  submit  --}}
                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
                {{--  submit  --}}
            </div>
        </form>
    </div>
</div>
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
        CKEDITOR.replace( 'describe' );
        CKEDITOR.replace( 'content' );
    });
</script>
@endsection
