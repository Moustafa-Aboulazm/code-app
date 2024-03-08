<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('user.contact-us.contact-us');
    }

    public function store(ContactUsRequest $contactUsRequest)
    {
        try {
            ContactUs::create($contactUsRequest->validated());

//            $body = "Name: " . $contactUsRequest->name . "<br>";
//            $body .= "Email: " . $contactUsRequest->email . "<br>";
//            $body .= "Message: " . $contactUsRequest->message . "<br>";
//            $body .= "Subject: " . $contactUsRequest->subject . "<br>";
//            $body .= "Message: " . $contactUsRequest->messages . "<br>";

//            \Mail::raw($body, function ($message) use ($contactUsRequest) {
//                $message->to('buildingcoods@gmail.com');
//                $message->subject($contactUsRequest->subject);
//            });

            return back()->with('success', __('Thank you for your message. It has been sent.'));
        } catch (\Exception $exception) {
            return back()->with('error', __('Something went wrong. Please try again.'));
        }
    }
}
