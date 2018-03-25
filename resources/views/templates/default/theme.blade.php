<!DOCTYPE html>
<html>

<head>
    @yield('d-head')
</head>

<body class="theme-red">
    
    @yield('d-loading')
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    @yield('d-search')

    @yield('d-nav')

    <section>
        @yield('d-left-side-bar')
        @yield('d-right-side-bar')
    </section>

    @yield('content')
    @yield('d-libraries')

</body>

</html>