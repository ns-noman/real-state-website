@php
    $services = App\Models\SubMenu::where('menuID',6)->get();
    $aboutus = App\Models\SubMenu::where('menuID',2)->get();
    $basicInfo = App\Models\BasicInfo::first();
@endphp
<div class="animsition open-menu-position" style="background-color: #ffffff;">
    <div class="menu-fixed-light menu-dark-mobiles" style="background-color: #ffffff;">
        <header class="header-wrapper header-transparent header-transparent-light" style="background-color: #ffffff;">
            <div class="main-header" style="background-color: #ffffff;">
                <div class="container-fluid" style="background-color: #ffffff;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="menu-wrapper">
                                    <div class="logo-wrapper">
                                        <a href="{{ url('/') }}" class="logo">
                                            <img src="{{ asset('public/upload/'. $basicInfo->logo) }}"
                                                class="logo-img logo-dark" alt="Logo">
                                        </a>
                                    </div>
                                    <a href="#menu" class="btn btn-dark btn-lg mobile-menu-bar">
                                        <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/menu.svg"
                                            alt="hamburger icon">
                                    </a>
                                    <nav class="navbar-right" style="color: #231F20!important;">
                                        <ul class="menu" style="color: #231F20!important;">
                                            <li style="">
                                                <a class="active" href="{{ url('/') }}">
                                                    <span>Home</span>
                                                </a>
                                            </li>
                                            <li style="">
                                                <a class="" href="#">
                                                    <span>About {{ $basicInfo->title }}</span>
                                                </a>
                                                <ul class="submenu" style="display: none;">
                                                    @foreach ($aboutus as $about)
                                                        <li class="">
                                                            <a href="{{ url('aboutus/' . $about->id ) }}">{{ $about->subMenuName }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li style="">
                                                <a class="" href="#">
                                                    <span>Services</span>
                                                </a>
                                                <ul class="submenu" style="display: none;">
                                                    @foreach ($services as $service)
                                                        <li class="">
                                                            <a href="{{ url('services/' . $service->id ) }}">{{ $service->subMenuName }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li style="">
                                                <a class="" href="{{ url('projects') }}">
                                                    <span>Projects</span>
                                                </a>
                                            </li>
                                            <li style="">
                                                <a class="" href="{{ url('blogs') }}">
                                                    <span>Blogs</span>
                                                </a>
                                            </li>
                                            <li style="">
                                                <a class="" href="{{ url('contact/16') }}">
                                                    <span>Contact Us</span>
                                                </a>
                                            </li>
                                            <li style="">
                                                <a class="open-search-menu" href="#search">
                                                    <span>
                                                        <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/search.svg"
                                                            alt="">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Main-Header -->
        </header>
    </div>

    <!-- Mobile Menu -->
    <nav id="menu" class="mmenu-mobile">
        <ul class="listview-icons">
            <li
                 <a class="active" href="{{ url('/') }}">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>About DCF Studio Ltd.</span>
                </a>
                <ul>
                    @foreach ($aboutus as $aboutUs)
                        <li class="">
                            <a href="{{ url('aboutus/' . $aboutUs->id ) }}">{{ $aboutUs->subMenuName }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ url('projects') }}">
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="{{ url('blogs') }}"><span>Blogs</span></a>
            </li>
            <li>
                <a href="{{ url('contact/16') }}">
                    <span>Contact Us</span>
                </a>
            </li>
            <li>
                <a class="open-search-menu" href="#search">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="-265 377 40 40" style="enable-background:new -265 377 40 40;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #010101;
                                fill-opacity: 0;
                            }

                            .st1 {
                                fill: rgba(0, 0, 0, .5);
                            }
                        </style>
                        <g id="XMLID_86_">
                            <rect id="XMLID_90_" x="-265" y="377" class="st0" width="40"
                                height="40"></rect>
                            <g id="search">
                                <g id="XMLID_117_">
                                    <path id="XMLID_456_" class="st1"
                                        d="M-232.3,408.4l-6.3-6.3c1.6-1.9,2.6-4.4,2.6-7.1c0-6.1-4.9-11-11-11s-11,4.9-11,11
                                    s4.9,11,11,11c2.7,0,5.2-1,7.1-2.6l6.3,6.3c0.4,0.4,1,0.4,1.3,0C-231.9,409.3-231.9,408.7-232.3,408.4z M-247,404c-5,0-9-4-9-9
                                    s4-9,9-9s9,4,9,9S-242,404-247,404z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    Search
                </a>
            </li>
            <li class="social-links">
                <a href="{{ $basicInfo->fbLink }}" target="_blank" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="{{ $basicInfo->instraLink }}" target="_blank" class="twitter">
                    <i class="fa fa-instragram"></i>
                </a>
                <a href="{{ $basicInfo->youTubeLink }}" target="_blank" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Mobile Menu -->
