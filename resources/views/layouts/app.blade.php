<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chris Wieber - Web Developer</title>

    <!-- Ase pp BaCSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Chris Wieber
                </a>
            </li>
            <li>
                <a href="/">+ Home</a>
            </li>
            <li>
                <a href="/resume">+ Resume/CV</a>
            </li>
            <li>
                <a href="/projects">+ Projects</a>
            </li>
            <li>
                <a href="/blog">+ Blog</a>
            </li>
            <li>
                <a href="/contact">+ Contact</a>
            </li>
            <li>
                <a href="/login">+ Client Login</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</html>
