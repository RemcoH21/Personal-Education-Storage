<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
      return view('welcome');
    }
    public function sendmessage(Request $r) {
      $email = $r->email;
      $name = $r->name;
      $company = $r->company;
      $phone = $r->phone;
      $bericht = $r->bericht;
      $testemail = "r3solution123@gmail.com";
      $defaultemail = "info@consilio-webdev.nl";
      if(isset($email, $name, $company, $phone, $bericht, $testemail)) {
      Mail::send('templates.mail',
     [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "company" => $company,
        "bericht" => $bericht,
     ],
     function ($m)
     use ($testemail) {
       $m->from('info@consilio-webdev.nl', 'Consilio Contact form');
       $m->to($testemail)->subject('Nieuwe contactform message');
     });
   } else {
     echo "not working";
     exit;
   }
     return redirect()->route('welcome');
    }
}
