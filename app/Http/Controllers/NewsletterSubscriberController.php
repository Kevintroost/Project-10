<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class NewsletterSubscriberController extends Controller
{
    
    public function WelcomeNewsLetter(Request $request)
    {
       
    
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email|min:3|max:255',
        ]);

        $email = new NewsletterSubscriber();
        $email->email = $request->email;
        $email->subscribed_at = now();
        $email->save();

        $url = url('/index');
        Mail::to($request->email)->send(new WelcomeEmail($url));

        

      return redirect()->back();



}
    }

