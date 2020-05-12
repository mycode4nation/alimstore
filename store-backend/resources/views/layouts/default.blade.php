<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin - HTML5 Admin Template</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    @stack('berfore-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body>
    
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">
        @include('includes.navbar')

        <div class="content">
           @yield('content')
        </div>
    
        <div class="clearfix"></div>
    </div>

    @stack('berfore-script')
    @include('includes.script')
    @stack('after-script')
    
</body>
</html>
