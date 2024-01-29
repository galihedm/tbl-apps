@extends('layouts.frontend.app')
@section('title', 'Home')
@push('styles')
<style type="text/css">
    .swiper {
      width: 100%;
      height: 100%;
      padding-bottom: 50px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-auto col-xxl-3 col-xl-3 col-lg-3 col-md-3 px-sm-2 px-0 hide-in-mobile-xs hide-in-mobile-sm">
            <div class="d-flex flex-column align-items-center align-items-sm-center px-3 pt-2 min-vh-100">
                <a href="/" class="align-items-center pb-3 pt-3 mt-5 mb-5">
                    <img src="{{ asset('assets/img/logo-tbl.png') }}">
                    <br>
                    <img src="{{ asset('assets/img/svg/tbl-words.svg') }}">
                </a>
                <ul class="nav nav-pills flex-column w-100 align-items-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li class="nav-item mt-3 active" id="v-pills-soal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-soal" type="button" role="tab" aria-controls="v-pills-soal" aria-selected="true">
                        <div class="nav-link align-middle px-0">
                            <img src="{{ asset('assets/img/svg/ic-faq.svg') }}">
                            <span class="ms-1 d-none d-sm-inline nav-item-text text-warning">Tebak Soal</span>
                        </div>
                    </li>
                    <li class="nav-item mt-3" id="v-pills-gambar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gambar" type="button" role="tab" aria-controls="v-pills-gambar" aria-selected="true">
                        <div class="nav-link align-middle px-0">
                            <img src="{{ asset('assets/img/svg/ic-img-empty.svg') }}">
                            <span class="ms-1 d-none d-sm-inline nav-item-text">Tebak Gambar</span>
                        </div>
                    </li>
                    <li class="nav-item mt-3" id="v-pills-lirik-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lirik" type="button" role="tab" aria-controls="v-pills-lirik" aria-selected="true">
                        <div href="#" class="nav-link align-middle px-0">
                            <img src="{{ asset('assets/img/svg/ic-mic.svg') }}">
                            <span class="ms-1 d-none d-sm-inline nav-item-text">Tebak Lirik</span>
                        </div>
                    </li>
                    <li class="nav-item mt-3"id="v-pills-video-tab" data-bs-toggle="pill" data-bs-target="#v-pills-video" type="button" role="tab" aria-controls="v-pills-video" aria-selected="true">
                        <div class="nav-link align-middle px-0">
                            <img src="{{ asset('assets/img/svg/ic-video.svg') }}">
                            <span class="ms-1 d-none d-sm-inline nav-item-text">Tebak Video</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-auto col-xxl-3 col-xl-3 col-lg-3 px-sm-2 px-0 hide-in-mobile-md hide-in-mobile-lg">
            <div class="d-flex flex-column align-items-center align-items-sm-center px-3 pt-2">
                <a href="/" class="align-items-center pb-3 pt-3 mt-5 mb-5">
                    <img src="{{ asset('assets/img/logo-tbl.png') }}">
                    <br>
                    <img src="{{ asset('assets/img/svg/tbl-words.svg') }}">
                </a>
            </div>
        </div>
        <div class="col-auto col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 margin-top-layout">
            <div class="row">
                <div class="col-auto col-xl-12 col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <a class="item">
                            <img src="{{ asset('assets/img/banner_quiz_time.png') }}">
                        </a>
                        <a class="item">
                            <img src="{{ asset('assets/img/banner_jkt_48_lg.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row tab-content" id="v-pills-tabContent">
                <div class="col-auto col-xl-12 col-lg-12 tab-pane fade show active" id="v-pills-soal" role="tabpanel" aria-labelledby="v-pills-soal-tab" tabindex="0">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Soal</h4>
                                        <h6 class="card-subtitle mb-2">Umum</h6>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Soal</h4>
                                        <h6 class="card-subtitle mb-2">Umum</h6>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Soal</h4>
                                        <h6 class="card-subtitle mb-2">Umum</h6>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Soal</h4>
                                        <h6 class="card-subtitle mb-2">Umum</h6>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-auto col-xl-12 col-lg-12 tab-pane fade" id="v-pills-gambar" role="tabpanel" aria-labelledby="v-pills-gambar-tab" tabindex="0">
                    <div class="swiper gambarSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Gambar</h4>
                                        <!-- <h6 class="card-subtitle mb-2">Umum</h6> -->
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-auto col-xl-12 col-lg-12 tab-pane fade" id="v-pills-lirik" role="tabpanel" aria-labelledby="v-pills-lirik-tab" tabindex="0">
                    <div class="swiper lirikSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Lirik</h4>
                                        <!-- <h6 class="card-subtitle mb-2">Umum</h6> -->
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-auto col-xl-12 col-lg-12 tab-pane fade" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video-tab" tabindex="0">
                    <div class="swiper videoSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card" style="background-color: #ED1C24;">
                                    <div class="card-body text-white">
                                        <h4 class="card-title">Tebak Video</h4>
                                        <!-- <h6 class="card-subtitle mb-2">Umum</h6> -->
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/people_quest_mark.png') }}" style="max-width: 250px;">
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-light">Main</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-4">
        
    </div>
    <div class="col-8">
        
    </div>
</div> -->
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel')
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true
        })
    })

    var swiper = new Swiper('.mySwiper', {
        observer: true,
        observeParents: true,
        paginationClickable: true,
        slidesPerView: 3,
        spaceBetween: 15,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            425: {
                slidesPerView: 2.5,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    })
    swiper.update()

    var gambar = new Swiper('.gambarSwiper', {
        observer: true,
        observeParents: true,
        paginationClickable: true,
        slidesPerView: 3,
        spaceBetween: 15,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    })
    gambar.update()

    var lirik = new Swiper('.lirikSwiper', {
        observer: true,
        observeParents: true,
        paginationClickable: true,
        slidesPerView: 3,
        spaceBetween: 15,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    })
    lirik.update()

    var video = new Swiper('.videoSwiper', {
        observer: true,
        observeParents: true,
        paginationClickable: true,
        slidesPerView: 3,
        spaceBetween: 15,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    })
    video.update()
    // swiper.updateContainerSize()
</script>
@endpush