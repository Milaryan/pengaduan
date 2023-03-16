<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>{{ $judul }}</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href={{ asset("assets/css/bootstrap.css") }} rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href={{ asset("assets/css/font-awesome.css") }} rel="stylesheet" />
    <!-- Data Tables  -->
    <link href={{ asset("assets/js/dataTables/dataTables.bootstrap.css") }} rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href={{ asset("assets/css/style.css") }} rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<body>

    <!-- LOGO HEADER END-->
        @include('admin.partial.header')
     <!-- MENU SECTION END-->
        @yield('content')
     <!-- CONTENT-WRAPPER SECTION END-->
        @include('admin.partial.footer')
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src={{ asset("assets/js/jquery-1.10.2.js") }}></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src={{ asset("assets/js/bootstrap.js") }}></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src={{ asset("assets/js/custom.js") }}></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src={{ asset("assets/js/dataTables/jquery.dataTables.js") }}></script>
    <script src={{ asset("assets/js/dataTables/dataTables.bootstrap.js") }}></script>

</body>
</html>
