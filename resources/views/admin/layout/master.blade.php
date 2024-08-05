<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="material/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="material/assets/img/favicon.png">

    <title>
        @yield('title')
    </title>
    @include('admin.layout.partials.css')
    @include('admin.layout.partials.js')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.layout.partials.aside')

    <main class="main-content border-radius-lg ">
        @include('admin.layout.partials.header')
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>
</body>
</html>
