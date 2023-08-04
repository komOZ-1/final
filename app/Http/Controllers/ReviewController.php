<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }


    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:5|max:50',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:20|max:500',
        ]);


        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();


        return redirect()->route('review');

    }
}
