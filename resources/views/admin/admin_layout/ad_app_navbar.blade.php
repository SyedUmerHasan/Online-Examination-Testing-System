<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Panel') }}</title>
  @include('admin.admin_include.ad_style')
    <!-- Styles -->
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
  @include('admin.admin_include.ad_navbar')
  @include('admin.admin_include.ad_sidebar')
  @yield('content')
  {{--  scripts  --}}
  @include('admin.admin_include.ad_script')
</body>
</html>