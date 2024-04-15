<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Health and Vaccination Information
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons/entypo/css/entypo.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

</head>

<body class="font-sans antialiased">


    @include('layouts.navigation')
    <hr>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table1 = jQuery('#datatable');

            $table1.DataTable({
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "bStateSave": true
            });


            $table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
    {{ $slot }}
    </div>
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/rickshaw/rickshaw.min.css') }}">
    <!-- Bottom scripts (common) -->
    <script src="{{ asset('assets/js/gsap/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/joinable.js') }}"></script>
    <script src="{{ asset('assets/js/resizeable.js') }}"></script>
    <script src="{{ asset('assets/js/neon-api.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <!-- Imported scripts on this page -->
    <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/rickshaw/vendor/d3.v3.js') }}"></script>
    <script src="{{ asset('assets/js/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    <script src="{{ asset('assets/js/neon-chat.js') }}"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="{{ asset('assets/js/neon-custom.js') }}"></script>
    <!-- Demo Settings -->
    <script src="{{ asset('assets/js/neon-demo.js') }}"></script>

    {{-- Datatables --}}
    <link rel="stylesheet" href="{{ asset('assets/js/datatables/datatables.css') }}"">
    <link rel="stylesheet" href="{{ asset('assets/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/select2/select2.css') }}">

    <script src="{{ asset('assets/js/datatables/datatables.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/neon-chat.js') }}"></script>

</body>

</html>
