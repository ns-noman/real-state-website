@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#companies" class="animate-scroll scroll-down">
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
            <img src="{{ asset('public/upload/'. $subMenu->image ) }}" alt="">
        </div>
    </div>
    <section id="companies" class="pt-80 pb-60 bg-light-grey">
        <div class="container-fluid">
            <div class="row">
                @if (count($content)>=1)
                <div class="col-sm-6 mb-30">
                        <h2 class="heading-primary"> {{$content[0]->title }}</h2>
                        <p>
                            @php
                                echo $content[0]->longDetails;
                            @endphp
                        </p>
                </div>
                @endif
                @if (count($content)>=2)
                <div class="col-sm-6">
                    <ul class="row business-units-list">
                        @foreach ($content as $content)
                            @if ($loop->iteration !=1 )
                                <li class="custom-col-xs-6 col-sm-6 col-md-4">
                                    <a href="{{ $content->title }}" target="_blank"
                                        style="background-image: url({{ asset('public/upload/'. $content->image ) }});"
                                        class="bg-cover-center">
                                        <div class="caption-wrapper" style="background-color: #166eb1">
                                            <div class="caption">{{ $content->shortDetails }}
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection
