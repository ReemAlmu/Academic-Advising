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
        .bootstrap-datetimepicker-widget .datepicker-days table tbody tr:hover {
            background-color: #eee;
        }
        .icon-input-btn{

            display: inline-block;

            position: relative;

        }

        .icon-input-btn input[type="submit"]{

            padding-left: 2em;

        }

        .icon-input-btn .glyphicon{

            display: inline-block;

            position: absolute;

            left: 0.65em;

            top: 30%;

        }

    </style>

    <title>{{config('app.name')}}  | {{__(' AD Profile')}}</title>
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

</div>

<body><br><br><br><br><br>

   <div class="form-group row">
      <div id="container" class="container">
        <div class="input-group mb-2 date-center">
         <div class="col-auto">
              <div class="input-group mb-2 date-center"><center>
                <div class="col-auto">
                  <li class="list-group-item">
                     <li class="list-group-item list-group-item-primary">  <h3><a href="#">Advisor Name</a></h3></li>
                         <li class="list-group-item list-group-item-primary">  <h3><a href="#">Advisor Email <i class="fa fa-envelope" aria-hidden="true"></i></a></h3></li>
                       <h3 style="color:White"><label for="day">Office Floor and Number</label></h3>
                            <input type="number" name="number" min="1" max="5">
                              <br> <h3 style="color:White">Meeting day and Time</h3>
                            <div class="container">
                               <div class="row">
                                 <div class='col-md-3'>
                        <select id="cweek">
                    <option value='0'> Mon </option>
                    <option value='1'> Tues </option>
                    <option value='2'> Wed </option>
                    <option value='3'> Thu </option>
                    <option value='4'> Fri </option>
                    <option value='5'> Sat </option>
                    <option value='6'> Sun </option>

                <input type="time" id="appt" name="appt"> <h6 style="color:white">
                              <h3 style="color:White">AND</h3>   <div class="container">
                                    <div class="row">
                                        <div class='col-md-3'>
                                <select id="cweek">
                                    <option value='0'> Mon </option>
                                    <option value='1'> Tues </option>
                                    <option value='2'> Wed </option>
                                    <option value='3'> Thu </option>
                                    <option value='4'> Fri </option>
                                    <option value='5'> Sat </option>
                                    <option value='6'> Sun </option>
                                    <input type="time" id="appt" name="appt"> <h6 style="color:white">



             <div><center>
                 <span class="icon-input-btn"><span class=" glyphicon glyphicon-update"></span> <input type="submit" class="btn btn-default btn-lg" value="Update"></span>

                 </center> </div> </select></div></div></div></h6></select></div></div></div></div></center></div>

  <script>

      var weekOfStart = 0;
      var startDate;
      var endDate;
      var toCal_startDate;
      var toCal_endDate;
      var setNumberOfWeek = 1;

      var from_cal = '.from_cal';
      var to_cal = '.to_cal';

      var obj =   $(from_cal).datepicker({
          weekStart:weekOfStart,
          maxViewMode: 0,
          onSelect: function (date) {

          },
          beforeShowDay: function(date)
          {
              var cssClass = '';
              if(date >= startDate && date <= endDate)
                  cssClass = 'oui-state-hover';
              return [true, cssClass];
          }
          //    startDate: new Date()
      });


      $(from_cal).on('changeDate', function(evt) {
          var date = evt.date;
          var dayAdjustment = date.getDay() - weekOfStart;
          if (dayAdjustment < 0) {
              dayAdjustment += 7;
          }
          if(setNumberOfWeek > 1)
          {
              weekLast = 7*(setNumberOfWeek-1);
          }
          else {
              weekLast = 0;
          }
          startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - dayAdjustment);
          endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - dayAdjustment + (6+weekLast));

          // console.log(startDate);
          // console.log(endDate);

          $(this).find('.active').closest('tr').addClass('oui-selected');
          if(setNumberOfWeek > 1)
          {
              $(this).find('.active').closest('tr').nextAll().slice(0, (setNumberOfWeek-1)).addClass('oui-selected');
          }
      });

      $(from_cal).on('mousemove', '.table-condensed tr', function () {
          $(this).find('td').addClass('oui-state-hover');
          if(setNumberOfWeek > 1)
          {

              $(this).nextAll().slice(0, (setNumberOfWeek-1)).find('td').addClass('oui-state-hover');
          }

      });
      $(from_cal).on('mouseleave', '.table-condensed tr', function () {

          $(this).find('td').removeClass('oui-state-hover');

          $(this).nextAll().find('td').removeClass('oui-state-hover');

      });


      $(from_cal).find('td').on('click', function(){

          console.log('ok');
      });

      obj.datepicker();


      // To date Calendar  code

      var toCalObj =   $(to_cal).datepicker({
          weekStart:weekOfStart,
          maxViewMode: 0,
          //    startDate: new Date()
      });
      toCalObj.datepicker();
      $(to_cal).on('mousemove', '.table-condensed tr', function () {
          $(this).find('td').addClass('kui-state-hover');
          if(setNumberOfWeek > 1)
          {

              $(this).nextAll().slice(0, (setNumberOfWeek-1)).find('td').addClass('kui-state-hover');
          }

      });
      $(to_cal).on('mouseleave', '.table-condensed tr', function () {

          $(this).find('td').removeClass('kui-state-hover');

          $(this).nextAll().find('td').removeClass('kui-state-hover');

      });

      $(to_cal).on('changeDate', function(evt) {

          var date = evt.date;
          var dayAdjustment = date.getDay() - weekOfStart;
          if (dayAdjustment < 0) {
              dayAdjustment += 7;
          }
          if(setNumberOfWeek > 1)
          {
              weekLast = 7*(setNumberOfWeek-1);
          }
          else {
              weekLast = 0;
          }
          toCal_startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - dayAdjustment);
          toCal_endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - dayAdjustment + (6+weekLast));

          console.log(toCal_startDate);
          console.log(toCal_endDate);

          $(this).find('.active').closest('tr').addClass('oui-selected');
          if(setNumberOfWeek > 1)
          {
              $(this).find('.active').closest('tr').nextAll().slice(0, (setNumberOfWeek-1)).addClass('oui-selected');
          }

          //  console.log(date.getDay());
      });


      //comman code

      $('#cweek').change(function()
      {
          weekOfStart =  $('#cweek').val();
          obj.datepicker('destroy');
          toCalObj.datepicker('destroy');
          obj.datepicker({weekStart:$('#cweek').val(),maxViewMode:0}).datepicker('update');
          toCalObj.datepicker({weekStart:$('#cweek').val(),maxViewMode:0}).datepicker('update');
      });

      $('#cweek_number').change(function()
      {
          setNumberOfWeek = $('#cweek_number').val();
          obj.datepicker('destroy');
          toCalObj.datepicker('destroy');
          obj.datepicker({weekStart:$('#cweek').val(),maxViewMode:0}).datepicker('update');
          toCalObj.datepicker({weekStart:$('#cweek').val(),maxViewMode:0}).datepicker('update');

      });


      $('.table-condensed').addClass('table');

  </script>
             <script>


   $(document).ready(function(){

  $(".icon-input-btn").each(function(){

   var btnFont = $(this).find(".btn").css("font-size");

    var btnColor = $(this).find(".btn").css("color");

 $(this).find(".glyphicon").css("font-size", btnFont);

  $(this).find(".glyphicon").css("color", btnColor);

  if($(this).find(".btn-xs").length){

$(this).find(".glyphicon").css("top", "24%");

 }

                     });

                 });

             </script>

         </div></div></div></div></body></body></html>


