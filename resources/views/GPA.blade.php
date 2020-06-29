
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

    <title>{{config('app.name')}}  | {{__(' GPA')}}</title>
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
                    <a class="nav-link" href="http://172.16.2.9/HomePage"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://172.16.2.9/meetings">Meeting</a>
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
</body>

<br><br>
<style>
    * {box-sizing: border-box;}
    ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}

    .month {
        padding: 20px 15px;
        width: 20%;
        background: #1abc9c;
        text-align: left;
    }

    .month ul {
        margin: 0;
        padding: 0;
    }

    .month ul li {
        color: white;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .month .prev {
        float: left;
        padding-top: 10px;
    }

    .month .next {
        float: right;
        padding-top: 10px;
    }

    .weekdays {
        margin: 0;
        padding: 20px 15px;
        width: 20%;
        background-color: #ddd;
        text-align: left;
    }

    .weekdays li {
        display: inline-block;
        width: 13.7%;
        color: #666;
        text-align: center;
    }

    .days {

        margin: 0;
        padding: 20px 15px;
        width: 20%;
        background: #eee;
        text-align: left;



    }

    .days li {
        list-style-type: none;
        display: inline-block;
        width: 13.6%;
        text-align: center;
        margin-bottom: 5px;
        font-size:12px;
        color: #777;
    }

    .days li .active {
        padding: 5px;
        background: #1abc9c;
        color: white !important
    }

    /* Add media queries for smaller screens */
    @media screen and (max-width:5px) {
        .weekdays li, .days li {width: 5%;}
    }

    @media screen and (max-width: 5px) {
        .weekdays li, .days li {width: 5%;}
        .days li .active {padding: 2px;}
    }

    @media screen and (max-width: 5px) {
        .weekdays li, .days li {width: 5%;}

</style>


<body>

<div id="Cumulative GPA" class="tabcontent">
    <ul>

        <li>

            <label>

                <span style="color:Blue;">Cumulative GPA <b>before</b> this semester:</span>

                <input type="number" min="0" max="4" step="1" id="oldcumulativegpa" value="4" placeholder="Cumulative GPA">

            </label>

        </li>

        <li>

            <label>

                <span style="color:Blue;"><b>Number of semesters</b> your Old Cumulative GPA was calculated with:</span>

                <input type="number" min="1" step="1" placeholder="Number of semesters" id="numberofsemesters" value="3">

            </label>

        </li>

        <li>

            <label>

                <span style="color:Blue;">Your GPA <b>this semester</b>:</span>

                <input type="number" min="0" max="4" step="1" value="3" placeholder="GPA this semester" id="currentsemestergpa">

            </label>

        </li>

    </ul>

</div>





<label for="newcumulativegpa"><span style="color:Blue;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Your New Cumulative GPA:</span></label>

<output id="newcumulativegpa" for="oldcumulativegpa numberofsemesters currentsemestergpa" name="newcumulativegpa">0</output>

</div>





<center>



    <FORM Name="GPACalcForm">



        <TABLE BORDER=5 BGCOLOR=#C0C0C0 CELLPADDING="5" CELLSPACING="2">



            <TH></TH>



            <TH>Grade</TH>



            <TH>Credits</TH>



            <TR>



                <TD>Class 1</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR1" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR1" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR>



                <TD>Class 2</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR2" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR2" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR>



                <TD>Class 3</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR3" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR3" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR>



                <TD>Class 4</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR4" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR4" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR>



                <TD>Class 5</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR5" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR5" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR>



                <TD>Class 6</TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="GR6" ALIGN=TOP MAXLENGTH=5></TD>



                <TD><INPUT TYPE=TEXT SIZE=5 NAME="CR6" ALIGN=TOP MAXLENGTH=5></TD>



            </TR>



            <TR ALIGN=CENTER>



                <TD COLSPAN=3><INPUT TYPE="BUTTON" VALUE="Calculate" NAME="CalcButton" OnClick="gpacalc()"></TD>



            </TR>



        </TABLE>



    </FORM>



    <BR>



        <P>







        <P>



</center>



<BR>











    <SCRIPT LANGUAGE="JavaScript">



        <!--



        function gpacalc()



        {



//define valid grades and their values



            var gr = new Array(9);



            var cr = new Array(9);



            var ingr = new Array(5);



            var incr = new Array(5);







// define valid grades and their values



            var grcount = 10;



            gr[0] = "a";



            cr[0] = 4;



            gr[1] = "a-";



            cr[1] = 3.66;



            gr[2] = "b+";



            cr[2] = 3.33;



            gr[3] = "b";



            cr[3] = 3;



            gr[4] = "b-";



            cr[4] = 2.66;



            gr[5] = "c+";



            cr[5] = 2.33;



            gr[6] = "c";



            cr[6] = 2;



            gr[7] = "c-";



            cr[7] = 1.66;



            gr[8] = "d";



            cr[8] = 1;



            gr[9] = "f";



            cr[9] = 0;







// retrieve user input



            ingr[0] = document.GPACalcForm.GR1.value;



            ingr[1] = document.GPACalcForm.GR2.value;



            ingr[2] = document.GPACalcForm.GR3.value;



            ingr[3] = document.GPACalcForm.GR4.value;



            ingr[4] = document.GPACalcForm.GR5.value;



            ingr[5] = document.GPACalcForm.GR6.value;



            incr[0] = document.GPACalcForm.CR1.value;



            incr[1] = document.GPACalcForm.CR2.value;



            incr[2] = document.GPACalcForm.CR3.value;



            incr[3] = document.GPACalcForm.CR4.value;



            incr[4] = document.GPACalcForm.CR5.value;



            incr[5] = document.GPACalcForm.CR6.value;







// Calculate GPA



            var allgr =0;



            var allcr = 0;



            var gpa = 0;



            for (var x = 0; x < 5 + 1; x++)



            {



                if (ingr[x] == "") break;



//            if (isNaN(parseInt(incr[x]))) alert("Error- You did not enter a numeric credits value for Class If the class is worth 0 credits then enter the number 0 in the field.");



                var validgrcheck = 0;



                for (var xx = 0; xx < grcount; xx++)



                {



                    if (ingr[x] == gr[xx])



                    {



                        allgr = allgr + (parseInt(incr[x],10) * cr[xx]);



                        allcr = allcr + parseInt(incr[x],10);



                        validgrcheck = 1;



                        break;



                    }



                }



                if (validgrcheck == 0)



                {



                    alert("Error- Could not recognize the grade entered for Class " + eval(x + 1) + ". Please use standard college grades in the form of A A- B+ ...F.");



                    return 0;



                }



            }







// this if-check prevents a divide by zero error



            if (allcr == 0)



            {



                alert("Error- You did not enter any credit values! GPA = N/A");



                return 0;



            }







            gpa = allgr / allcr;







            alert("GPA =  " + eval(gpa));







            return 0;



        }







        //-->



    </SCRIPT>



    </body>

</html>














