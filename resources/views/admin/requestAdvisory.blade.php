@extends('layout.admin')
@section('content')
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('fail'))
        <p class="alert alert-danger">{{ Session::get('fail') }}</p>
    @endif
    @if(!is_null($requestAdvisory))
        @foreach($requestAdvisory as $request)
    <div class="card card-product">
    <div class="card-content">
        <h4 class="card-title">{{$request->name}}</h4>
        <h4 class="card-title">{{$request->email}}</h4>
        <div class="card-description">
            {{$request->content}}
        </div>
    </div>

    <div class="card-footer">
        <a href="{{ route('admin.requestAdvisory.delete', $request->id) }}" type="button" class="btn btn-danger btn-simple removeSolution" rel="tooltip" data-placement="bottom" title="Xóa" onclick="return confirm('Bạn có muốn xoá hay không ?')">
            <i class="material-icons">close</i>
        </a>
    </div>
</div>
    @endforeach
        {{$requestAdvisory->links()}}
    @elseif (is_null($requestAdvisory))
        <p>Không có liên hệ được gửi đến !</p>
    @else
    @endif
@endsection
