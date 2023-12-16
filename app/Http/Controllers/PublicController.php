<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
   public function Homepage() {
        return view('welcome');
    }
   
    public function contact_us() {
        return view('contact-us');
    }

    public function contact_us_submit(Request $request) {
        // dd($request->all()); selezione solo le cose che ci interessano

        // $email = $request->input('email');
        // $name = $request->input('name');
        // $message = $request->input('message');
        
        // questo sotto equivale a quella di sopra

        $email = $request->email;
        $name = $request->name;
        $message = $request->message;

        // dd($email,$name,$message);
        $contactEmail= new ContactEmail($name, $email, $message);
         
         try {
             Mail::to($email)
             ->send($contactEmail); 
            
         } catch (\Exception $e) {
            
         return redirect()->back()->with('emailErrorSend','ci scusiamo per il disagio riprova più tardi');
         }


        // qui sopra sto dicendo a che indirizzo email devo inviare la mia email
         return redirect(route('thank_you_page'))
         ->with('name', $name)
         ->with('email', $email)
         ->with('message', $message);
        

    }

    public function thank_you() {
        return view('thank-you-page');
    }
}

