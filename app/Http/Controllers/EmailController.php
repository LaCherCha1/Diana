<?php

namespace App\Http\Controllers;

use App\CoCreando;
use App\Mail\CoCreandoMail;
use App\Mail\WelcomeMail;
use App\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function send()
    {
        $payer = session()->get('payer');
        session()->flush();
        // $payer = [
        //     "name" => [
        //         "given_name" => "Franklin",
        //         "surname" => "Gonzalez"
        //     ],
        //     "email_adress"=>"franklinomarflores@gmail.com"
        // ];
        $payer = json_decode(json_encode($payer), false);
        $token = Str::random(50);
        $token = unique_random('registers', 'token', 50);

        $register = new Register();
        $register->token = $token;
        $register->name = $payer->name->given_name;
        $register->last_name = $payer->name->surname;
        $register->email = $payer->email_adress;
        $register->save();

       
       
        Mail::to($payer->email_adress)->send(new WelcomeMail($payer,$token));
        // return view('emails.welcome',compact('payer'));
        return redirect()->route('planes')->with('comprado', true);
    }

    public function cosend()
    {
        $payer = session()->get('payer');
        session()->flush();
        // $payer = [
        //     "name" => [
        //         "given_name" => "Franklin",
        //         "surname" => "Gonzalez"
        //     ],
        //     "email_adress"=>"franklinomarflores@gmail.com"
        // ];
        $payer = json_decode(json_encode($payer), false);    

        $new = new CoCreando();
        
        $new->name = $payer->name->given_name;
        $new->last_name = $payer->name->surname;
        $new->email = $payer->email_adress;
        $new->save();

        Mail::to($payer->email_adress)->send(new CoCreandoMail($payer));
        // return view('emails.welcome',compact('payer'));
        return redirect()->route('co-creando')->with('comprado', true);
    }
}
