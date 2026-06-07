@include('layouts.links')

<body class="bodyclass">

    <div class="site-main-wrapper ">
        @include('layouts.header')
    @yield('content')

{{-- Scripts Long --}}
{{-- Scripts Long End--}}

        {{-- footer start --}}
        @include('layouts.footer')
        {{-- footer end --}}
    </div>
{{-- Scripts --}}
    @include('layouts.script')

</body>
@yield('script')
</html>
