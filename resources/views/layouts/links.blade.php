@php
    $basicInfo = App\Models\BasicInfo::first();
@endphp
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('public/upload/' . $basicInfo->favIcon) }}">
    <link rel="icon" type="image/png" href="{{ asset('public/upload/' . $basicInfo->favIcon) }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('public/upload/' . $basicInfo->favIcon) }}"
        sizes="16x16">
    <meta name="theme-color" content="#ffffff">
    <meta name="facebook-domain-verification" content="eawauaxf63dkgt76v5oramol1gma4r" />
    <meta name="keywords" content="">
    <meta name="description"
        content="{{ $basicInfo->title }} aspires to weave an unprecedented experience of fine living cocooned in comfort for you. It’s the statement of prestige and elegant Architecture that sets us apart.">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/lightbox/ekko-lightbox.minbd8a.css?v=1628165827"
        rel="stylesheet">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/home-map/mapbd8a.css?v=1628165827"
        rel="stylesheet">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/bundle.mined99.css?v=1662290521" rel="stylesheet"
        media="all">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/layerslider.minc1c8.css?v=1628165825"
        rel="stylesheet" media="all">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/style.min881a.css?v=1640699233" rel="stylesheet"
        media="all">
    <link href="{{ asset('public/themes/') }}/real_estate/assets/css/yt-lazyloadc1c8.css?v=1628165825" rel="stylesheet"
        media="all">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" ontent="rPPUFHlYA7pSM1XK_Lker6ksgIB6j9WSSm1EItcvG279lpx4S3Vo1iMFN6eVyVz841vVyhXon8AMHQUT5F9qPg==">
    <title>{{ $basicInfo->title }}</title>
    <script src="{{ asset('public/themes/') }}/real_estate/assets/js/jquery.min0cda.js?v=1628165856"></script>
    <script type='application/ld+json'></script>
</head>
