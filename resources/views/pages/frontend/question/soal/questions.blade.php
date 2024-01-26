@extends('layouts.frontend.app')
@section('title', 'Home')
@push('styles')
    <style type="text/css">
        .classic-trivia {
          background-color: #ffffff;
          display: flex;
          flex-direction: row;
          justify-content: center;
          width: 100%;
        }

        .classic-trivia .div {
          background-color: #ffffff;
          overflow: hidden;
          width: 1280px;
          height: 720px;
          position: relative;
        }

        .classic-trivia .overlap {
          position: absolute;
          width: 1280px;
          height: 52px;
          top: 274px;
          left: 0;
        }

        .classic-trivia .question-info {
          position: absolute;
          width: 206px;
          height: 48px;
          top: 4px;
          left: 538px;
        }

        .classic-trivia .overlap-group {
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

        .classic-trivia .label {
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

        .classic-trivia .progress-indicator {
          position: absolute;
          width: 1280px;
          height: 8px;
          top: 0;
          left: 0;
          background-color: #fac304;
          box-shadow: 0px 4px 16px #00000040;
        }

        .classic-trivia .running {
          width: 963px;
          height: 8px;
          background-color: #ffffff;
          border-radius: 0px 4px 4px 0px;
        }

        .classic-trivia .overlap-2 {
          position: absolute;
          width: 1280px;
          height: 274px;
          top: 0;
          left: 0;
        }

        .classic-trivia .banner-image {
          position: absolute;
          width: 1280px;
          height: 274px;
          top: 0;
          left: 0;
          background-color: #ed1c24;
        }

        .classic-trivia .group {
          position: absolute;
          width: 24px;
          height: 24px;
          top: 25px;
          left: 72px;
        }

        .classic-trivia .overlap-wrapper {
          position: absolute;
          width: 94px;
          height: 28px;
          top: 23px;
          left: 114px;
        }

        .classic-trivia .overlap-3 {
          position: relative;
          width: 98px;
          height: 35px;
        }

        .classic-trivia .img {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 2px;
          left: 8px;
        }

        .classic-trivia .overlap-group-wrapper {
          position: absolute;
          width: 32px;
          height: 28px;
          top: 0;
          left: 0;
        }

        .classic-trivia .overlap-group-2 {
          position: relative;
          width: 29px;
          height: 29px;
          background-image: url(https://c.animaapp.com/V0rv9nR4/img/group-2@2x.png);
          background-size: 100% 100%;
        }

        .classic-trivia .ellipse {
          position: absolute;
          width: 22px;
          height: 22px;
          top: 3px;
          left: 3px;
        }

        .classic-trivia .subtraction {
          position: absolute;
          width: 17px;
          height: 19px;
          top: 6px;
          left: 8px;
        }

        .classic-trivia .subtraction-2 {
          position: absolute;
          width: 14px;
          height: 21px;
          top: 3px;
          left: 4px;
        }

        .classic-trivia .text-wrapper {
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

        .classic-trivia .text-wrapper-2 {
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

        .classic-trivia .text-wrapper-3 {
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

        .classic-trivia .div-wrapper {
          position: absolute;
          width: 93px;
          height: 25px;
          top: 25px;
          left: 1114px;
        }

        .classic-trivia .overlap-4 {
          position: relative;
          width: 101px;
          height: 37px;
          top: -4px;
          left: -4px;
        }

        .classic-trivia .group-2 {
          position: absolute;
          width: 90px;
          height: 33px;
          top: 4px;
          left: 11px;
        }

        .classic-trivia .group-3 {
          position: absolute;
          width: 21px;
          height: 17px;
          top: 10px;
          left: 73px;
        }

        .classic-trivia .overlap-group-3 {
          position: relative;
          width: 19px;
          height: 17px;
        }

        .classic-trivia .path {
          position: absolute;
          width: 19px;
          height: 15px;
          top: 0;
          left: 0;
        }

        .classic-trivia .text-wrapper-4 {
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

        .classic-trivia .group-4 {
          position: absolute;
          width: 34px;
          height: 33px;
          top: 0;
          left: 0;
        }

        .classic-trivia .text-wrapper-5 {
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

        .classic-trivia .group-5 {
          position: absolute;
          width: 474px;
          height: 38px;
          top: 198px;
          left: 405px;
        }

        .classic-trivia .overlap-5 {
          position: relative;
          width: 470px;
          height: 38px;
        }

        .classic-trivia .flexcontainer {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          gap: 12px;
          position: absolute;
          width: 470px;
          height: 38px;
          top: 0;
          left: 0;
        }

        .classic-trivia .text {
          position: relative;
          align-self: stretch;
          font-family: "Poppins", Helvetica;
          font-weight: 400;
          color: #ffffff;
          font-size: 25px;
          text-align: center;
          letter-spacing: 0;
          line-height: 13px;
        }

        .classic-trivia .span {
          font-family: "Poppins", Helvetica;
          font-weight: 400;
          color: #ffffff;
          font-size: 25px;
          letter-spacing: 0;
          line-height: 13px;
        }

        .classic-trivia .text-wrapper-6 {
          position: absolute;
          width: 62px;
          top: 3px;
          left: 388px;
          font-family: "Luckiest Guy", Helvetica;
          font-weight: 400;
          color: #ffffff;
          font-size: 35px;
          text-align: center;
          letter-spacing: 0;
          line-height: 12px;
          white-space: nowrap;
        }

        .classic-trivia .group-6 {
          position: absolute;
          width: 181px;
          height: 121px;
          top: 58px;
          left: 557px;
        }

        .classic-trivia .overlap-6 {
          position: relative;
          height: 121px;
        }

        .classic-trivia .TBL {
          position: absolute;
          width: 181px;
          height: 97px;
          top: 0;
          left: 0;
        }

        .classic-trivia .group-7 {
          position: absolute;
          width: 171px;
          height: 29px;
          top: 92px;
          left: 10px;
        }

        .classic-trivia .p {
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

        .classic-trivia .group-8 {
          position: absolute;
          width: 280px;
          height: 54px;
          top: 666px;
          left: 501px;
        }

        .classic-trivia .rectangle {
          position: absolute;
          width: 54px;
          height: 278px;
          top: -112px;
          left: 112px;
          background-color: var(--x-2c-4676);
          border-radius: 10px 0px 0px 10px;
          transform: rotate(90deg);
        }

        .classic-trivia .text-wrapper-7 {
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

        .classic-trivia .group-9 {
          position: absolute;
          width: 21px;
          height: 21px;
          top: 16px;
          left: 236px;
        }

        .classic-trivia .group-10 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 536px;
          left: 290px;
        }

        .classic-trivia .overlap-7 {
          position: relative;
          width: 327px;
          height: 62px;
          border-radius: 136px;
        }

        .classic-trivia .rectangle-2 {
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

        .classic-trivia .text-wrapper-8 {
          width: 86px;
          position: absolute;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .classic-trivia .group-11 {
          position: absolute;
          width: 42px;
          height: 40px;
          top: 11px;
          left: 11px;
        }

        .classic-trivia .overlap-group-4 {
          position: relative;
          width: 40px;
          height: 40px;
          background-color: #ed1c24;
          border-radius: 20px;
        }

        .classic-trivia .text-wrapper-9 {
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

        .classic-trivia .group-12 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 454px;
          left: 290px;
        }

        .classic-trivia .overlap-8 {
          position: relative;
          width: 327px;
          height: 62px;
          background-color: #ffffff;
          border-radius: 136px;
          box-shadow: 10px 24px 54px #0000000a;
        }

        .classic-trivia .text-wrapper-10 {
          width: 154px;
          position: absolute;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .classic-trivia .text-wrapper-11 {
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

        .classic-trivia .group-13 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 536px;
          left: 662px;
        }

        .classic-trivia .text-wrapper-12 {
          width: 163px;
          position: absolute;
          top: 21px;
          left: 67px;
          font-family: "Poppins", Helvetica;
          font-weight: 500;
          color: #262626;
          font-size: 14px;
          letter-spacing: 0;
          line-height: normal;
        }

        .classic-trivia .group-14 {
          position: absolute;
          width: 329px;
          height: 62px;
          top: 454px;
          left: 662px;
        }

        .classic-trivia .text-wrapper-13 {
          width: 162px;
          position: absolute;
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
<div class="classic-trivia">
    <div class="div">
        <div class="overlap">
            <div class="question-info">
                <div class="overlap-group">
                    <div class="label">0:30</div>
                </div>
            </div>
            <div class="progress-indicator">
                <div class="running"></div>
            </div>
        </div>
        <div class="overlap-2">
            <div class="banner-image">
                <img class="group" src="https://c.animaapp.com/V0rv9nR4/img/group-1775@2x.png" />
                <div class="overlap-wrapper">
                    <div class="overlap-3">
                        <img class="img" src="https://c.animaapp.com/V0rv9nR4/img/group@2x.png" />
                        <div class="overlap-group-wrapper">
                            <div class="overlap-group-2">
                                <img class="ellipse" src="https://c.animaapp.com/V0rv9nR4/img/ellipse-99.svg" />
                                <img class="subtraction" src="https://c.animaapp.com/V0rv9nR4/img/subtraction-8.svg" />
                                <img class="subtraction-2" src="https://c.animaapp.com/V0rv9nR4/img/subtraction-7.svg" />
                                <div class="text-wrapper">T</div>
                                <div class="text-wrapper-2">T</div>
                            </div>
                        </div>
                        <div class="text-wrapper-3">9910</div>
                    </div>
                </div>
                <div class="div-wrapper">
                    <div class="overlap-4">
                        <img class="group-2" src="https://c.animaapp.com/V0rv9nR4/img/group-1@2x.png" />
                        <div class="group-3">
                            <div class="overlap-group-3">
                                <img class="path" src="https://c.animaapp.com/V0rv9nR4/img/path-342.svg" />
                                <div class="text-wrapper-4">+</div>
                            </div>
                        </div>
                        <img class="group-4" src="https://c.animaapp.com/V0rv9nR4/img/group-146@2x.png" />
                        <div class="text-wrapper-5">2</div>
                    </div>
                </div>
                <div class="group-5">
                    <div class="overlap-5">
                        <div class="flexcontainer">
                            <p class="text">
                                <span class="span"
                                    >Dapatkan konten menarik
                                dari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,<br
                                    /></span>
                            </p>
                            <p class="text"><span class="span">Mainkan kuisnya dan raih hadiahnya!</span></p>
                        </div>
                        <div class="text-wrapper-6">TBL</div>
                    </div>
                </div>
            </div>
            <div class="group-6">
                <div class="overlap-6">
                    <img class="TBL" src="https://c.animaapp.com/V0rv9nR4/img/tbl-1@2x.png" />
                    <img class="group-7" src="https://c.animaapp.com/V0rv9nR4/img/group-7749867@2x.png" />
                </div>
            </div>
        </div>
        <p class="p">Jenis hewan apakah karakter Nyonya Puff dalam animasi SpongeBob SquarePants?</p>
        <div class="group-8">
            <div class="rectangle"></div>
            <div class="text-wrapper-7">Bantuan</div>
            <img class="group-9" src="https://c.animaapp.com/V0rv9nR4/img/group-8@2x.png" />
        </div>
        <div class="group-10">
            <div class="overlap-7">
                <div class="rectangle-2"></div>
                <div class="text-wrapper-8">Ikan Buntal</div>
                <div class="group-11">
                    <div class="overlap-group-4">
                        <div class="text-wrapper-9">B</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-12">
            <div class="overlap-8">
                <div class="text-wrapper-10">Ikan Badut</div>
                <div class="group-11">
                    <div class="overlap-group-4">
                        <div class="text-wrapper-11">A</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-13">
            <div class="overlap-7">
                <div class="rectangle-2"></div>
                <div class="text-wrapper-12">Ikan Cakalang</div>
                <div class="group-11">
                    <div class="overlap-group-4">
                        <div class="text-wrapper-11">D</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-14">
            <div class="overlap-7">
                <div class="rectangle-2"></div>
                <div class="text-wrapper-13">Ikan salmon</div>
                <div class="group-11">
                    <div class="overlap-group-4">
                        <div class="text-wrapper-11">C</div>
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