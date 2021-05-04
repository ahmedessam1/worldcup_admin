<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ url('/') }}/public/js/combining.js"></script><!-- CONTACT JS  -->
<script src="{{ url('/') }}/public/js/jquery.lazy.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ url('/') }}/public/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ url('/') }}/public/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ url('/') }}/public/js/rev.slider.js"></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_2();
        $('.lazy').Lazy();
    });	/*ready*/
</script>

<script>
$('.locale').click(function() {
    let locale = $(this).data('locale');
    $('#locale').val(locale);
    $('#locale_form').submit();
});
</script>
