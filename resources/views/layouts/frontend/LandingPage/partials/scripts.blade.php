<script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/aos.js')}}"></script>
<script src="{{asset('assets/frontend/js/mediaelement-and-player.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mediaElements = document.querySelectorAll('video, audio'),
            total = mediaElements.length;
        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'),
                        targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
