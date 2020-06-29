<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="YabKDQQa97EkWdnFT9xcYTkpyy9uMZm6pBHWPCFM">

    <title> Academic Advising   </title>

    <link rel="stylesheet"  href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <!-- Styles -->
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- end bootstrap -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- script-->
    <script sr="http://172.16.2.9/js/app.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <script src="http://172.16.2.9/js/app.scc"rel="stylesheet"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <!-- Styles -->


    <style>
        body {
            background-image: url("http://i.epvpimg.com/DAqIbab.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>

    <title>{{config('app.name')}}  | {{__(' Regulation & Rules')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="https://www.seu.edu.sa/">
                Saudi Electronic University
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" ;>
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://172.16.2.9/Student"><h3> <i class="fa fa-user" aria-hidden="true"></i> My Profile</h3></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"   href="http://172.16.2.9">
            Academic Advising
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://172.16.2.9"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://172.16.2.9/meeting">Meeting</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://172.16.2.9/GPA">
                        GPA Calculation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://172.16.2.9/Advisor">Advisor Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href= "http://172.16.2.9/Regulations">Regulation & Rules</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

