@extends('layouts.app')

@section('title')
Outro
@endsection

@section('content')

<video width="100%" autoplay loop playsinline muted>
    <source src="{{ asset('files/media/vid/bgvid.mp4') }}" type="video/mp4" />
</video>

<div class="container-fluid fixed-top">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2 ">
            <div class="row px-3 d-flex justify-content-between">
                <div class="">
                    <a class="text-left text-white" href="{{ route('index') }}">
                        <h5 class="pt-2 fm-g">KBLACKTHEBLACK</h5>
                    </a>
                </div>

                <div class="">
                    <a class="text-right text-white" href="{{ route('index') }}">
                        <h5 class="pt-2 fm-g">DOKA SHOT</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container ">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center py-5 ">
            <img class="mainart" width="550px" height="550px" style="opacity:0.9; margin-left: auto;
            margin-right: auto; " src="{{ asset('files/media/img/pvo.png') }}" alt="">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>
</div>


<div class="container-fluid fixed-bottom">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  text-left w-50 py-0  d-none d-sm-block d-md-block">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center animate__animated animate__slideInUp text-white py-3 songtitle"
            style="border-radius:10px; background-color: rgba(0, 0, 0, 0.7)    /*  0% opaque green */ ;">
            <h5 style="color: red;">PVO (Outro)</h5>
            <p>Ft Mo Bolaji</p>
            <p style="line-height: 1; font-size:13px;">Outro Spelling out
                relationships, nursery
                rhymes graced a part on the
                ecstatic exit from of the
                project.</p>

            <audio id="bg_audio" autoplay loop>
                <source src="{{ asset('files/media/music/outro.mp3') }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
            <div class="col-lg-12 md-12 col-sm-12 col-xs-12">
                <button class="rounded-pill  btn text-white text-center" style="background-color: red; border-color:red !important;"
                    id="playPauseBtn" onclick="toggle_visibility('foo');">
                    <span class="d-flex justify-content-center">
                        Sounds
                        <span class="px-2" style="display: none;" id="foo" data-v-0f42235e="" class="icon"><svg
                                data-v-0f42235e="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="soundoff">
                                <path data-v-0f42235e=""
                                    d="M17.5303 8.46965C17.2374 8.17676 16.7626 8.17676 16.4697 8.46965C16.1768 8.76254 16.1768 9.23742 16.4697 9.53031L17.5303 8.46965ZM22.4697 15.5303C22.7626 15.8232 23.2374 15.8232 23.5303 15.5303C23.8232 15.2374 23.8232 14.7625 23.5303 14.4697L22.4697 15.5303ZM23.5303 9.53031C23.8232 9.23742 23.8232 8.76254 23.5303 8.46965C23.2374 8.17676 22.7626 8.17676 22.4697 8.46965L23.5303 9.53031ZM16.4697 14.4697C16.1768 14.7625 16.1768 15.2374 16.4697 15.5303C16.7626 15.8232 17.2374 15.8232 17.5303 15.5303L16.4697 14.4697ZM6.13039 16.0931L5.69446 16.7034L6.13039 16.0931ZM5.83977 7.99998L5.83977 7.24998L5.83977 7.99998ZM6.13039 7.90685L5.69446 7.29655L6.13039 7.90685ZM11.4188 19.8705L10.9828 20.4808L11.4188 19.8705ZM11.4188 4.12944L11.8547 4.73974L11.4188 4.12944ZM2 7.99999L2 8.74999L2 7.99999ZM16.4697 9.53031L19.4697 12.5303L20.5303 11.4696L17.5303 8.46965L16.4697 9.53031ZM19.4697 12.5303L22.4697 15.5303L23.5303 14.4697L20.5303 11.4696L19.4697 12.5303ZM20.5303 12.5303L23.5303 9.53031L22.4697 8.46965L19.4697 11.4696L20.5303 12.5303ZM19.4697 11.4696L16.4697 14.4697L17.5303 15.5303L20.5303 12.5303L19.4697 11.4696ZM12.25 4.94317V19.0568H13.75V4.94317H12.25ZM1.75 15V8.99999H0.25V15H1.75ZM2 8.74999L5.83977 8.74998L5.83977 7.24998L2 7.24999L2 8.74999ZM6.56631 8.51715L11.8547 4.73974L10.9828 3.51914L5.69446 7.29655L6.56631 8.51715ZM11.8547 19.2602L6.56631 15.4828L5.69446 16.7034L10.9828 20.4808L11.8547 19.2602ZM5.83977 15.25H2V16.75H5.83977V15.25ZM6.56631 15.4828C6.35431 15.3314 6.1003 15.25 5.83977 15.25V16.75C5.78766 16.75 5.73686 16.7337 5.69446 16.7034L6.56631 15.4828ZM5.83977 8.74998C6.1003 8.74998 6.35432 8.66858 6.56631 8.51715L5.69446 7.29655C5.73686 7.26626 5.78766 7.24998 5.83977 7.24998L5.83977 8.74998ZM0.25 15C0.25 15.9665 1.0335 16.75 2 16.75V15.25C1.86193 15.25 1.75 15.1381 1.75 15H0.25ZM12.25 19.0568C12.25 19.2601 12.0202 19.3784 11.8547 19.2602L10.9828 20.4808C12.1411 21.3082 13.75 20.4802 13.75 19.0568H12.25ZM13.75 4.94317C13.75 3.51977 12.1411 2.6918 10.9828 3.51914L11.8547 4.73974C12.0202 4.62155 12.25 4.73983 12.25 4.94317H13.75ZM1.75 8.99999C1.75 8.86192 1.86193 8.74999 2 8.74999L2 7.24999C1.0335 7.24999 0.25 8.03349 0.25 8.99999H1.75Z"
                                    fill="white"></path>
                            </svg>
                        </span>
                    </span> 
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    document.getElementById("playPauseBtn").addEventListener("click", function () {
        $('audio').prop('muted', !$('audio').prop('muted'));
    });

</script>

<script type="text/javascript">
    <!--
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
    //

    -->
</script>
@endsection
