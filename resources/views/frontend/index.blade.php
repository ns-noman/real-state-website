@extends('layouts.web_master')
@section('content')
<link href="{{ asset('public/clients') }}/css/style.css" rel="stylesheet">
<div class="banner-slider-wrapper">
    <a href="#lands-to-landmark" class="animate-scroll scroll-down">
        <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
    </a>
    <div id="layerslider" class="fitvidsignore" style="width:100%; height:100%;">
        @foreach ($sliders as $silder)
            <div data-color="#837B10" class="ls-slide banner-slider-item slider_topper"
                data-ls="slidedelay:5500;transition2d:12;">
                <img src="{{ asset('public/upload/'.$silder->image) }}"
                    class="ls-bg" alt="Shantaholdings Slide">
            </div>
        @endforeach
    </div>
    <div class="circle-menu inactive">
        <div class="circle-inner">
            <h2 class="slogan">
                <span>Setting Standards</span>
                <span>Explore</span>
            </h2>
        </div>
        <ul class="circle-text text-uppercase">
            @foreach ($aboutus as $about)
            <li>
                <a href="{{ url('aboutus/'.$about->id) }}">| &nbsp; {{ $about->subMenuName }}  &nbsp; |</a>
            </li>
            @endforeach
        </ul>
        <div class="circle-bg"></div>
    </div>
</div>

