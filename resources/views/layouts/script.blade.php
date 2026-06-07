@php
    $basicInfo = App\Models\BasicInfo::first();
@endphp
<style>
    a.animate-scroll.scroll-up {
        position: absolute;
        width: 40px;
        height: 40px;
        background-color: #000;
        padding: 10px;
        border-radius: 50%;
        text-align: center;
        right: 70px;
        bottom: 15px;
        transition: all .6s cubic-bezier(.19,1,.22,1);
        animation: bounce 2s infinite;
    }
    a.animate-scroll.scroll-up img{
        height: 100%;
        transform: rotate(180deg);
    }
</style>
<script>
$("a[href='#top']").click(function() {$("html, body").animate({ scrollTop: 0 }, "slow");return false;});
var site_url_info = {
        baseUrl: '<?php echo url("/"); ?>',
        themeUrl: '<?php echo url("public/upload/" . $basicInfo->logo); ?>'
}
</script>
<script src="{{ asset('public/assets') }}/c901c4fe/yii12d8.js?v=1641134323"></script>
<script src="{{ asset('public/assets') }}/c901c4fe/yii.activeForm12d8.js?v=1641134323"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/upload_filesffb7.js?v=1628165858"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/layerslider.transitions0cda.js?v=1628165856"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/layerslider.kreaturamedia.jquery158b.js?v=1628165857"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/min/bundle.min34f6.js?v=1628165862"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/lg-video158b.js?v=1628165857"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/yt-lazyload.minffb7.js?v=1628165858"></script>
<script src="{{ asset('public/themes') }}/real_estate/assets/js/script76e2.js?v=1644316579"></script>
