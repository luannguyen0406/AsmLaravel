<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: News Magazine
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Báo Việt</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    @include('client.layout.partials.css')
    @include('client.layout.partials.js')
</head>

<body id="top">
    <div class="wrapper col0">
        @include('client.layout.partials.header-top')
    </div>
    <div class="wrapper">
        @include('client.layout.partials.header-button')
    </div>
    <div class="wrapper col2">
        @include('client.layout.partials.header-nav')
    </div>

    <div class="wrapper">
        @yield('conten')
    </div>
    <div class="wrapper">
        @yield('cont')
    </div>
    <div class="wrapper">
        @yield('contee')
    </div>

    <div class="wrapper">
        @include('client.layout.partials.footer-top')
    </div>
    <div class="wrapper">
        @include('client.layout.partials.footer-button')
    </div>
</body>

</html>