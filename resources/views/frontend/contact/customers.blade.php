@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#customers" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                            {{ $subMenu->menuName }} </h3>
                        <h2 class="heading-primary text-white">
                            {{ $subMenu->subMenuName }} </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/'. $subMenu->image ) }}" alt="">
        </div>

    </div>

    @foreach ($content as $content)
    <section id="board-of-directors" class="pb-0 pt-70 features_amenities no-bg">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                </h2>
            </div>
            <div class="top-management-members row mb-80 image-align-left">
                <div class="col-sm-6 col-md-5 ">
                    <div class="image-box-holder">
                        <div class="image-box no-shadow "
                            style="background-image: url({{ asset('public/upload/'. $content->image ) }});">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 image-box-side-content">
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20">
                            <div class="mb-30">
                                <h3 class="board-member-title text-uppercase"> {{$content->title }} </h3>
                                <h4 class="board-member-desig text-uppercase"></h4>
                            </div>
                            <div class="line line--full line--1 line--grey mb-20"></div>
                            <div class="board-member-details">
                                @php
                                    echo $content->longDetails;
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection
