@extends('layout.admin')
@section('content')
<div class="col-md-4">
    <div class="card card-product">
        <div class="card-image" data-header-animation="true">
            <a href="#pablo">
                    <img class="img" src="{{ asset('img/card-2.jpeg') }}">
                </a>
        </div>
        <div class="card-content">
            <div class="card-actions">
                <a href="{{ route('admin.solution.edit')}}" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Cập nhật">
                        <i class="material-icons">edit</i>
                    </a>
                <a type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Xóa">
                        <i class="material-icons">close</i>
                    </a>
            </div>
            <h4 class="card-title">
                <a href="#pablo">Cozy 5 Stars Apartment</a>
            </h4>
            <div class="card-description">
                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main
                night life in Barcelona.
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-product">
        <div class="card-content">
            <div class="card-description">
                <a href="{{ route('admin.solution.create') }}" class="btn btn-success">Thêm</a>
            </div>
        </div>
    </div>
</div>

@endsection
