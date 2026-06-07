@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#shanta-forum-revolutionising-bangladeshs-skyline" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes/real_estate/assets/img/icons/arrow-down.svg') }}" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">
                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">{{ $newsEvent->date }}</h3>
                        <h2 class="heading-primary text-white">
                            {{ $newsEvent->heading }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/'.$newsEventImage[0]->image) }}"
                alt="">
        </div>
    </div>
    <section id="shanta-forum-revolutionising-bangladeshs-skyline" class="section-gap" style="background-color: #e0f2f2;">
        <div class="container-fluid mb-80">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <p style="text-align: justify;"><span
                            style="font-family:arial,helvetica,sans-serif;"><strong>Source:</strong>&nbsp;{{ $newsEvent->source }}<br />
                            <strong>Link:</strong>&nbsp;<a
                                href="{{ $newsEvent->link }}">{{ $newsEvent->link }}</a><br />
                            <strong>Writer:</strong>{{ $newsEvent->writer }}<br />
                            <strong>Date:</strong>&nbsp;{{ $newsEvent->date }}</span><br />
                        <br />
                        <br />
                        <strong><span style="font-size:16px;">{{ $newsEvent->heading }}</span></strong><br />
                        <br />
                            @php
                                echo $newsEvent->description;
                            @endphp
                        </p>
                    <div id="gtx-trans" style="position: absolute; left: 43px; top: 14px;">
                        <div class="gtx-trans-icon">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-wrapper light-gallery">
            <div class="overflow-hidden">
                @foreach ($newsEventImage as $neImg)
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="row">
                        <a href="{{ asset('public/upload/'.$neImg->image) }}"
                            data-sub-html="<h4>{{ $newsEvent->heading }}</h4>">
                            <div class="gallery-image-container high-contrast">
                                <div class="image-thumb">
                                    <img src="{{ asset('public/upload/'.$neImg->image) }}"
                                        alt="">
                                </div>
                                <div class="gallery-image-hover">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
