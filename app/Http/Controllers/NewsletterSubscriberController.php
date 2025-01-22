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

        // Validate the email address
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email|min:3|max:255',
        ]);

        // Create a new subscriber record
        $email = new NewsletterSubscriber();
        $email->email = $request->email;
        $email->subscribed_at = now();
        $email->save();

        // Send a welcome email to the subscriber with a link to the index page
        $url = url('/index');
        Mail::to($request->email)->queue(new WelcomeEmail($url));


        // Redirect back with a success message
        return redirect()->back()->with('status', 'You have successfully subscribed to our newsletter!');

    }


    public function NewsLetterCreate(Request $request)
    {
        // Conditional validation rule for image_url based on environment
        $image_url_rule = app()->environment('testing') ? 'nullable|url' : 'nullable|url|active_url';

        // Validate the input
        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:1000',
            'image_url' => $image_url_rule . '|required|max:2048',
        ]);

        // Get the image URL
        $imageurl = $validated['image_url'];

        // Check if the URL points to an image file (if an image URL is provided)
        if ($imageurl) {
            $path_info = pathinfo($imageurl);
            $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (!in_array(strtolower($path_info['extension']), $valid_extensions)) {
                return back()->withErrors(['image_url' => 'The URL does not point to a valid image file type.']);
            }
        }

        // Send email with image URL
        $title = $validated['title'];
        $description = $validated['description'];
        $url = url('/index');

        $subscribers = NewsletterSubscriber::all();

        foreach ($subscribers as $subscriber) {
            // Ensure each subscriber receives the newsletter
            Mail::to($subscriber->email)->queue(new NewsLetter($title, $description, $imageurl, $url));
        }

        // Redirect back with a success message
        return redirect('/admin/dashboard')->with('success', 'Newsletter created and emails sent!');
    }

}