<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="YabKDQQa97EkWdnFT9xcYTkpyy9uMZm6pBHWPCFM">
    <title>{{config('app.name')}}  | {{__(' Academic Advising')}}</title>


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

    <title>{{config('app.name')}}  | {{__(' Report')}}</title>
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
                        <a class="nav-link" href="http://172.16.2.9/Profile"><h3> <i class="fa fa-user" aria-hidden="true"></i> My Profile</h3></a>
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
                    <a class="nav-link" href="http://172.16.2.9/HomePageAdvisor"> Home <span class="sr-only"></span></a>
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
                    <a class="nav-link" href="http://172.16.2.9/HistoryAd">Student List</a>
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



    <!--<link rel="stylesheet" type="text/css" href="Box.css"/>-->



        <body>

        <center>



            <!--Insert date form-->

            <div>

                <br/><br/><br/><br/>

                <p>Meeting Request Form</p>

                <br/>

                <form>

                    <label for="STdate">Date:</label><br/>

                    <input type="date" id="STdate" name="STdate"/>

                    <br/>

            </div>



            <!--Student info form-->

            <div>

                <center>

                    <p>Student Information:</p>

                    <label for="STname">Student Name:</label>

                    <input type="text" id="STname" name="STname"/>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                    <label for="STid">Student ID:</label>

                    <input type="number" id="STid" name="STid"/>

                    <br/><br/>



                    <label for="STmajor">Student Major:</label>

                    <input type="text" id="STmajor" name="STmajor"/>

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                    <label for="STemail">Student Email:</label>

                    <input type="email" id="STemail" name="STemail"/>

                    <br/><br/>



                    <label for="STphone">Student Phone Number:</label>

                    <input type="number" id="STphone" name="STphone"/>

            </div>



            <hr/>



            <!--Advisor info form-->

            <div>

                <p>Acadademic Advisor Information:</p>



                <label for="ADname">Advisor Name:</label>

                <input type="text" id="ADname" name="ADname"/>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                <label for="ADemail">Advisor Email:</label>

                <input type="email" id="ADemail" name="ADemail"/>

            </div>



            <hr/>



            <!--Student complaints form-->

            <div>

                <label for="STtopic">Student Inquiries and Complaints:</label><br/>

                <input type="text" id="STtopic" name="STtopic" style="width: 400px; height: 200px;"/>

            </div>



            <hr/>



            <!--Meeting results form-->

            <div>

                <label for="Mtopic">Meeting Discussed Topics and Decisions:</label><br/>

                <input type="text" id="Mtopic" name="Mtopic" style="width: 400px; height: 200px;"/>

                <br/><br/><br/>

                <input type="submit" value="Submit">

                &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="button" value="Print" onClick="window.print()">

                </form>

            </div>

        </center>



        </body>



    </html>
