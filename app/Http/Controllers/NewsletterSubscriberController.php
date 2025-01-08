<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Mail\NewsLetter;

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
        Mail::to($request->email)->queue(new WelcomeEmail($url));



        return redirect()->back()->with('status', 'You have successfully subscribed to our newsletter!');

    }

    public function NewsLetterCreate(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:1000',
            'image_url' => 'nullable|url|active_url',
        ]);

        // Get the image URL
        $imageurl = $request->input('image_url');

        // Check if the URL points to an image
        if ($imageurl && !getimagesize($imageurl)) {
            return back()->withErrors(['image_url' => 'The provided URL does not point to a valid image.']);
        }

        // Check file extension
        $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $path_info = pathinfo($imageurl);
        if (!in_array(strtolower($path_info['extension']), $valid_extensions)) {
            return back()->withErrors(['image_url' => 'The URL does not point to a valid image file type.']);
        }


        // Send email with image URL
        $title = $request->input('title');
        $description = $request->input('description');
        $url = url('/index');

        $subscribers = NewsletterSubscriber::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(new NewsLetter($title, $description, $imageurl, $url));
        }

        return redirect()->back();
    }

}
