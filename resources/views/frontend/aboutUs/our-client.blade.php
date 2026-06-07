@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#our-clients" class="animate-scroll scroll-down">
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
                            {{ $subMenu->subMenuName }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/'. $subMenu->image) }}" alt="">
        </div>

    </div> 
    @if (count($content)>=1)
    <section style="padding: 30px 0">
        <div class="container">
            <div class="content-holder no-before-after bg-white section-gap-50 col-md-8 col-md-offset-2">
                <div class="container-fluid">
                <h2 class="heading-primary style-1 text-center">{{$content[0]->title }}</h2>
                <p style="margin-top: 30px; text-align: center">
                    @php
                        echo $content[0]->longDetails;
                    @endphp
                </p>
            </div>
        </div>
    </section>
    @endif
    @if ((count($content)>=2))
    <section style="background: gainsboro;">
        <div class="container-fluid">
            <ul class="row business-units-list clients-list" style="margin: 75px 0 45px 0;">
                @foreach ($content as $content)
                @if ($loop->iteration !=1 )
                <li class="custom-col-xs-6 col-sm-6 col-md-3">
                    <a href="javascript: void;" style="background-image: url({{ asset('public/upload/'. $content->image ) }}); background-size: contain; background-color: #fff;"
                        class="bg-cover-center" " >
                    <div class="caption-wrapper" style="background-color: #AAA000">
                        <div class="caption">{{$content->title }}</div>
                    </div>
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </section>
    @endif
@endsection
