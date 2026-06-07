@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#contact-us" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                            {{ $subMenu->menuName }}  </h3>
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
    @foreach ($content as $content)
    <section id="contact-us" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent "
                style="background-image: url({{ asset('public/upload/'. $content->image ) }});">
            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent ">
                <div class="content-holder no-before-after bg-white section-gap-50">
                    <h2 class="heading-primary style-1">
                        {{$content->title }}
                    </h2>
                    @php
                        echo $content->longDetails;
                    @endphp
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <section id="who-we-are" class="section-gap bg-dark-grey pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-md-8 center-block">
                    <div class="mb-60">
                        <h2 class="heading-primary text-white">
                            Write to us </h2>
                    </div>
                    <div>
                        <form action="{{ url('message/') }}" method="POST" id="add-user-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-7 mb-50">
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
                                            <input required type="text" id="name" class="form-control"
                                                name="name" placeholder="Enter your full name here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="phone">Contact No.*</label>
                                            <input required type="text" id="phone" class="form-control"
                                                name="phone" placeholder="Enter your contact number here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="email">Email*</label>
                                            <input required type="text" id="email" class="form-control"
                                                name="email" placeholder="Enter your email here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="subject">Subject</label>
                                            <input type="text" id="subject" class="form-control"
                                                name="subject" placeholder="Enter your subject here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="Message">Message</label>
                                            <textarea id="message" class="form-control" name="message" placeholder="Enter your message here" rows="4"></textarea>
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
                    }
                });
            });
        });
    </script>
@endsection
