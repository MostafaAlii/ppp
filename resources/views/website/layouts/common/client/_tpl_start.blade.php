<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageTitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <script src="https://unpkg.com/jam-icons/js/jam.min.js"></script>
    <link rel="stylesheet" href="{{ asset('website/resources/dashboard/resource/css/jam.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/resources/dashboard/resource/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('website/resources/dashboard/resource/css/main.css') }}">
     <!--<link href="{{ asset('website/resources/css/new.css') }}" rel="stylesheet" />-->
    <link href="{{ asset('website/resources/css/new.css') }}" rel="stylesheet" />
   
     <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
    @yield('css')
    <style>
        header .navbar {
      min-height: 95px !important;
    }
    .dashboard_icon_dropdown_menu {
        display: none;
        position: relative;
        top: 100%;
        left: 0;
        width: 150px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .nav_item:hover .dashboard_icon_dropdown_menu {
      display: block;
    }

    .dashboard_icon_dropdown_menu li {
        padding: 10px;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
    }
    .dashboard_icon_dropdown_menu li a {
        text-decoration: none;
        color: #333;
        display: block;
        padding: 8px;
        transition: background-color 0.3s;
    }

    .dashboard_icon_dropdown_menu li a:hover {
        background-color: #f5f5f5;
    }
    </style>
</head>

<body>
    
     <div class="container boddy" id="myDiv">