@include('admin.layout.head')
     @yield('styles')
    @include('admin.layout.header')

        @include('admin.layout.left_sidebar')
            @include('admin.layout.top')

            @yield('content')


    @include('admin.layout.foot')


    @yield('scripts')

@include('admin.layout.footer')

