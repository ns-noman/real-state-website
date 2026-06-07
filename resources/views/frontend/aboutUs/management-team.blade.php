@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#habibul-basit" class="animate-scroll scroll-down">
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
    @if (count($content)>=1)
    <section id="habibul-basit" class="pb-0 pt-70 features_amenities no-bg">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                    CEO
                </h2>
            </div>
            <div class="top-management-members row image-align-left">
                <div class="col-sm-6 col-md-5 ">
                    <div class="image-box-holder">
                        <div class="image-box no-shadow "
                            style="background-image: url({{ asset('public/upload/'. $content[0]->image ) }});">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 image-box-side-content">
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20">
                            <div class="mb-30">
                                <h3 class="board-member-title text-uppercase">
                                    {{$content[0]->title }}
                                </h3>
                                <h4 class="board-member-desig text-uppercase">
                                    @php
                                        echo $content[0]->shortDetails;
                                    @endphp
                                </h4>
                            </div>
                            <div class="line line--full line--1 line--grey mb-20"></div>
                            <div class="board-member-details">
                                @php
                                    echo $content[0]->longDetails;
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ((count($content)>=2))
    <section class="section-gap pb-0 pt-80">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                    Senior Management </h2>
            </div>
            <div class="row member-list"> 
                @foreach ($content as $content)
                    @if ($loop->iteration !=1 )
                    <div class="member-list-item custom-col-xs-6 col-sm-6 col-md-4">
                        <div class="member-thumb-wrapper pb-60 mb-30">
                            <img src="{{ asset('public/upload/'. $content->image ) }}"
                                alt="">
                        </div>
                        <div class="member-info">
                            <div class="top-info">
                                <h3 class="board-member-title text-uppercase">{{$content->title }}</h3>
                                <h4 class="board-member-desig text-uppercase">
                                    @php
                                        echo $content->shortDetails;
                                    @endphp
                                </h4>
                            </div>
                            <div class="details-info">
                                @php
                                    echo $content->longDetails;
                                @endphp
                            </div>
                            <button class="member-details-expand"></button>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif
    {{-- <section class="section-gap pb-0 pt-80">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                    Our Team </h2>
            </div>
            <div class="row member-list">
                <div class="member-list-item custom-col-xs-12 col-sm-12 col-md-12">
                    <img alt="" src="../backend/web/kcfinder/upload/images/team(1).jpg" /><br />
                    <br />
                    The hidden sutra for successfully turning dreams into reality is our regular practice. One segment of
                    our human force is deployed to bridge the extreme aspirations of our consumers, while the other segment
                    actually builds the dreams.<br />
                    <br />
                    To achieve the ultimate mission of maximizing lifestyle and potential, Shanta Holdings gathers widely
                    experienced professionals, trained both at home and abroad. We have more than 200 full-time employees,
                    who represent a vast spectrum of development, management and construction disciplines. Well-balanced
                    personnel from both business and technical backgrounds are continuously thriving to fulfil the mission
                    of Shanta.
                    <p>&nbsp;</p>
                </div>


            </div>
        </div>
    </section> --}}
@endsection
