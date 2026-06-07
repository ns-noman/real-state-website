@extends('layouts.web_master')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#landowners" class="animate-scroll scroll-down">
            <img src="{{ asset('public/themes/') }}/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
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
    <section id="landowners" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent "
                style="background-image: url({{ asset('public/upload/'. $content->image ) }});">

            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent ">
                <div class="content-holder no-before-after bg-white section-gap-50">
                    <h2 class="heading-primary style-1">
                        {{$content->title }}  </h2>
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
                            meet the professionals </h2>
                    </div>
                    <div>
                        <form action="{{ url('landowners') }}" method="POST" id="add-user-form" class="dynamic_form form-primary all-text-white custom-select" method="post" data-pjax="false" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-5 mb-50">
                                    <div class="form-group pt-70 field-catagory land-info">
                                        <div>
                                            <label for="locality">Locality*</label>
                                            <input required type="text" id="locality" name="Dynamicform[locality]"
                                                placeholder="Area/neighbourhood the land is located" class="">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="address_details">Address*</label>
                                            <input required type="text" id="address_details" name="Dynamicform[address_details]"
                                                placeholder="Full address of the land" class="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="plot">Size of the land</label>
                                            <input required type="text" id="plot" name="Dynamicform[plot]"
                                                placeholder="Size of the land in kathas (rounded)" class="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="road_width ">Width of the road in front</label>
                                            <input required type="text" id="road_width " name="Dynamicform[road_width]"
                                                placeholder="In feet" class="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="land_category">Category of land</label>
                                        <select required id="land_category" class="" name="Dynamicform[land_category]"
                                            data-placeholder="Select Option">
                                            <option value="">Select option</option>
                                            <option value="freehold">Freehold</option>
                                            <option value="leasehold">Leasehold</option>
                                        </select>
                                        <div class="hint-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="fcing">Facing</label>
                                            <select required name="Dynamicform[fcing]" id="fcing"
                                                data-placeholder="Select Option">
                                                <option value="east">East</option>
                                                <option value="west">West</option>
                                                <option value="north">North</option>
                                                <option value="south">South</option>
                                            </select>
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="attractive_features">Attractive features (if any)</label>
                                            <select name="Dynamicform[attractive_features]" id="attractive_features"
                                                data-placeholder="Select Option">
                                                <option value="">Select</option>
                                                <option value="lakeside">Lakeside</option>
                                                <option value="corner plot">Corner Plot</option>
                                                <option value="park front">Park View</option>
                                                <option value="mainroad">Main Road</option>
                                                <option value="others">Others</option>
                                            </select>
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-5">
                                    <div class="form-group  pt-70 field-catagory land-profile">
                                        <div>
                                            <label for="landowner_name">Name of the landowner*</label>
                                            <input required type="text" id="landowner_name" name="Dynamicform[landowner_name]"
                                                placeholder="Full name of the registered landowner" class=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="contact_person">Contact person</label>
                                            <input required type="text" id="contact_person" name="Dynamicform[contact_person]"
                                                placeholder="Name (if different from the landowner)" class=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="">Email ID</label>
                                            <input required type="text" placeholder="Contact person's email address"
                                                id="email_id" name="Dynamicform[email_id]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="cell_phone">Contact number*</label>
                                            <input required type="text" id="cell_phone" name="Dynamicform[cell_phone]"
                                                placeholder="Contact person's number" class="" required>
                                        </div>
                                    </div>
                                    <div class="form-group no-border">
                                        <div>
                                            <button type="submit"
                                                class="dynamic_submit_btn button button-outline button-outline-white mt-30">Submit</button>
                                        </div>
                                    </div>
                                    <div
                                        class="form-message-container success_wrapper hide success_wrapper_landowner-form">
                                        <div class="form-message-body">
                                            <div class="cross-popup" data-msg-close>
                                                X
                                            </div>
                                            <span class="success_container_landowner-form"></span>
                                            <div>
                                                <div data-msg-close
                                                    class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                    Ok</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-message-container error_wrapper hide error_wrapper_landowner-form">
                                        <div class="form-message-body">
                                            <div class="cross-popup" data-msg-close>
                                                X
                                            </div>
                                            <span class="error_container_landowner-form"></span>
                                            <div>
                                                <div data-msg-close
                                                    class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                    Ok</div>
                                            </div>
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
                success:function(response)
                {
                    $(form).trigger("reset");
                    alert(response.success);
                }
            });
        });
        });
        
    </script>
@endsection
