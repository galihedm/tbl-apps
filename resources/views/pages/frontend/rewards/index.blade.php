@extends('layouts.frontend.app')
@section('title', 'Hadiah')
@push('styles')
<style type="text/css">
    .banner-image {
      width: 100%;
      padding-bottom: 75px;
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

    .prize {
        background-color: #ED1C24;
        padding-bottom: 250px;
    }

    .card-addon {

    }
</style>
@endpush
@section('content')
<section class="prize">
    <div class="row">
        <div class="col-12 p-0">
            <div class="banner-image">
                <div class="row">
                    <div class="col-auto col-12 mb-5 mt-5">
                        <div class="d-flex align-items-center px-3">
                            <a href="{{ route('home') }}" class="px-3">
                                <img class="group" src="https://c.animaapp.com/jpVby7k9/img/group-1775@2x.png" />
                            </a>
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
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="container-fluid">
                                    <div class="container text-center">
                                        <h3 class="text-light">INFO HADIAH</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-layout">
        <div class="col-12 p-0">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="card card-addon">
                                <div class="card-body text-center">
                                    <div class="card-image text-center mb-3">
                                        <img src="{{ asset('assets/img/pz-tab.png') }}" class="img-card-item">
                                    </div>
                                    <h4>Samsung Tab S6</h4>
                                    <p class="">1500000 Poin</p>
                                </div>
                                <div class="card-footer nav-custom-bg-light no-border-top text-center">
                                    <button type="button" class="btn-customs mb-2 btn-round btn-outline-primary text-left w-100 mb-md-3">
                                        <i class="ion-logo-twitter mr-2"></i> Redeem
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="card card-addon">
                                <div class="card-body text-center">
                                    <div class="card-image text-center mb-3">
                                        <img src="{{ asset('assets/img/pz-watch.png') }}" class="img-card-item">
                                    </div>
                                    <h4>Apple Watch</h4>
                                    <p class="">1500000 Poin</p>
                                </div>
                                <div class="card-footer nav-custom-bg-light no-border-top text-center">
                                    <button type="button" class="btn-customs mb-2 btn-round btn-outline-primary text-left w-100 mb-md-3">
                                        <i class="ion-logo-twitter mr-2"></i> Redeem
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="card card-addon">
                                <div class="card-body text-center">
                                    <div class="card-image text-center mb-3">
                                        <img src="{{ asset('assets/img/pz-watch-2.png') }}" class="img-card-item">
                                    </div>
                                    <h4>Smart Watch</h4>
                                    <p class="">1500000 Poin</p>
                                </div>
                                <div class="card-footer nav-custom-bg-light no-border-top text-center">
                                    <button type="button" class="btn-customs mb-2 btn-round btn-outline-primary text-left w-100 mb-md-3">
                                        <i class="ion-logo-twitter mr-2"></i> Redeem
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="card card-addon">
                                <div class="card-body text-center">
                                    <div class="card-image text-center mb-3">
                                        <img src="{{ asset('assets/img/pz-switch.png') }}" class="img-card-item">
                                    </div>
                                    <h4>Nintendo Switch</h4>
                                    <p class="">1500000 Poin</p>
                                </div>
                                <div class="card-footer nav-custom-bg-light no-border-top text-center">
                                    <button type="button" class="btn-customs mb-2 btn-round btn-outline-primary text-left w-100 mb-md-3">
                                        <i class="ion-logo-twitter mr-2"></i> Redeem
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        
    })
</script>
@endpush