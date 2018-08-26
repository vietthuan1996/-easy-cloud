@extends('layout.web')
@section('content')
<div class="tech">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <div class="text-center col-12">
                <h1>DỊCH VỤ <i class="fab fa-centercode"></i></h1>
            </div>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 col-12 feature">
        @if(!is_null($service))
            @foreach($service as $s)
        <div class="row">
            <div class="col-12 col-sm-6 text-center img">
                <img src="{{ asset($s->image) }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-5 text-center content ">
                <a href="{{ $s->type_show == 0 ? $s->link : $s->slug }}">
                    <h3> {{ $s->name }} </h3>
                    <p>
                        {{ str_limit(strip_tags($s->describe), 200) }}
                    </p>
                </a>
                <a href="{{ $s->type_show == 0 ? $s->link : 'dichvu/'.$s->slug }}" class="btn-info-custom"><i class="fas fa-angle-double-right"></i> CHI TIẾT</a>
            </div>
        </div>
            @endforeach
            @endif
    </section>
    <!-- /section2-->
</div>
@endsection
