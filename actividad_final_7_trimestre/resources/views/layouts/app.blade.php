<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76">
    <link rel="icon" type="image/png">
    <title>
        Intranet.Red
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{url('css/app.css')}}" rel="stylesheet" media="all">
    <script src="{{url('js/app.js')}}"></script>

<body>
@include('layouts.componets.navbar')
@include('layouts.componets.sidebar')
@include('layouts.componets.aside')

@yield('content')

<!--final contenido general de las tablasytodo lo que se ve dentro -->

@include('layouts.componets.footer')
<!-- Place this tag in your head or just before your close body tag. -->
<!-- Sharrre libray -->

</body>
</html>
