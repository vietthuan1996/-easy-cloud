@extends('layout.admin')
@section('content')
{{--  tab  --}}
<div class="col-md-12">
    <div class="card">
        <form method="get" action="/" class="form-horizontal" id="createValidation">
            <div class="card-header card-header-text" data-background-color="rose">
                <h4 class="card-title">Tab</h4>
            </div>
            <div class="card-content">
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
                <div class="row">
                    <label class="col-sm-2 label-on-left">Nội dung</label>
                    <div class="col-sm-10">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea required class="form-control" name="content" id="content" rows="10"></textarea>
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

        CKEDITOR.replace( 'content' );
    });
</script>
@endsection
