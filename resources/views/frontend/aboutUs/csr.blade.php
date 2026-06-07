@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#csr" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">{{ $subMenu->menuName }}</h3>
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
    @if (count($content))
    <section id="csr" class="section-gap" style="background-color: #e0f2f2;">
        <div class="container-fluid mb-80">
            @foreach ($content as $content)
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="mb-60">
                        <h2 class="heading-primary text-off-white">
                            {{$content->title }}
                        </h2>
                    </div>
                    <p>
                        @php
                            echo $content->longDetails;
                        @endphp
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="gallery-wrapper light-gallery">
            <div class="overflow-hidden">
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="row">
                        <a href="https://shantaholdings.com/admin/uploads/page/csr/16775003121f0XW.jpg"
                            data-sub-html="<h4>
                            CSR                                                        </h4>">
                            <div class="gallery-image-container high-contrast">
                                <div class="image-thumb">
                                    <img src="https://shantaholdings.com/admin/uploads/page/csr/650x650/16775003121f0XW.jpg"
                                        alt="">
                                </div>
                                <div class="gallery-image-hover">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    @endif
@endsection
