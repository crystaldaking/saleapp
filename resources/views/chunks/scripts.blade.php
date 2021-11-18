@livewireScripts
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>>
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- Load other scripts
================================================== -->
<script type="text/javascript">
    var _html = document.documentElement,
        isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

    _html.className = _html.className.replace("no-js","js");

    isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
</script>
{{--<script type="text/javascript" src="{{asset('js/device.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.min.js')}}"></script>--}}
