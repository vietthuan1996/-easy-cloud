@extends('layout.admin')
@section('content')
    <div class="col-md-5">
        <form method="post" action="{{ route('admin.adminAddManagement') }}" class="form-horizontal" id="createValidation">
            {{ csrf_field() }}
            <div class="row">
                <label class="col-sm-2 label-on-left">Email</label>
                <div class="col-sm-10">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"></label>
                        <input required type="text" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-right">
                <button type="submit" class="btn btn-success">Thêm</button>
            </div>
        </form>
    </div>
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
            <table class="table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Xoá</th>
                </tr>
                </thead>
                @if(!is_null($admin))

                <tbody>
                @foreach($admin as $admins)
                    @if($admins->role !== 1)
                <tr>
                    <td>{{ $admins->email }}</td>
                    <td><a href="{{ route('admin.adminRemoveManagement', $admins->id) }}" class="btn btn-danger btn-xs">Xoá</a></td>
                </tr>
                @endif
                @endforeach
                </tbody>
                    @endif
            </table>
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
