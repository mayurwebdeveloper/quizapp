@include('layouts.header')

<div class="wrapper">

    @include('layouts.nav')

    @include('layouts.sidebar')

    <div class="content-wrapper">

        @yield('main-section')

    </div>

    @include('layouts.footer')
</div>
@include('layouts.includefooter')
