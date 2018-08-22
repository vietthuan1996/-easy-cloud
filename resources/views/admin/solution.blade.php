@extends('layout.admin')
@section('content')
    @if(!is_null($solution))
        @foreach($solution as $sObject)
<div class="col-md-4">
    <div class="card card-product">
        <div class="card-image" data-header-animation="true">
            <a href="#pablo">
                    <img class="img" src="{{ asset('img/card-2.jpeg') }}">
                </a>
        </div>
        <div class="card-content">
            <div class="card-actions">
                <a href="{{ route('admin.solution.edit', 1) }}" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Cập nhật">
                        <i class="material-icons">edit</i>
                    </a>
                <a type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Xóa">
                        <i class="material-icons">close</i>
                    </a>
            </div>
            <h4 class="card-title">
                <a href="#pablo">{{ $sObject->name }}</a>
            </h4>
            <div class="card-description">
                {{ str_limit($sObject->describe, 200) }}
            </div>
        </div>
    </div>
</div>
        @endforeach
    @elseif (is_null($solution))
        <p>Không có Giải Pháp nào cả, vui lòng thêm Giải Pháp !</p>
    @else
    @endif
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
