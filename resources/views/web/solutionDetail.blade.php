@extends('layout.web')
@section('content')
<div class=" cloud-storage">
    <!-- section1 -->
    <section class="section1 row m-0">
        <div class="text-center col-12 logo">
            <h1>
                {{ $solution->name }}
                {{--<i class="fab fa-cloudversify"></i>--}}
            </h1>
        </div>
    </section>
    <!-- /section1 -->
    <!-- section2 -->
    <section class="section2 container feature">
        <div class="row">
            <div class="col-12">
                <p>
                    {{ strip_tags($solution->content) }}
                </p>
            </div>
        </div>
    </section>
    <!-- /section2-->
</div>
@endsection
