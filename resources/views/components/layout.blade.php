<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Corruption Reporting System') }}</title>
    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('dashboard-assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard-assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/custom.css') }}"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{ $slot }}
    {{-- <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('dashboard-assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('dashboard-assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard-assets/js/page/datatables.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('dashboard-assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('dashboard-assets/js/custom.js') }}"></script> --}}
</body>

</html>
