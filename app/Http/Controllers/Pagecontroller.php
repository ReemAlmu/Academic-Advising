<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
      {
     public function construct (){


     }

     public function  contact(){



         $user=\Auth::user();

         $options= [
              'general '=> 'General',
              'development' => 'website dev',
             'counsl' => 'con'

         ];




         $message = __('Please fill in the form') ;
         $info= __('Remember,we only work on  Mondays');




        return view ('contact' , compact('user' ,'message' , 'info'  , 'options'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */



    public function  about(Request $request) {

         $userName =$request->session()->get('username' ,  'User Name');

      return view ('about', ['userName' => $userName]);

    }
    public  function clearName (Request $request){

        $request->session()->flush();
        return redirect()->back();

    }

    public  function  storeContact (Request $request) {


         $validateData = $request->validate(
             [ 'sender_name'=> 'required|max:12', 'message'=>'required |min:50' ]
         );

        $request ->session()->put ('username', $request->sender_name);

         return __("done!" );
    }
      public  function  meeting (){

        return view('meeting');
      }

      public function  Advisor (){


        return view ( 'Advisor');
      }
    public function  Regulations ()
    {


        return view('Regulations');
    }
    public function  GPA ()
    {


        return view('GPA');
    }
    public function  Profile ()
    {

        return view('Profile');
    }
    public function  Login ()
    {

        return view('Login');
    }

    public function  Student ()
    {


        return view('Student');
    }

    public function  History ()
    {

        return view('History');
    }

    public function  meet ()
    {

        return view('meet');
    }
    public function HomePageAdvisor ()
    {

        return view('HomePageAdvisor');
    }
    public function  meetings ()
    {

        return view('meetings');
    }
    public function  HomePage ()
    {

        return view('HomePage');
    }
    public function  Report ()
    {

        return view('Report');
    }
    public function  meetis ()
    {

        return view('meetis');
    }
    public function  HistoryAd ()
    {

        return view('HistoryAd');
    }
}
