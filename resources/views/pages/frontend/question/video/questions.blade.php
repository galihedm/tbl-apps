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

        .div {
          background-color: #ffffff;
          overflow: hidden;
          width: 1280px;
          height: 720px;
          position: relative;
        }

        .overlap {
          position: absolute;
          width: 1280px;
          height: 52px;
          top: 274px;
          left: 0;
        }

        .question-info {
          position: absolute;
          width: 206px;
          height: 48px;
          top: 4px;
          left: 538px;
        }

        .overlap-group {
          position: relative;
          width: 208px;
          height: 52px;
          top: -2px;
          left: -2px;
          background-color: #ed1c24;
          border-radius: 0px 0px 24px 24px;
          border: 2px solid;
          border-color: #fac304;
        }

        .label {
          position: absolute;
          top: 15px;
          left: 85px;
          font-family: "Poppins", Helvetica;
          font-weight: 700;
          color: #ffffff;
          font-size: 15px;
          letter-spacing: 0.3px;
          line-height: 24px;
          white-space: nowrap;
        }

        .progress-indicator {
          position: absolute;
          width: 1280px;
          height: 8px;
          top: 0;
          left: 0;
          background-color: #fac304;
          box-shadow: 0px 4px 16px #00000040;
        }

        .running {
          width: 963px;
          height: 8px;
          background-color: #ffffff;
          border-radius: 0px 4px 4px 0px;
        }

        .overlap-2 {
          position: absolute;
          width: 100%;
          height: 274px;
          top: 0;
          left: 0;
        }

        .banner-image {
          position: relative;
          width: 100%;
          height: 75vh;
          background-color: #ed1c24;
        }

        .group {
          position: relative;
          width: 24px;
          height: 24px;
        }

        .overlap-wrapper {
          position: relative;
          width: 94px;
          height: 28px;
        }

        .overlap-3 {
          position: relative;
          width: 98px;
          height: 35px;
        }

        .img {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 2px;
          left: 8px;
        }

        .overlap-group-wrapper {
          position: absolute;
          width: 32px;
          height: 28px;
          top: 0;
          left: 0;
        }

        .overlap-group-2 {
          position: relative;
          width: 29px;
          height: 29px;
          background-image: url(https://c.animaapp.com/jpVby7k9/img/group-1@2x.png);
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

        .div-wrapper {
          position: relative;
          width: 93px;
          height: 25px;
        }

        .overlap-4 {
          position: relative;
          width: 101px;
          height: 37px;
          top: -4px;
          left: -4px;
        }

        .group-2 {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 4px;
          left: 11px;
        }

        .group-3 {
          position: absolute;
          width: 21px;
          height: 17px;
          top: 10px;
          left: 73px;
        }

        .overlap-group-3 {
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

        .group-4 {
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

        .group-5 {
          position: relative;
          max-width: 375px;
          max-height: 200px;
        }

        .mask-group-wrapper {
          position: relative;
          width: 387px;
          height: 212px;
          background-color: #fac304;
          border-radius: 16px;
        }

        .mask-group {
          position: absolute;
          width: 375px;
          height: 200px;
          top: 6px;
          left: 6px;
        }

        .pertanyaan-akan {
          position: absolute;
          width: 443px;
          top: 360px;
          left: 419px;
          font-family: "Poppins", Helvetica;
          font-weight: 600;
          color: #262626;
          font-size: 16px;
          text-align: center;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-6 {
          position: absolute;
          width: 280px;
          height: 54px;
          top: 666px;
          left: 501px;
        }

        .rectangle {
          position: absolute;
          width: 54px;
          height: 278px;
          top: -112px;
          left: 112px;
          background-color: var(--x-2c-4676);
          border-radius: 10px 0px 0px 10px;
          transform: rotate(90deg);
        }

        .text-wrapper-6 {
          position: absolute;
          top: 19px;
          left: 20px;
          font-family: "Poppins", Helvetica;
          font-weight: 400;
          color: var(--ffffff);
          font-size: 15px;
          text-align: justify;
          letter-spacing: 0;
          line-height: 15px;
          white-space: nowrap;
        }

        .group-7 {
          position: absolute;
          width: 21px;
          height: 21px;
          top: 16px;
          left: 236px;
        }

        .group-8 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 536px;
          left: 290px;
        }

        .overlap-5 {
          position: relative;
          width: 327px;
          height: 62px;
          border-radius: 136px;
        }

        .rectangle-2 {
          position: absolute;
          width: 327px;
          height: 62px;
          top: 0;
          left: 0;
          background-color: #ffffff;
          border-radius: 136px;
          box-shadow: 10px 24px 54px #0000000a;
          opacity: 0.88;
        }

        .text-wrapper-7 {
          position: absolute;
          width: 164px;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-9 {
          position: absolute;
          width: 42px;
          height: 40px;
          top: 11px;
          left: 11px;
        }

        .overlap-group-4 {
          position: relative;
          width: 40px;
          height: 40px;
          background-color: #ed1c24;
          border-radius: 20px;
        }

        .text-wrapper-8 {
          position: absolute;
          top: 10px;
          left: 16px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #ffffff;
          font-size: 14px;
          text-align: center;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-10 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 454px;
          left: 290px;
        }

        .overlap-6 {
          position: relative;
          width: 327px;
          height: 62px;
          background-color: #ffffff;
          border-radius: 136px;
          box-shadow: 10px 24px 54px #0000000a;
        }

        .text-wrapper-9 {
          position: absolute;
          width: 154px;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .text-wrapper-10 {
          position: absolute;
          top: 10px;
          left: 15px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #ffffff;
          font-size: 14px;
          text-align: center;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-11 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 536px;
          left: 662px;
        }

        .text-wrapper-11 {
          position: absolute;
          width: 163px;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .group-12 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 454px;
          left: 662px;
        }

        .text-wrapper-12 {
          position: absolute;
          width: 162px;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

    </style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-auto col-12">
                <div class="overlap-2">
                    <div class="banner-image">
                        <div class="row">
                            <div class="col-auto col-12 mb-5 mt-5">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="group" src="https://c.animaapp.com/jpVby7k9/img/group-1775@2x.png" />
                                    </div>
                                    <div class="overlap-wrapper">
                                        <div class="overlap-3">
                                            <img class="img" src="https://c.animaapp.com/jpVby7k9/img/group-2@2x.png" />
                                            <div class="overlap-group-wrapper">
                                                <div class="overlap-group-2">
                                                    <img class="ellipse" src="https://c.animaapp.com/jpVby7k9/img/ellipse-99.svg" />
                                                    <img class="subtraction" src="https://c.animaapp.com/jpVby7k9/img/subtraction-8.svg" />
                                                    <img class="subtraction-2" src="https://c.animaapp.com/jpVby7k9/img/subtraction-7.svg" />
                                                    <div class="text-wrapper">T</div>
                                                    <div class="text-wrapper-2">T</div>
                                                </div>
                                            </div>
                                            <div class="text-wrapper-3">9910</div>
                                        </div>
                                    </div>
                                    <div class="div-wrapper ms-auto">
                                        <div class="overlap-4">
                                            <img class="group-2" src="https://c.animaapp.com/jpVby7k9/img/group@2x.png" />
                                            <div class="group-3">
                                                <div class="overlap-group-3">
                                                    <img class="path" src="https://c.animaapp.com/jpVby7k9/img/path-342.svg" />
                                                    <div class="text-wrapper-4">+</div>
                                                </div>
                                            </div>
                                            <img class="group-4" src="https://c.animaapp.com/jpVby7k9/img/group-146@2x.png" />
                                            <div class="text-wrapper-5">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto col-12 mt-5">
                                <div class="group-5">
                                    <div class="mask-group-wrapper">
                                        <img class="mask-group" src="https://c.animaapp.com/jpVby7k9/img/mask-group@2x.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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