@extends('layouts.web_master')
@section('content')
    @php
        $basicInfo = App\Models\BasicInfo::first();
    @endphp
    <section class="banner-secondary projects-cat-banner" style="background-image:url({{ asset('public/admin_assets/dist/img/interiorpbg.jpg') }})">
        <div class="container-fluid">
            <h1 class="heading-primary style-1">
                <b style="color:black">{{ $basicInfo->title }} PORTFOLIO</b>
            </h1>
        </div>
    </section>
    <section class="projects-ongoing">
        <div class="container-fluid projects-listings-nav-wrapper">
            <div class="projects-listings">
                <ul class="sorting-nav controls">
                    <li class="active">
                        <span class="control" data-filter="all">All</span>
                    </li>
                    @foreach ($submenus as $submenu)
                    <li class="control">
                        <span class="control" data-filter=".subcat-{{ $submenu->id }}">{{ $submenu->subMenuName }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="projects-wrapper">
            <div class="clearfix mixitup-container" id="projectShort" style="padding: 5px!important">
                @foreach ($projects as $project)
                    <div data-ref="mixitup-target" class="mixit-item subcat-{{ $project->categoryID }} custom-col-xs-6 col-md-4 col-sm-6 no-pad square" style="margin: 5px!important; height:407px!important; width:407px!important;">
                        <a href="{{ url('projectDetails/'.$project->id) }}">
                        <div class="relative" style="overflow: hidden">
                            <div class="bg-thumb high-contrast">
                                <div class="bg-thumb-inner"
                                    style="background-image: url('{{ asset('public/upload/projects/'.$project->thumbnail_img) }}')">
                                </div>
                            </div>
                            <div class="thumb-desc">
                                <span class="project-address">{{ $project->categoryName }}</span>
                                <h4 class="project-name">{{ $project->name }}</h4>
                            </div>
                        </div>
                        <div class="thumb-overlay">
                            <span class="project-address">{{ $project->categoryName }}</span>
                            <h4 class="project-name">{{ $project->name }}</h4>
                            <hr class="overlay-line">
                            <p>{{ $project->qoute }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection