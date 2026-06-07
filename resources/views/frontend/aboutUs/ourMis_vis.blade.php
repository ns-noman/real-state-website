@extends('layouts.web_master')
@section('content')
<div class="banner-slider-wrapper overflow-hidden">
    <a href="#vision-mission--values" class="animate-scroll scroll-down">
        <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
    </a>
    <div class="no-pad project-detail-info fullscreen-content general-page">
        <div class="overlay-layer" style="background-color: #231F20;"></div>
        <div class="container-fluid full-height full-height-sm">
            <div class="row  full-height text-center no-margin table-all">
                <div
                    class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                    <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                        {{ $subMenu->menuName }}</h3>
                    <h2 class="heading-primary text-white">
                        {{ $subMenu->subMenuName }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bannerImageWrapper">
        <img src="{{ asset('public/upload/'. $subMenu->image ) }}" alt="">
    </div>
</div>
<section id="678" class="section-gap mission-vission bg-grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-md-8 center-block">
                <div class="row mb-50">
                    <div class="col-sm-5 col-md-4">
                        <div class="mission-box">
                            <div class="inner-content">
                                <h2 class="mission-title">
                                    {{$content[0]->title }} </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <h3 class="mission-slogan">
                            @php
                                echo $content[0]->longDetails;
                            @endphp
                        </h3>
                    </div>

                </div>
                <div class="row mission_div">
                    <div class="col-sm-7 col-md-8 mt-40">
                        <ul class="mission-list">
                            @php
                                echo $content[1]->longDetails;
                            @endphp
                        </ul>

                        {{-- <div class="symble-holder hidden-xs">
                            &
                        </div> --}}
                    </div>

                    <div class="col-sm-5 col-md-4">
                        <div class="mission-box">
                            <div class="inner-content align-bottom">
                                <h2 class="mission-title text-right">
                                    {{$content[1]->title }} </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-sm-5 col-md-4 pt40">
                        <div class="mission-box ">
                            <div class="inner-content">
                                <h2 class="mission-title">
                                    {{$content[2]->title }} </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <p>
                            @php
                                echo $content[2]->longDetails;
                            @endphp
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
