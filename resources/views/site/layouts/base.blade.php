<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href={{asset("css/style_base.css")}}>

    </head>

    <body>
      @include('site.layouts._partials.menu')
      @yield('content')
    </body>
</html>