@extends('layout.web')
@section('content')
<div class="resolve">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>GIẢI PHÁP <i class="fas fa-wrench"></i></h1>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 col-12 feature">
        @if(!is_null($solution))
            @foreach($solution as $s)
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
                        <a href="{{ $s->type_show == 0 ? $s->link : 'giaiphap/'.$s->slug }}" class="btn-info-custom"><i class="fas fa-angle-double-right"></i> CHI TIẾT</a>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
    <!-- /section2-->
</div>
@endsection
