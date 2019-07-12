<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title') -  </title>
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
    @yield('customcss')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            {{-- start navbar  --}}
            @include('layouts.admin.parts.navbar')
            {{-- end navbar --}}

            {{--  start sidebar --}}
            @include('layouts.admin.parts.sidebar')
            {{-- end main sidebar  --}}

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('main-content')

                </section>
            </div>

            {{-- start footer --}}
            @include('layouts.admin.parts.footer')
            {{-- end of footer --}}
        </div>
    </div>


    @if (!empty($modal))
      @include('layouts.admin.parts.modal')
    @endif

    <!-- General JS Scripts -->
    <script src="{{asset('stisla/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/popper.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>
    <!-- Template JS File -->
    <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
    <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
    <!-- JS Libraies -->
    <script src="{{asset('stisla/assets/modules/sticky-kit.js')}}"></script>
    <script>
        var current = location.href;
        $('ul li a').each(function () {
            var $this = $(this);
            if ($this.attr('href') == current) {
                $this.parent().addClass('active');
                if ($(this).closest("li.dropdown").length > 0) {
                    $(this).closest("li.dropdown").addClass('active');
                }
            }
        })
    </script>
    @yield('customjs')
</body>
</html>
