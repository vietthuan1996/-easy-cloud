@extends('layout.admin')
@section('content')
<div class="card card-product">
    <div class="card-content">
        <h4 class="card-title">Ten nguoi gui</h4>
        <h4 class="card-title">Email: email@emial.com</h4>
        <div class="card-description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit ipsam repellendus, blanditiis excepturi nam minus dolor dolore atque ipsum possimus!
        </div>
    </div>

    <div class="card-footer">
        {{--  <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
            <i class="material-icons"></i>
        </button>  --}}
        <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Xóa">
            <i class="material-icons">close</i>
        </button>
    </div>
</div>
@endsection
