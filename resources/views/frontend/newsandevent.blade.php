@extends('layouts.web_master')
@section('content')
    <div id="scrolling_slide" data-class-in="block-in" data-class-out="block-left"
        class="banner-slider-wrapper overflow-hidden">
        <a href="#shanta-forum-revolutionising-bangladeshs-skyline" class="animate-scroll scroll-down">
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
                            {{ $subMenu->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/'.$subMenu->image) }}">
        </div>
    </div>
    <section class="section-gap pb-50 pt-80" style="background-color: #e0f2f2;">
        <div class="container-fluid">
            <div class="row member-list">
                @foreach ($newsevents as $newsevent)
                    <div class="member-list-item news-item-wrapper custom-col-xs-6 col-sm-6 col-md-4">
                        <div class="overflow-hidden">
                            <div class="news-item-wrapper-image"
                                style="background-image: url('{{ asset('public/upload/' . $newsevent->image) }}')">
                            </div>
                        </div>
                        <div class="member-info pt-30">
                            <div class="top-info">
                                <h3 class="board-member-title">{{ $newsevent->heading }}</h3>
                                <h4 class="board-member-desig" style="margin-top: 30px!important">{{ $newsevent->date }}</h4>
                                <h6>
                                    <span class="badge badge-secondary">
                                        @if ($newsevent->type == 1)
                                            NEWS
                                        @else
                                            BLOG
                                        @endif
                                    </span>
                                </h6>
                            </div>
                            <div class="details-info">
                                @php
                                    echo $newsevent->shortDescription;
                                @endphp
                            </div>
                            <a href="{{ url('blogs-details/' . $newsevent->id) }}">READ MORE</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
