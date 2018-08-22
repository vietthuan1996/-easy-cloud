@extends('layout.admin')
@section('content')
<div class="col-md-12">
    <div class="card">
        <form method="post" id="createValidation" action="/" class="form-horizontal">
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
                            <input type="text" class="form-control" required="true">
                        </div>
                    </div>
                </div>
                {{--  /title  --}}

                {{--  image  --}}
                <div class="row text-center">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="..." required/>
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
                            <textarea required class="form-control" name="describe" rows="10"></textarea>
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
                            <textarea id="content" required class="form-control" name="content" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                {{--  content  --}}

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

        CKEDITOR.replace( 'content' );
    });
</script>
@endsection
