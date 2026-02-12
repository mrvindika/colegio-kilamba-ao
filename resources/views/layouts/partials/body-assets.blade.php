{{-- FOOTER --}}
@include('layouts.partials.footer-part')

{{-- BOOTSTRAP AND LAYOUT --}}
<script type="text/javascript" src="{{ asset('libraries/js/vendor.bundle.base.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('libraries/js/vendor.bundle.addons.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('libraries/js/off-canvas.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('libraries/js/hoverable-collapse.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('libraries/js/misc.js') }}" charset="UTF-8"></script>

{{-- ADDITIONAL JS --}}
@stack('body-stack')