@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')


<video id="myVideo" width="100%"  playsinline autoplay muted>
  <source src="{{ asset('files/media/vid/introvid2.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
</video>    

<div class="container-fluid fixed-top">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 ">
            <div class="row px-3 d-flex justify-content-between">
                <div class="">
                    <a class="text-left text-white" href="{{ route('soul-ecstasy') }}">
                        <h5 class="pt-2 fm-g">KBLACKTHEBLACK</h5>
                    </a>
                </div>

                <div class="">
                    <a class="text-right text-white" href="{{ route('soul-ecstasy') }}">
                        <h5 class="pt-2 fm-g">DOKA SHOT</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container fixed-bottom">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center py-4 ">
            <a class="d-flex justify-content-center text-white" href="{{ route('soul-ecstasy') }}">
                <img src="{{ asset('files/media/svg/sword.svg') }}" alt="">
                <h4 class="px-4 pt-2 fm-g"> Skip Intro </h4>
                <img src="{{ asset('files/media/svg/sword.svg') }}" alt="">
            </a>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#myVideo").bind('ended', function () {
            location.href = "{{ route('soul-ecstasy') }}";
        });
    });

</script>

@endsection
