@extends('layouts.web_master')
@section('content')
    <div id="scrolling_slide" data-class-in="block-in" data-class-out="block-left"
        class="banner-slider-wrapper overflow-hidden">
        <a href="#hr-philosophy" class="animate-scroll scroll-down">
            <img src="themes/real_estate/assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">
                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                            Career </h3>
                        <h2 class="heading-primary text-white">
                            Welcome on board </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bannerImageWrapper">
            <img src="https://shantaholdings.com/admin/uploads/page/career/1494848143rg2dS.jpg" alt="">
        </div>
    </div>
    <section id="hr-philosophy" class="section-gap paraxify bg-cover-center text-white has-overlay-layer"
        style="background-image: url(https://shantaholdings.com/admin/uploads/page/about-us/1488960999KS0zg.jpg);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2  ">
                    <h2 class="heading-primary mb-20">
                        HR Philosophy </h2>
                    <h2>We reward you for arguing and implementing your ideas!</h2>

                    <p>At Shanta, your potential is limited only by your talents and ambitions. Within Shanta or beyond, our
                        people make a difference because of the leaders they become while here. You will do more than just
                        build! Our aspiration is to change lifestyles, business practices and even society.<br />
                        <br />
                        Do you wonder why one competitor in a &quot;mature&quot; industry thrives while others fail? Do you
                        have huge ambitions about what you and a team of committed people can do to positively change an
                        organization like Shanta? Your voice and ideas are valued regardless of your tenure. Shanta
                        Holdings&rsquo; continuous growth demands that we attract the most exceptional people. Applicants
                        from different backgrounds are welcome.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="who-we-are" class="section-gap bg-dark-grey pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-md-8 center-block">
                    <div class="mb-60">
                        <h2 class="heading-primary text-white">
                            share your details
                        </h2>
                    </div>
                    <div>
                        <form id="apply-now" class="dynamic_form form-primary all-text-white custom-select"
                            action="https://shantaholdings.com/site/dynamic_form" method="post" data-pjax="false">
                            <input type="hidden" name="_csrf-frontend"
                                value="SMGdDjJaVIa-ag8xT_k2pPutazk6P-b51XdvBlBKiz8ZpNViAHc_6s9cbVwmiXT3sdo-c1VYrKuTBy43Yzr6bw==">
                            <div class="row">
                                <div class="col-sm-5 mb-50">
                                    <input type="hidden" id="apply-now" class="form-control" name="form_id"
                                        value="apply-now">


                                    <div class="othersss">

                                        <input type="hidden" id="project_title" class="form-control"
                                            name="Dynamicform[project_title]" value="">

                                    </div>
                                    <input type="text" name="Dynamicform[spam_protector]" style="display:none;">
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="name">Name*</label>
                                            <input type="text" id="name" class="form-control"
                                                name="Dynamicform[name]" placeholder="Enter your full name here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="email">Email*</label>
                                            <input type="text" id="email" class="form-control"
                                                name="Dynamicform[email]" placeholder="Enter your email ID here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="phone">Contact number*</label>
                                            <input type="text" id="phone" class="form-control"
                                                name="Dynamicform[phone]" placeholder="Enter your contact number here">
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-fileupload">
                                        <div>
                                            <label class="control-label style-4" for="cv">Upload CV* <br />(Word file
                                                / PDF Max. 2mb)</label>
                                            <input type="hidden" name="Dynamicform[cv]"
                                                class="dynamic_upload_file_input_cv"><input type="file" id="cv"
                                                name="GlobalSettings[img]" class="dynamic_upload_file_cv"
                                                data-url="/admin/global/settings/upload_form_image?key=cv">
                                            <div class="uploded_file_cv"></div>
                                            <div class="hint-block"></div>
                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-2 col-sm-5">
                                    <!-- <div class="form-group"> -->
                                    <div class="form-group">
                                        <div>
                                            <label class="control-label" for="message">Message</label>
                                            <textarea id="message" class="form-control" name="Dynamicform[message]" placeholder="Enter your message here"></textarea>
                                            <div class="hint-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-message-container success_wrapper hide success_wrapper_apply-now">
                                        <div class="form-message-body">
                                            <div class="cross-popup" data-msg-close>
                                                X
                                            </div>
                                            <span class="success_container_apply-now"></span>
                                            <div>
                                                <div data-msg-close
                                                    class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                    Ok</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-message-container error_wrapper hide error_wrapper_apply-now">
                                        <div class="form-message-body">
                                            <div class="cross-popup" data-msg-close>
                                                X
                                            </div>
                                            <span class="error_container_apply-now"></span>
                                            <div>
                                                <div data-msg-close
                                                    class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                                    Ok</div>
                                            </div>
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
@endsection