<section id="lands-to-landmark" class="section-gap parallax-container" data-stellar-background-ratio="0.1"
    style="background-image: url({{ asset('public/upload/'.$herosec[0]->image) }})">
    <div class="container-fluid">
        <div class="row mb-40">
            <div class="col-sm-7 col-md-12">
                <h2 class="heading-primary style-1"><b>{{ $herosec[0]->title }}</b></h2>
                <p>
                    @php
                        echo $herosec[0]->longDetails;
                    @endphp
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="carousel-wrapper has-shadow">
                    <div class="carousel-primary slick-theme">
                        @foreach ($projects as $project)
                            <div class="carousel-item">
                                <div class="inner">
                                    <a href="{{ url('projectDetails/'.$project->id) }}">
                                        <div class="image-thumb high-contrast">
                                            <img src="{{ asset('public/upload/projects/'.$project->thumbnail_img) }}"
                                                alt="{{ $project->name }}" title="{{ $project->name }}">
                                        </div>
                                        <h3 class="title">{{ $project->categoryName }}</h3>
                                        <h5 class="sub-title">{{ $project->name }}</h5>
                                         <span class="read-more">
                                            View Details
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-nav">
                        <img class='prev slick-prev'
                            src='{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow_Dark_left.svg'
                            data-src='{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow_colored_left.svg'
                            alt="Arrow left">
                        <img class='next slick-next'
                            src='{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow_Dark_right.svg'
                            data-src='{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow_colored_right.svg'
                            alt="Arrow right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-gap pt-100 bg-light-grey why-us pb-0 bg-cover-center parallax-container parallax-img"
    data-stellar-background-ratio="0.1"
    style="background-image: url({{ asset('public/upload/'.$herosec[1]->image) }}"
    data-image-src="{{ asset('public/upload/'.$herosec[1]->image) }}">
    <div class="container-fluid">
        <div class="mb-30 hide">
            <h2 class="heading-primary  text-white">
                
            </h2>
        </div>
        <div class="row pt-70 mobile-pt-0">
            <div class="col-sm-6 col-md-5 ">
                <h2 class="heading-primary  text-white">{{ $herosec[1]->title }}</h2>
                <div class="text-white">
                    <p>
                        @php
                            echo $herosec[1]->longDetails;
                        @endphp
                    </p>
                </div>
                <div class="mb-30">
                    {{-- <a href="#"
                        class="hidden-xs button button-outline button-outline-white mtb-30">
                        Explore
                    </a> --}}
                </div>

                <div class="image-box-holder flow-down hide">
                    <div class="image-box  " style="background-image: url();">
                        <div class="inner-content text-white text-bold">
                            <p>
                                @php
                                    echo $herosec[1]->longDetails;
                                @endphp
                            </p>
                            {{-- <a href="about-us/who-we-are.html"
                                class="button button-outline button-outline-white">
                                Explore
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @if (count($hs2content)>1)
            <div class="col-sm-6 col-md-6 col-md-offset-1 mb-70 mobile-mb-0">
                <div class="bordered-tiles our-specility-lightbox-wrapper mobile-mb-0 stagger-wrapper mb-0">
                    <div class="row  parent">
                        @foreach ($hs2content as $hs2content1)
                            <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                                <a href="#specility-lightbox-{{ $loop->iteration }}" class="lbox-btn">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="table-all">
                                                <span class="vertical-center">
                                                    <span class="tile-text">
                                                    {{ $hs2content1->title }}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="lightbox-content-wrapper">
                        @foreach ($hs2content as $hs2content2)
                        <div id="specility-lightbox-{{ $loop->iteration }}" class="specility-lightbox-item text-left bg-white ">
                            <a href="#" class="close-lightbox text-30">
                                <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/global-menu-close-black.svg"
                                    alt="close">
                            </a>
                            <div class="inner">
                                <h3 class="title text-18 mb-20"> {{ $hs2content2->title }}</h3>
                                <div class="desc">
                                    <p>
                                        @php
                                            echo $hs2content2->longDetails;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<section class="sponsors-section" style="margin:40px 0px 40px 0px;">
    <div class="auto-container" style="margin: auto">
        <h1><b>OUR VALUED CLIENTS</b></h1>
    </div>
    <div class="auto-container">
        <div class="slider-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-slider">
                @php
                    $totalItem = count($ourClients);
                    $numRow = 4;
                    $numCol = ceil($totalItem/$numRow);
                    $counter = 0;
                @endphp
                
                @for($j=0;$j<$numCol;$j++)
                    <li class="carousel-li">
                        <ul class="carousel-ul">
                            @for($i=0;$i<4;$i++)
                                @php
                                    if($counter>=$totalItem)
                                    {
                                        break;
                                    }
                                @endphp
                                <li class="carousel-li" style="margin:5px"><a href="#"><img src="{{ asset('public/upload/'. $ourClients[$counter]->image ) }}" alt=""></a></li>
                                @php
                                    $counter++;
                                @endphp
                            @endfor
                        </ul>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
</section>
<div class="msg_cont_wrap msg_closed">
    <div class="contact-form custom-select msg_form">
        <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/global-menu-close-black.svg"
            class="close_btn">
        <h3 class="title mb-30 text-color-11">Send us a message</h3>
        <form action="{{ url('message/') }}" method="POST" id="add-user-form">
            @csrf
            <div class="form-group field-contact-name has-child-pad field-contact-name required">
                <input required type="text" id="name" class="form-control" name="name"
                    placeholder="Enter your name here">
                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-contact-name has-child-pad field-contact-name required">
                <input required type="text" id="email" class="form-control" name="email"
                    placeholder="Enter your contact number">
                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-contact-message required">
                <textarea required id="message" class="form-control" name="message" placeholder="Enter your feedback here"></textarea>
                <p class="help-block help-block-error"></p>
            </div>
            <div class="mt-20">
                <button type="submit"
                    class="btn text-bold no-bg no-radius no-border dynamic_submit_btn">Submit</button>
            </div>
        </form>
    </div>
    <div class="msg_cont">
    </div>
    <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/feedback-icon.svg" class="msg_icon">
</div>


<script src="{{ asset('public/clients') }}/js/jquery.js"></script>
<script src="{{ asset('public/clients') }}/js/owl.js"></script>
<script src="{{ asset('public/clients') }}/js/script.js"></script>

<script type="text/javascript">

$(document).ready(function(){
var form = '#add-user-form';

$(form).on('submit', function(event){
    event.preventDefault();
    var url = $(this).attr('action');
    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            $(form).trigger("reset");
            alert(response.success);
            console.log(response.success);
        }
    });
});
});

</script>
@endsection