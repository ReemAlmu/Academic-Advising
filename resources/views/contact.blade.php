
@extends('layouts.app')

@section('title' ,__('Contact me'))

@section('content')
     @include('-partials._closed_alert')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach

        </ul>
    @endif



     @auth
     <p>
      {{__("welcome")}}  {{$user->name}};
     </p>
         @else
         <p>

            {{__( "Welcome")}};
         </p>
     @endauth
     @php
    $today= date('Y-M-d H:i:s')
     @endphp
   @if( count($options))
     <div class="form-group ">
         <select name="options" id="options" class="form-control">

            @foreach( $options as $key=> $option)
                <option value="{{$key}}">{{$option}}</option>

             @endforeach
         </select>
     </div>
     @endif
     <p> Today: {{$today}}</p>
     <h5> {{$message}}</h5>

     @if (date('D') != 'Wed')
     <h5>{!! $info !!}</h5>
    <form action="" method="post">

        @else
            <h6> Im ready to get your message </h6>
        @endif
        @csrf

        <div class="form-group">

            <input class="form-control" type="text" name="sender_name" placeholder="your name">


        </div>
        <div class="form-group" >


            <textarea class="form-control"   name="message" id=" " cols = "30" rows="10" placeholder="your massage"></textarea>

        </div>
        <div class="form-group">

            <button class="btn btn -primary btn-block" type="submit">Send</button>


        </div>


    </form>




@endsection






