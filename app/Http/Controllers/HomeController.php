<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function playground()
    {
        # code...

        //$role = User::with('role')->get()->first();
        $userToTest = User::find(15);

        $canManageUser = Gate::allows('manageAll');

        // $data = [
        //     [
        //         'context' => 'Current subscription ?',
        //         'result' => Auth::user()->subscription_id == null ? 'No subscription' : Auth::user()->subscription->name
        //     ],
        //     [
        //         'context' => 'Can manage other users ?',
        //         'result' => $canManageUser ? 'Yes' : 'No'
        //     ],
        //     [
        //         'context' => 'Can manage all survey ?',
        //         'result' => 'test available soon'
        //     ],
        //     [
        //         'context' => 'Can manage it\'s own survey ?',
        //         'result' => 'test available soon'
        //     ],
        //     [
        //         'context' => 'Can answer survey questions ?',
        //         'result' => 'test available soon'
        //     ],
        // ];

        $survey = Survey::first();
        // $questions = $survey->questions;
        // $options = $questions[0]->options;
        // $answers = $questions[0]->answers;
        // $respondent = $answers[0]->respondent;

        $result = [
            // 'results' => $data,
            'survey' => $survey,
            // 'questions' => $questions,
            // 'options' => $options,
            // 'answers' => $answers,
            // 'respondent' => $respondent
        ];

        // dd($result);

        return view('tests', $result);
    }

    public function profile()
    {
        # code...
        return view('profile');
    }
}
