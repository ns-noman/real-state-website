@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#feature_amenity" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="banner-bar">
        </div>
        <div class="section-gap project-detail-info fullscreen-content pb-0">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">
                <div class="row full-height-sm project-title-row">
                    <div class="col-sm-5 col-md-5 project-short-info full-height full-height-sm">
                        <h2 class="heading-primary text-white">
                            {{ $project->name }} </h2>
                        <span>{{ $project->address }}</span>
                        <p class="mt-40">{{ $project->qoute }}</p>
                    </div>
                </div>
                <div class="row  full-height-sm project-info-row">
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/projects/'.$project->background_img) }}" alt="">
        </div>

    </div>
    <section id="at-a-glance" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent"
                style="background-image: url('{{ asset('public/upload/projects/'.$project->ataglance_img) }}'); overflow: hidden;">
            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent">
                <div class="content-holder no-before-after bg-white section-gap">
                    <h2 class="heading-primary style-1 mb-60">
                        At a Glance
                    </h2>
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20">
                           {!! $project->details !!}
                        </div>
                        <a href="#" class="button button-outline button-outline-blackish mt-30 explore-btn">
                            Expand
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="feature_amenity" class="section-gap section-gap-bottom-features_amenities features_amenities">
        <div class="container-fluid">
            <div class="mb-80">
                <h2 class="heading-primary text-off-white">
                    Features &amp; Amenities
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-5 col-md-push-7">
                    <div class="image-box-holder">
                        <div class="image-box no-shadow "
                            style="background-image: url('{{ asset('public/upload/projects/'.$project->features_img) }}');">
                            <div class="inner-content text-white">
                                <p class="text-bold hide">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-md-pull-5 no-margin image-box-side-content">
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20 text-white">
                            @php
                                echo $project->features;
                            @endphp
                        </div>
                        <a href="#" class="button button-outline button-outline-white mt-30 explore-btn">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="interior-exterior-gallery" class="project-gallery pb-70 pt-70">
        <div class="container-fluid">
            <div class="mb-50">
                <h1 class="heading-primary style-1">
                    Gallery
                </h1>
            </div>
        </div>
        <div class="gallery-wrapper light-gallery">
            <div class="overflow-hidden">
                @foreach ($image as $img)
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="row">
                            <a href="{{ asset('public/upload/projects/'.$img->image) }}"
                                data-sub-html="<h4>{{ $project->name }}</h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="{{ asset('public/upload/projects/'.$img->image) }}" alt="">
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
    @if ($project->locationLink != null)
    <section id="map-location" class="location-map-wrapper pt-70">
        <div class="container-fluid">
            <div class="mb-50">
                <h1 class="heading-primary style-1">
                    Location
                </h1>
            </div>
        </div>
        <!--      <div id="map" class="location-map-holder"></div>-->
        <iframe src="{{ $project->locationLink }}" style="height: 70vh;margin-bottom: -5px; width: 100%;" frameborder="0" style="border:0"></iframe>
    </section>
    @endif

    <section class="who-we-are-section section-gap bg-grey pb-40">
        <div class="container-fluid">
            <div class="mb-40">
                <h2 class="heading-primary text-white">Book Now </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="image-box-holder">
                        <div class="image-box "
                            style="background-image: url('{{ asset('public/upload/projects/'.$project->background_img) }}');">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <form action="{{ url('message/') }}" method="POST" id="add-user-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 mb-50">
                                <input type="hidden" id="contact-form" class="form-control" name="form_id"
                                    value="contact-form">
                                <div class="form-message-container success_wrapper hide success_wrapper_contact-form">
                                    <div class="form-message-body">
                                        <div class="cross-popup" data-msg-close>
                                            X
                                        </div>
                                        <span class="success_container_contact-form"></span>
                                        <div>
                                            <div data-msg-close
                                                class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                Ok</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-message-container error_wrapper hide error_wrapper_contact-form">
                                    <div class="form-message-body">
                                        <div class="cross-popup" data-msg-close>
                                            X
                                        </div>
                                        <span class="error_container_contact-form"></span>
                                        <div>
                                            <div data-msg-close
                                                class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                Ok</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="name">Name*</label>
                                        <input type="text" id="name" class="form-control"
                                            name="name" placeholder="Enter your full name here">
                                        <div class="hint-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="email">Email*</label>
                                        <input type="text" id="email" class="form-control"
                                            name="email" placeholder="Enter your email ID here">
                                        <div class="hint-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="Message">Message</label>
                                        <textarea id="message" class="form-control" name="message" placeholder="Enter your message here"></textarea>
                                        <div class="hint-block"></div>
                                    </div>
                                </div>


                                <div class="form-group no-border">
                                    <div>
                                        <button type="submit"
                                            class=" button button-outline button-outline-white mt-30">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
    $(document).ready(function() {
        var form = '#add-user-form';
        $(form).on('submit', function(event) {
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
                success: function(response) {
                    $(form).trigger("reset");
                    alert(response.success);
                    console.log(response.success);
                }
            });
        });
    });
</script>
@endsection