@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#background" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                        {{ $subMenu->menuName }}
                        </h3>
                        <h2 class="heading- text-white">
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

    @foreach ($contents as $content)
    <section id="background" class="our-background pb-40" style="margin-top:10px;">
        {{-- background-color:rgb(220, 209, 209) --}}
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent"
                style="background-image: url({{ asset('public/upload/'. $content->image ) }});">
            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent">
                <div class="content-holder no-before-after bg-white section-gap">
                    <h2 class="heading-primary style-1">
                        <b>{{ $content->title }}</b>
                    </h2>
                    <p>
                        @php
                            echo $content->longDetails;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    {{-- <section id="who-we-are" class="who-we-are-section section-gap bg-grey pb-40">
        <div class="container-fluid">
            <div class="mb-40">
                <h2 class="heading-primary text-white">
                    {{$content[1]->title }}
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-5 col-md-5 col-sm-46-percent">
                    <div class="image-box-holder">
                        <div class="image-box "
                            style="background-image: url({{ asset('public/upload/'. $content[1]->image ) }});">
                            <div class="inner-content text-white">
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  col-sm-54-percent image-box-side-content no-pad no-margin">
                    <div class="mt-20 content-holder">
                        <p>
                            @php
                                echo $content[1]->longDetails;
                            @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <section id="our-approach" class="section-gap paraxify bg-cover-center text-white has-overlay-layer"
        style="background-image: url({{ asset('public/upload/'. $content[2]->image ) }});">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2  ">
                    <h2 class="heading-primary mb-20">
                        {{$content[2]->title }}
                    </h2>
                    <p>
                        @php
                            echo $content[2]->longDetails;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section id="our-logo" class="who-we-are-section section-gap bg-light-white pb-40">
        <div class="container-fluid">
            <div class="mb-40">
                <h2 class="heading-primary text-black">
                    {{$content[3]->title }}</h2>
            </div>
            <div class="row">
                <div class="col-sm-5 col-md-5 col-sm-46-percent">
                    <div class="image-box-holder">
                        <div class="image-box "
                            style="background-image: url({{ asset('public/upload/'. $content[3]->image ) }});">
                            <div class="inner-content text-white">
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  col-sm-54-percent image-box-side-content no-pad no-margin">
                    <div class="mt-20 content-holder">
                        @php
                            echo $content[3]->longDetails;
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
