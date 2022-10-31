<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Cookie;
use Tracker;
use Session;

class ReportController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $selected = '';
        return view('start', compact('selected'));
    }

   /* public function setAppInfo(Request $request){
        $selected = 'report';
        return view('start', compact('selected'));
    }*/

    public function setReviews(Request $request){
        $selected = 'classes';
        
        //take checkbox variables and save them in session for later use.
        $classes = $request->input('checkbox');
        Session::put('classes', $classes);

        return view('start', compact('selected'));
    }

    public function setClasses(Request $request){
        $selected= 'app info';

        return view('start', compact('selected'));
    }

    public function AImodel(Request $request){
        $process = new Process(['python',
    '/Users/hayaalalsheik/Desktop/pythonScripts/predictUsability.py', $arg]);
        $process->run();

        // error handling
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output_data = $process->getOutput();

        $labels = ['effectiveness', 'satsifaction', 'learnability']; //get classes choice from session and manipulate accodringly.
        $data = [40, 100, 30];
        $selected = "report";
        $appInfo = $request; // divide: var appName, var appBio


        return view('chart', compact('labels', 'data', 'selected'));
    }
}