</div>

<header class="site-main-header">
    <div class="menu-overlay search-result-menu " ng-app="shanta" ng-controller="searchCtrl">
        <div class="pull-right hamburger hamburger-close ">
            <a href="#">
                <img src="{{ asset('public/themes/real_estate/assets/img/icons/Close.svg') }}" alt="close icon">
            </a>
        </div>
        <div class="menu-column column-left has-inner-scroller "
            style="background-image: url({{ url('public/themes/real_estate/assets/img/images/menu-1.jpg') }});">
            <div class="menu-column-gap">
                <div class="column-title-container">

                </div>
            </div>
            <div class="menu-column-gap inner-scroller mcustom-scrollar">
                <h1 class="heading-secondary text-white mb-50 ">
                    search projects
                </h1>
                <div class="text-white">
                    <p>We understand that no two projects are ever the same, so when it comes to appointing a
                        contractor to deliver the services you need confidence is key.</p>
                </div>
            </div>
        </div>
        <div class="menu-column column-middle has-inner-scroller">
            <div class="menu-column-gap inner-scroller mcustom-scrollar">
                <form class="form-primary text-white custom-select">
                    <div class="form-group">
                        <div>
                            <label for="">By Project</label>
                            <input type="text" placeholder="Type the project name" id="project">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="">By Location</label>
                            <select name="location" id="location">
                                <option value="">Select</option>
                                {{-- @foreach (Session::get('allLocations') as $allLocation)
                                    <option value="{{ $allLocation['area'] }}">{{ $allLocation['area'] }}</option>
                                @endforeach --}}
                            </select>
                        </div>  
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="type">By Type</label>
                            <select name="type" id="type">
                                <option value="">All Type</option>
                                <option value="1">Residential</option>
                                <option value="2">Commercial</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="menu-column column-right text-white has-inner-scroller">
            <div class="menu-column-gap">
                <div class="column-title-container">
                    <div class="heading-third">
                        <span></span>
                    </div>
                    <div>
                        {{-- Sorry no result found ! --}}
                    </div>
                </div>
            </div>
            <div class="menu-column-gap inner-scroller mcustom-scrollar">
                <div class="full-height-desktop">
                    <ul class="search-result-list" id="ulID">
                        <li>
                            <div class="search-thumb-wrapper">
                                <img src="" alt="">
                            </div>
                            <div class="search-meta">
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
$(document).ready(function(){

    // myFun();
    $('#location, #type').change(function(){
            myFun();
    });
    $( "#project" ).keyup(function() {
        myFun();
    });
    function myFun()
    {
        proLoc = $('#location').val();
        if(proLoc==''){proLoc=0;}
        typeID = $('#type').val();
        if(typeID==''){typeID=0;}
        project = $('#project').val();
        if(project==''){project=0;}
        $.ajax({
                url: "{{ url('projectSearch') }}/"+project+'/'+typeID+'/'+proLoc,
                method: "GET",
                dataType: "json",
                success: function(data){
                    output = '';
                    $.each( data, function( key, value ) {
                        output += '<li>';
                        output += '<a href="<?php echo url("projectDetails/")."/";?>'+value.id+'">';
                        output += '<div class="search-thumb-wrapper">';
                        output += '<img height="100" width="100" src="<?php echo url("public/upload") . "/";?>'+value.image+'">';
                        output += '</div>';
                        output += '<div class="search-meta">';
                        output += '<h3 class="search-item-title">'+value.name+'</h3>';
                        output += '<div class="search-item-subtitle">'+value.area+'</div>';
                        output += '</div>';
                        output += '</a>';
                        output += '</li>';
                    });
                    $('#ulID').html(output);
                }
        });
    }
});
</script>