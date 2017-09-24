@include('surverior.layout.head')
     @yield('styles')
    @include('surverior.layout.header')

        @include('surverior.layout.top_nav')

            @yield('content')


    @include('surverior.layout.foot')


    @yield('scripts')

@include('surverior.layout.footer')

