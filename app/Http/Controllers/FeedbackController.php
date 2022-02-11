<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;


class FeedbackController extends Controller
{
    public function feedback(){
        $feedbackView = new FeedbackModel();
        return view('feedback', ['feedbacks' => $feedbackView->all()]);
    }

    public function feedbackmsg(Request $request): \Illuminate\Http\RedirectResponse
    {
        $valid = $request->validate([
            'user_name' => 'required|min:4|max:100',
            'email' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);

        $feedback = new FeedbackModel();
        $feedback->email = $request->input('email');
        $feedback->userName = $request->input('user_name');
        $feedback->message = $request->input('message');

        $feedback->save();

        return redirect() -> route('feedbacks');
    }

}
