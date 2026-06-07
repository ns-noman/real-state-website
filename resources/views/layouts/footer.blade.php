@php
    $services = App\Models\SubMenu::where('menuID',6)->get();
    $aboutus = App\Models\SubMenu::where('menuID',2)->get();
    $basicInfo = App\Models\BasicInfo::first();
@endphp
<link rel="stylesheet" href="{{ asset('public/footer-assets/css/style.css') }}">
<footer class="site-main-footer" style="background-color: dark; color:#FFFFFF">
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 mb-md-0 mb-4">
                            <h2 class="footer-heading">About {{ $basicInfo->title }}</h2>
                            <ul class="list-unstyled">
                                @foreach ($aboutus as $about)
                                    <li><a href="{{ url('aboutus/' . $about->id ) }}" class="d-block text-white">{{ $about->subMenuName }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6 mb-md-0 mb-4">
                            <h2 class="footer-heading" style="margin-left: 166px;">Services</h2>
                            @php
                                $totalRecord = count($services);
                                $firstHalf = ceil($totalRecord/2);
                            @endphp
                           <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        @foreach ($services as $key=>$service)
                                            @if($key<$firstHalf)
                                                <li class="text-white">
                                                    <a href="{{ url('services/' . $service->id ) }}">{{ $service->subMenuName }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        @foreach ($services as $key=> $service)
                                            @if($key>=$firstHalf)
                                                <li class="text-white">
                                                    <a href="{{ url('services/' . $service->id ) }}">{{ $service->subMenuName }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-4">
                            <h2 class="footer-heading">Resources</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('contact/16') }}" class="d-block">Contact Us</a></li>
                                <li><a href="{{ url('blogs') }}" class="d-block">Blogs</a></li>
                                <li><a href="{{ url('aboutus/4') }}" class="d-block">Our Associates</a></li>
                                <li><a href="#" class="d-block">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright text-white">
                                <p>&copy; {{ date('Y') }} {{ $basicInfo->title }}.</p>
                                <p>Designed &amp; Developed by
                                    <a class="hover-line" href="https://batlbd.com/" target="_blank">BATL</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-wrapper pull-right">
                                <a target="_blank" href="{{ $basicInfo->fbLink }}">
                                    <img src="{{ asset('public/themes') }}/real_estate/assets/img/facebook-icon.png"
                                        alt="">
                                </a>
                                <a target="_blank" href="{{ $basicInfo->instraLink }}">
                                    <img src="{{ asset('public/themes') }}/real_estate/assets/img/instagram-icon.png"
                                        alt="">
                                </a>
                                <a target="_blank" href="{{ $basicInfo->youTubeLink }}">
                                    <img src="{{ asset('public/themes') }}/real_estate/assets/img/youtube-icon.png"
                                        alt="">
                                </a>
                            </div>
                            <a href="#top" class="animate-scroll scroll-up" style="z-index: 999;">
                                <img src="{{ asset('public/themes') }}/real_estate/assets/img/icons/arrow-down.svg"
                                    alt="down arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
