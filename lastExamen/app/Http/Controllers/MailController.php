<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    function __invoke(){
      return view('sugerencias');
    }
    public function saveSuggest(Request $request){
      $data = $request->input();//get textarea value
      $vTA = $data['sugerencia'];//save the data
      View::share('content', $vTA);//we share the content of suggest to public
      //to use it on html file that is send to reciver
      try {
      $correo = new SendSuggest;//crate a new mailable
      Mail::to('support@gmail.es')->send($correo);//sending to mailhog
      //try to insert data in db
        return redirect('main')->with('status', "Suggestion sended sucessfully");
      } catch (\Exception $e) {
        return redirect('main')->with('failed',"Suggestion failed");
      }
    }
}
