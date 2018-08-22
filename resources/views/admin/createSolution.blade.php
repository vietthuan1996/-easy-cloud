@extends('layout.admin')
@section('content')
{{--  form  --}}
<div class="col-md-12">
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <div class="card">
        <form method="post" action="{{ route('admin.solution.save') }}" class="form-horizontal" enctype="multipart/form-data" id="createValidation">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $solution == null ? '' : $solution->id }}">
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
                            <input required type="text" name="name" class="form-control" value="{{ $solution == null ? '' : $solution->name }}">
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
                            <input required type="file" name="image" />
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
                            <textarea required id="contentDescribe" class="form-control" name="describe" rows="10">
                                {{ $solution == null ? '' : $solution->describe }}
                            </textarea>
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
                            <textarea required id="contentPost" class="form-control" name="contentSolution" rows="10">
                                {{ $solution == null ? '' : $solution->content }}
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 label-on-left">Đường link</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input required  class="form-control" name="link" rows="10" value="{{ $solution == null ? '' : $solution->link }}">
                            </input>
                        </div>
                    </div>
                </div>
                {{-- content --}}

                <div class="row">
                    <label class="col-sm-2 label-on-left"></label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="radio" name="type_show" value="0" {{ $solution == null ? '' : $solution->type_show == 0 ? 'checked' : '' }}> Hiển thị dạng đường link<br>
                            <input type="radio" name="type_show" value="1" {{ $solution == null ? '' : $solution->type_show == 1 ? 'checked' : '' }}> Hiển thị dạng nội dung<br>
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{--  form  --}}

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
        CKEDITOR.replace( 'contentPost' );
        CKEDITOR.replace( 'contentDescribe' );

    });
</script>
@endsection
