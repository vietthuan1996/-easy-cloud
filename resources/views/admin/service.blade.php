@extends('layout.admin')
@section('content')
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('fail'))
        <p class="alert alert-danger">{{ Session::get('fail') }}</p>
    @endif
    @if(!is_null($services))
        @foreach($services as $service)
<div class="col-md-4">
    <div class="card card-product">
        <div class="card-image" data-header-animation="true">
            <a href="#pablo">
                    <img class="img" src="{{ asset($service->image == null ? 'img/card-2.jpeg' : $service->image) }}">
                </a>
        </div>
        <div class="card-content">
            <div class="card-actions">
                <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Cập nhật">
                        <i class="material-icons">edit</i>
                    </a>
                <a href="{{ route('admin.service.delete', $service->id) }}" type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Xóa" onclick="return confirm('Bạn có muốn xoá hay không ?')">
                    <i class="material-icons">close</i>
                </a>
            </div>
            <h4 class="card-title">
                <a href="#pablo">{{$service->name == null ? '' : $service->name}}</a>
            </h4>
            <div class="card-description">
                {{str_limit(strip_tags($service->describe == null ? '' : $service->describe),200)}}
            </div>
        </div>
    </div>
</div>
    @endforeach
        {{ $services->links()}}
    @elseif (is_null($services))
        <p>Không có Giải Pháp nào cả, vui lòng thêm Giải Pháp !</p>
    @else
    @endif
<div class="col-md-4">
    <div class="card card-product">
        <div class="card-content">
            <div class="card-description">
                <a href="{{ route('admin.service.create') }}" class="btn btn-success">Thêm</a>
            </div>
        </div>
    </div>
</div>

@endsection
