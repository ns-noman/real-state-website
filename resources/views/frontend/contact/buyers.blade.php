@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#buyers" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                            {{ $subMenu->menuName }} </h3>
                        <h2 class="heading-primary text-white">
                            {{ $subMenu->subMenuName }} </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="{{ asset('public/upload/'. $subMenu->image ) }}" alt="">
        </div>
    </div>
    @foreach ($content as $content)
    <section id="buyers" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent "
                style="background-image: url({{ asset('public/upload/'. $content->image ) }});">
            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent ">
                <div class="content-holder no-before-after bg-white section-gap-50">
                    <h2 class="heading-primary style-1">
                        {{$content->title }} </h2>
                        @php
                            echo $content->longDetails;
                        @endphp
                    <!-- <a href="#" class="button button-outline button-outline-skyblue mt-30">Explore</a> -->
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
                            explore the options </h2>
                    </div>
                    <div>
                        <form action="{{ url('buyers') }}" method="POST" id="add-user-form" class="dynamic_form form-primary all-text-white custom-select" method="post" data-pjax="false" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-5 mb-50">
                                    <div class="form-group pt-70 field-catagory buyer-interest">
                                        <div>
                                            <label class="control-label" for="preferred_location">Preferred Location</label>
                                            <input required type="text" id="preferred_location" class="form-control"
                                                name="Dynamicform[preferred_location]"
                                                placeholder="Enter your preferred location/neighbourhood">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="preferred_size">Preferred Size</label>
                                            <input required type="text" id="preferred_size" class="form-control"
                                                name="Dynamicform[preferred_size]"
                                                placeholder="Enter your preferred size of the unit in sft">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="car_parking">Car Parking Requirement</label>
                                            <input required type="text" id="car_parking" class="form-control"
                                                name="Dynamicform[car_parking]"
                                                placeholder="Enter your no. of parking required">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="expected_handover_time">Expected Handover
                                                Date</label>
                                            <input required type="text" id="expected_handover_time" class="form-control"
                                                name="Dynamicform[expected_handover_time]"
                                                placeholder="Enter your expected handover/move in date">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-70 mt-70 field-catagory buyer-preferences">
                                        <div>
                                            <label class="control-label" for="facing_the_apartment">Facing Of The
                                                Apartment</label>
                                            <input required type="text" id="facing_the_apartment" class="form-control"
                                                name="Dynamicform[facing_the_apartment]"
                                                placeholder="Enter your preferred facing of the unit">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="preferred_floor">Preferred Floor</label>
                                            <input required type="text" id="preferred_floor" class="form-control"
                                                name="Dynamicform[preferred_floor]"
                                                placeholder="Enter your preferred floor">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="minimum_bed_rooms">Minimum Number Of
                                                Bedrooms</label>
                                            <input required type="text" id="minimum_bed_rooms" class="form-control"
                                                name="Dynamicform[minimum_bed_rooms]"
                                                placeholder="Enter the minimum no. of bedrooms">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="minimum_bath_rooms">Minimum Number Of
                                                Bathrooms</label>
                                            <input required type="text" id="minimum_bath_rooms" class="form-control"
                                                name="Dynamicform[minimum_bath_rooms]"
                                                placeholder="Enter the minimum no. of bathrooms">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-5">
                                    <!-- <div class="form-group"> -->
                                    <div class="form-group pt-70 field-catagory buyer-contact">
                                        <div>
                                            <label class="control-label" for="name">Name*</label>
                                            <input required type="text" id="name" class="form-control"
                                                name="Dynamicform[name]" placeholder="Enter your full name here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="profession">Profession</label>
                                            <input required type="text" id="profession" class="form-control"
                                                name="Dynamicform[profession]" placeholder="Enter your profession here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="mobile_number">Contact Number*</label>
                                            <input required type="text" id="mobile_number" class="form-control"
                                                name="Dynamicform[mobile_number]"
                                                placeholder="Enter your contact number here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="email_id">Email ID</label>
                                            <input required type="text" id="email_id" class="form-control"
                                                name="Dynamicform[email_id]" placeholder="Enter your email ID here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="mailing_address">Mailing Address</label>
                                            <input required type="text" id="mailing_address" class="form-control"
                                                name="Dynamicform[mailing_address]"
                                                placeholder="Enter your mailing address here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group no-border">
                                        <div>
                                            <button type="submit"
                                                class="dynamic_submit_btn button button-outline button-outline-white mt-30">Submit</button>
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
            success:function(response){
                $(form).trigger("reset");
                alert(response.success);
            }
        });
    });
});
    
</script>
@endsection
