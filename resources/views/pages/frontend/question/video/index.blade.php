@extends('layouts.frontend.app')
@section('title', 'Home')
@push('styles')
    <style type="text/css">
        .home-video-question {
          background-color: #ffffff;
          display: flex;
          flex-direction: row;
          justify-content: center;
          width: 100%;
        }

        .overlap-wrapper {
          background-color: #ffffff;
        }

        .overlap {
          position: relative;
        }

        .group {
          position: absolute;
          top: 0;
          left: 0;
          background-image: url(https://c.animaapp.com/9fRrxjeq/img/mask-group.png);
          background-size: 100% 100%;
        }

        .img {
          position: absolute;
          width: 65px;
          height: 65px;
          top: 328px;
          left: 608px;
        }

        .banner-image {
          position: relative;
        }

        .group-2 {
          position: relative;
        }

        .overlap-group-wrapper {
          position: relative;
        }

        .overlap-group {
          position: relative;
          width: 98px;
          height: 35px;
        }

        .group-3 {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 2px;
          left: 8px;
        }

        .div-wrapper {
          position: absolute;
          width: 32px;
          height: 28px;
          top: 0;
          left: 0;
        }

        .div {
          position: relative;
          width: 29px;
          height: 29px;
          background-image: url(https://c.animaapp.com/9fRrxjeq/img/group-2@2x.png);
          background-size: 100% 100%;
        }

        .ellipse {
          position: absolute;
          width: 22px;
          height: 22px;
          top: 3px;
          left: 3px;
        }

        .subtraction {
          position: absolute;
          width: 17px;
          height: 19px;
          top: 6px;
          left: 8px;
        }

        .subtraction-2 {
          position: absolute;
          width: 14px;
          height: 21px;
          top: 3px;
          left: 4px;
        }

        .text-wrapper {
          position: absolute;
          top: 8px;
          left: 11px;
          font-family: "RR Beaver-Regular", Helvetica;
          font-weight: 400;
          color: #ff8c00;
          font-size: 16px;
          letter-spacing: 0;
          line-height: normal;
          white-space: nowrap;
        }

        .text-wrapper-2 {
          position: absolute;
          top: 7px;
          left: 9px;
          font-family: "RR Beaver-Regular", Helvetica;
          font-weight: 400;
          color: #ffde3b;
          font-size: 16px;
          letter-spacing: 0;
          line-height: normal;
          white-space: nowrap;
        }

        .text-wrapper-3 {
          position: absolute;
          top: 5px;
          left: 52px;
          font-family: "Poppins", Helvetica;
          font-weight: 600;
          color: #ffffff;
          font-size: 13px;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-4 {
          position: relative;
        }

        .overlap-2 {
          position: relative;
          width: 101px;
          height: 37px;
          top: -4px;
          left: -4px;
        }

        .group-5 {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 4px;
          left: 11px;
        }

        .group-6 {
          position: absolute;
          width: 21px;
          height: 17px;
          top: 10px;
          left: 73px;
        }

        .overlap-group-2 {
          position: relative;
          width: 19px;
          height: 17px;
        }

        .path {
          position: absolute;
          width: 19px;
          height: 15px;
          top: 0;
          left: 0;
        }

        .text-wrapper-4 {
          position: absolute;
          top: 0;
          left: 5px;
          font-family: "Gotham Rounded-BoldItalic", Helvetica;
          font-weight: 700;
          font-style: italic;
          color: #b20340;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-7 {
          position: absolute;
          width: 34px;
          height: 33px;
          top: 0;
          left: 0;
        }

        .text-wrapper-5 {
          position: absolute;
          top: 8px;
          left: 48px;
          font-family: "Poppins", Helvetica;
          font-weight: 600;
          color: #ffffff;
          font-size: 13px;
          letter-spacing: 0;
          line-height: normal;
        }

    </style>
@endpush
@section('content')
<div class="container-fluid">
    <a href="{{ route('question.video.questions') }}">
        <div class="row">
            <!-- <div class="col-auto col-12">
                <div class="d-flex align-items-center">
                    <div class="mx-auto p-2 overlap-group-wrapper d-flex align-items-center">
                        <img class="group-2 text-danger" src="https://c.animaapp.com/9fRrxjeq/img/group-1775@2x.png" />
                        <div class="overlap-group">
                            <img class="group-3" src="https://c.animaapp.com/9fRrxjeq/img/group-3@2x.png" />
                            <div class="div-wrapper">
                                <div class="div">
                                    <img class="ellipse" src="https://c.animaapp.com/9fRrxjeq/img/ellipse-99.svg" />
                                    <img class="subtraction" src="https://c.animaapp.com/9fRrxjeq/img/subtraction-8.svg" />
                                    <img class="subtraction-2" src="https://c.animaapp.com/9fRrxjeq/img/subtraction-7.svg" />
                                    <div class="text-wrapper">T</div>
                                    <div class="text-wrapper-2">T</div>
                                </div>
                            </div>
                            <div class="text-wrapper-3">9910</div>
                        </div>
                    </div>
                    <div class="mx-auto p-2 group-4">
                        <div class="overlap-2">
                            <img class="group-5" src="https://c.animaapp.com/9fRrxjeq/img/group-1@2x.png" />
                            <div class="group-6">
                                <div class="overlap-group-2">
                                    <img class="path" src="https://c.animaapp.com/9fRrxjeq/img/path-342.svg" />
                                    <div class="text-wrapper-4">+</div>
                                </div>
                            </div>
                            <img class="group-7" src="https://c.animaapp.com/9fRrxjeq/img/group-146@2x.png" />
                            <div class="text-wrapper-5">2</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-auto col-12 p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="row" style="position: absolute;">
                        <div class="col-auto col-6">
                            <div class="overlap-group-wrapper d-flex align-items-center">
                                <img class="group-2 text-danger" src="https://c.animaapp.com/9fRrxjeq/img/group-1775@2x.png" />
                                <div class="overlap-group">
                                    <img class="group-3" src="https://c.animaapp.com/9fRrxjeq/img/group-3@2x.png" />
                                    <div class="div-wrapper">
                                        <div class="div">
                                            <img class="ellipse" src="https://c.animaapp.com/9fRrxjeq/img/ellipse-99.svg" />
                                            <img class="subtraction" src="https://c.animaapp.com/9fRrxjeq/img/subtraction-8.svg" />
                                            <img class="subtraction-2" src="https://c.animaapp.com/9fRrxjeq/img/subtraction-7.svg" />
                                            <div class="text-wrapper">T</div>
                                            <div class="text-wrapper-2">T</div>
                                        </div>
                                    </div>
                                    <div class="text-wrapper-3">9910</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto col-6">
                            <div class="group-4">
                                <div class="overlap-2">
                                    <img class="group-5" src="https://c.animaapp.com/9fRrxjeq/img/group-1@2x.png" />
                                    <div class="group-6">
                                        <div class="overlap-group-2">
                                            <img class="path" src="https://c.animaapp.com/9fRrxjeq/img/path-342.svg" />
                                            <div class="text-wrapper-4">+</div>
                                        </div>
                                    </div>
                                    <img class="group-7" src="https://c.animaapp.com/9fRrxjeq/img/group-146@2x.png" />
                                    <div class="text-wrapper-5">2</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('assets/videos/sony-test-video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <!-- <video width="auto" height="auto" controls>
                    <source src="{{ asset('assets/videos/sony-test-video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>  -->
            </div>
        </div>
    </a>
</div>
@endsection
@push('scripts')
<script>
    // var mySwiper = new Swiper('.mySwiper', {
    //     // Optional parameters
    //     loop: true,

    //     // If we need pagination
    //     pagination: {
    //         el: '.swiper-pagination',
    //     },
    // })
    $(document).ready(function () {

    })
</script>
@endpush